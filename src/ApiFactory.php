<?php

namespace EdLink;

class ApiFactory
{

    public function getApi(string $apiClass, string $accessToken)
    {
        $config = new Configuration();

        $config->setAccessToken($accessToken);

        // todo add validation for API existence
        $api = new $apiClass($config);

        return $api;
    }
}
