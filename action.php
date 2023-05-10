<?php
require_once('vendor/autoload.php');
\Stripe\Stripe::setApiKey('sk_test_51N46TKSGJaeHaC4ZJH5GeDEkJDfAGINcrV0qBd3EiSqN8QmUI5rtliKdNd3SKegXQSJBJalMUL1Dt2E5GK17UcY500Nfcn9bHs');
$charge= \Stripe\Charge::create([
'source'=>$_POST['stripeToken'],
'description'=>"We save animal",
'amount'=>1000,
'currency'=>'usd',
]);
echo '<pre>';

 print_r($charge);
 echo '</pre>';
?>