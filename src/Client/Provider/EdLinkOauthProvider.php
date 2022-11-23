<?php

namespace EdLink\Client\Provider;

use League\OAuth2\Client\Provider\AbstractProvider;
use League\OAuth2\Client\Provider\GenericResourceOwner;
use League\OAuth2\Client\Token\AccessToken;
use League\OAuth2\Client\Token\AccessTokenInterface;
use Psr\Http\Message\ResponseInterface;

class EdLinkOauthProvider extends AbstractProvider
{
    public function getBaseAuthorizationUrl()
    {
        // todo verify w/ EdLink if we need this and if it is correct
        return 'https://ed.link/api/authentication/token';
    }

    public function getBaseAccessTokenUrl(array $params)
    {
        return 'https://ed.link/api/authentication/token';
    }

    public function getResourceOwnerDetailsUrl(AccessToken $token)
    {
        return 'https://ed.link/api/v2/my/profile';
    }

    protected function getDefaultScopes()
    {
        return [];
    }

    protected function checkResponse(ResponseInterface $response, $data)
    {
        if ($response->getStatusCode() >= 400) {
            $message = $data['$error'] ?? $data['$errors'][0]['code'] ?? 'Undefined EdLink OAuth2 Server error';
            throw new \Exception($message . ' ' . json_encode($data)); // todo find a better way...
        }
    }

    protected function createResourceOwner(array $response, AccessToken $token)
    {
        return new GenericResourceOwner($response['$data'],'id');
    }

    protected function prepareAccessTokenResponse(array $result)
    {
        $prepared = parent::prepareAccessTokenResponse($result);

        $data = $result['$data'];
        unset($prepared['$data']);
        $prepared = array_merge($prepared, $data);

        return $prepared;
    }

    /**
     * @param AccessTokenInterface $token
     * @return array
     */
    protected function getAuthorizationHeaders($token = null)
    {
        if ($token) {
            return [
                'Authorization' => "Bearer {$token->getToken()}"
            ];
        } else {
            return [];
        }
    }
}
