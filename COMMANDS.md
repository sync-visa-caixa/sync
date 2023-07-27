docker pull muonsoft/openapi-mock

docker run -p 8080:8080 -e "OPENAPI_MOCK_SPECIFICATION_URL=https://localhost/opencard.yml" --rm muonsoft/openapi-mock
