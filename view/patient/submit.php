<?php
require("../../controller/patient/paymentControl.php");
if(isset($_POST['stripeToken'])){
	\Stripe\Stripe::setVerifySslCerts(false);

	$token=$_POST['stripeToken'];

	$data=\Stripe\Charge::create(array(
		"amount"=>1000,
		"currency"=>"usd",
		"description"=>"Doctor's Fee",
		"source"=>$token,
	));

	echo "<pre>";
	print_r($data);
}
?>