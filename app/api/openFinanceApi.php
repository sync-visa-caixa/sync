<?php

include_once 'httpClient.php';
// Classe para obter informações do Cartão de Credito
class creditCardAPI {
    public static function getCreditCardAccounts() {
        $url = 'http://localhost:8080/open-banking/credit-cards-accounts/v2/accounts';
        return httpClient::makeHttpRequest($url);
    }

    public static function getCreditCardAccount($creditCardAccountId) {
        $url = 'http://localhost:8080/open-banking/credit-cards-accounts/v2/accounts/' . $creditCardAccountId;
        return httpClient::makeHttpRequest($url);
    }

    public static function getCreditCardBills($creditCardAccountId) {
        $url = 'http://localhost:8080/open-banking/credit-cards-accounts/v2/accounts/' . $creditCardAccountId . '/bills';
        return httpClient::makeHttpRequest($url);
    }

    public static function getCreditCardBillTransactions($creditCardAccountId, $billId) {
        $url = 'http://localhost:8080/open-banking/credit-cards-accounts/v2/accounts/' . $creditCardAccountId . '/bills/' . $billId . '/transactions';
        return httpClient::makeHttpRequest($url);
    }

    public static function getCreditCardLimits($creditCardAccountId) {
        $url = 'http://localhost:8080/open-banking/credit-cards-accounts/v2/accounts/' . $creditCardAccountId . '/limits';
        return httpClient::makeHttpRequest($url);
    }

    public static function getCreditCardTransactions($creditCardAccountId) {
        $url = 'http://localhost:8080/open-banking/credit-cards-accounts/v2/accounts/' . $creditCardAccountId . '/transactions';
        return httpClient::makeHttpRequest($url);
    }

    public static function getCurrentCreditCardTransactions($creditCardAccountId) {
        $url = 'http://localhost:8080/open-banking/credit-cards-accounts/v2/accounts/' . $creditCardAccountId . '/transactions-current';
        return httpClient::makeHttpRequest($url);
    }
}
// Classe para obter informações da Conta 
class accountApi {

    public static function getAccounts() {
        $url = 'http://localhost:8081/open-banking/accounts/v2/accounts';
        return httpClient::makeHttpRequest($url);
    }

    public static function getAccount($accountId) {
        $url = 'http://localhost:8081/open-banking/accounts/v2/accounts/' . $accountId;
        return httpClient::makeHttpRequest($url);
    }

    public static function getAccountBalance($accountId) {
        $url = 'http://localhost:8081/open-banking/accounts/v2/accounts/' . $accountId . '/balances';
        return httpClient::makeHttpRequest($url);
    }

    public static function getAccountTransactions($accountId, $billId) {
        $url = 'http://localhost:8081/open-banking/accounts/v2/accounts/' . $accountId . '/transactions';
        return httpClient::makeHttpRequest($url);
    }

    public static function getAccountTransactionsCurrent($accountId) {
        $url = 'http://localhost:8081/open-banking/accounts/v2/accounts/' . $accountId . '/transactions-current';
        return httpClient::makeHttpRequest($url);
    }

    public static function getAccountLimits($accountId) {
        $url = 'http://localhost:8081/open-banking/accounts/v2/accounts/' . $accountId . '/overdraft-limits';
        return httpClient::makeHttpRequest($url);
    }
}
