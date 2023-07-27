<?php

include_once 'httpClient.php';

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
