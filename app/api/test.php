<?php
error_reporting(0);
include_once('../api/openFinanceApi.php');

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

$automaticallyInvestedAmount = $getAccountBalance['data']['automaticallyInvestedAmount']['amount'];
$availableAmountAccount = $getAccountBalance['data']['availableAmount']['amount'];
$blockedAmount = $getAccountBalance['data']['blockedAmount']['amount'];


echo 'ACCT - INDENTIFICADOR '.$acct;
echo '<br>';
echo 'AGENCIA '.$branchCode .' DIGITO'  ;
echo '<br>';
echo 'SALDO DISPONIVEL '.$availableAmountAccount.' BRL';
echo '<br>';
echo 'Historico :'; 
echo '<br>';  
for ($i = 0; $i < 2; $i++) {

    $creditDebitType = $getAccountTransactionsCurrent['data'][$i]['creditDebitType']; 
    $transactionAmount = $getAccountTransactionsCurrent['data'][$i]['transactionAmount']['amount'];
    $transactionDateTime = $getAccountTransactionsCurrent['data'][$i]['transactionDateTime'];

    
    echo 'TIPO DE COMPRA '.$creditDebitType.' VALOR DA COMPRA '.$transactionAmount.' DATA DA COMPRA '.$transactionDateTime;
    echo '<br>';
     } 
     
echo 'Card:'; 
echo '<br>';      
for ($i = 0; $i < 2; $i++) {

    $availableAmount = number_format($getCreditCardLimits['data'][$i]['availableAmount']['amount'], 2, ',', '.');
    $dueDate = date('d/m', strtotime($getCreditCardBills['data'][$i]['dueDate']));
    $billTotalAmount = number_format($getCreditCardBills['data'][$i]['billTotalAmount']['amount'], 2, ',', '.');
    $identificationNumber = $getCreditCardAccount['data']['paymentMethod'][$i]['identificationNumber'];

    
    echo 'LIMITE DISP. '.$availableAmount.' CARD - '.$identificationNumber.' FATURA ATUAL '.$billTotalAmount.' VENC'.$dueDate;
    echo '<br>';
 } ?>

