<?php
include_once('../api/creditCardAPI.php');

$acct = "XXZTR3459087";
$getCreditCardBills = CreditCardAPI::getCreditCardBills($acct);
$accounts = CreditCardAPI::getCreditCardLimits($acct);
$getCreditCardBills = CreditCardAPI::getCreditCardBills($acct);
$getCreditCardAccount = CreditCardAPI::getCreditCardAccount($acct);

for ($i = 0; $i < 2; $i++) {

    $availableAmount = number_format($accounts['data'][$i]['availableAmount']['amount'], 2, ',', '.');
    $dueDate = date('d/m', strtotime($getCreditCardBills['data'][$i]['dueDate']));
    $billTotalAmount = number_format($getCreditCardBills['data'][$i]['billTotalAmount']['amount'], 2, ',', '.');
    $identificationNumber = $getCreditCardAccount['data']['paymentMethod'][$i]['identificationNumber'];

?>  
<div class="ba-cart-inner" style="background-image: url(/assets/img/bg/<?=$i + 11?>.png);">
    <p>Limite disponível</p>
    <h4>R$  <?= $availableAmount?></h4>
    <p>Número do Cartão</p>
    <h5>0000 0000 0000 <?= $identificationNumber?></h5>
    <p>Fatura atual</p>
    <h5><?= $billTotalAmount?></h5>
    <p>Vencimento da Fatura</p>
    <h5><?= $dueDate?></h5>
    </div>
<br>
<?php } ?>

