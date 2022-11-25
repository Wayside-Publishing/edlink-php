docker run --rm -v "${PWD}:/local" openapitools/openapi-generator-cli generate \
    -i /local/schemas/schema.json \
    -g php \
    --additional-properties=invokerPackage=EdLink,packageName=wayside-publishing/edlink-php \
    -o /local/
