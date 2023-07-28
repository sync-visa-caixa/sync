//MOCK DOCKER
docker pull muonsoft/openapi-mock

//API CARDS
docker run -p 8080:8080 -e "OPENAPI_MOCK_SPECIFICATION_URL=https://raw.githubusercontent.com/Ominira-Tech/Mirage/main/opencard.yml" --rm muonsoft/openapi-mock  

/API ACCOUNTS
docker run -p 8081:8080 -e "OPENAPI_MOCK_SPECIFICATION_URL=https://raw.githubusercontent.com/sync-visa-caixa/sync/main/accounts.yml" --rm muonsoft/openapi-mock 
