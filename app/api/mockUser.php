<?php
// Inicie a sessão
session_start();
error_reporting(0);
include_once('../api/openFinanceApi.php');
// Usuario Mockado
$acct = "XXZTR3459087";
$billId = "1571";
$getCreditCardBills = CreditCardAPI::getCreditCardBills($acct);
$getCreditCardLimits = CreditCardAPI::getCreditCardLimits($acct);
$getCreditCardAccount = CreditCardAPI::getCreditCardAccount($acct);
$getCreditCardTransactions = CreditCardAPI::getCreditCardTransactions($acct);
$getCreditCardBillTransactions = CreditCardAPI::getCreditCardBillTransactions($acct,$billId);
$getCurrentCreditCardTransactions = CreditCardAPI::getCurrentCreditCardTransactions($acct);


$getAccount = AccountApi::getAccount($acct);
$getAccountLimits = AccountApi::getAccountLimits($acct);
$getAccountBalance = AccountApi::getAccountBalance($acct);
//$getAccountTransactions = AccountApi::getAccountTransactions($acct);
$getAccountTransactionsCurrent = AccountApi::getAccountTransactionsCurrent($acct);

$branchCode = $getAccount['data']['branchCode']; // AGENCIA
$checkDigit = $getAccount['data']['checkDigit']; // DIGITO VERIFICADO
$currency = $getAccount['data']['currency'];
$automaticallyInvestedAmount = $getAccountBalance['data']['automaticallyInvestedAmount']['amount'];
$availableAmountAccount = $getAccountBalance['data']['availableAmount']['amount'];
$blockedAmount = $getAccountBalance['data']['blockedAmount']['amount'];

// Armazenar os valores em sessões
$_SESSION['acct'] = $acct;
$_SESSION['branchCode'] = $branchCode;
$_SESSION['availableAmountAccount'] = number_format($availableAmountAccount, 2, ',', '.');
$_SESSION['currency'] = $currency;


$_SESSION['accountTransactions'] = array();
for ($i = 0; $i < 3; $i++) {
    $creditDebitType = $getAccountTransactionsCurrent['data'][$i]['creditDebitType']; 
    $transactionAmount = $getAccountTransactionsCurrent['data'][$i]['transactionAmount']['amount'];
    $transactionDateTime = $getAccountTransactionsCurrent['data'][$i]['transactionDateTime'];

    $_SESSION['accountTransactions'][] = array(
        'creditDebitType' => $creditDebitType,
        'transactionAmount' => $transactionAmount,
        'transactionDateTime' => $transactionDateTime
    );
}


// Para armazenar os valores de cartão de crédito em uma sessão
$_SESSION['creditCardData'] = array();
for ($i = 0; $i < 2; $i++) {
    $availableAmount = number_format($getCreditCardLimits['data'][$i]['availableAmount']['amount'], 2, ',', '.');
    $dueDate = date('d/m', strtotime($getCreditCardBills['data'][$i]['dueDate']));
    $billTotalAmount = number_format($getCreditCardBills['data'][$i]['billTotalAmount']['amount'], 2, ',', '.');
    $identificationNumber = $getCreditCardAccount['data']['paymentMethod'][$i]['identificationNumber'];

    $_SESSION['creditCardData'][] = array(
        'availableAmount' => $availableAmount,
        'dueDate' => $dueDate,
        'billTotalAmount' => $billTotalAmount,
        'identificationNumber' => $identificationNumber
    );
}