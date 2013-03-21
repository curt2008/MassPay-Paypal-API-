<?php
  	/*
    		Twitter : @CCrewe2
    		Email : curtis@budgetwebsitesolutions.co.uk
    		Skype : Paid4Upload
  	*/
  	
  	require "paypal_class.php";
	$paypal = new Paypal("api username", "api password", "api signature");
	
	$send_payment = $paypal->pay("email@email.com", "50.00", "Thanks for an amazing service");
	
	if("SUCCESS" == strtoupper($send_payment["ACK"]) || "SUCCESSWITHWARNING" == strtoupper($send_payment["ACK"])) {
		exit('MassPay Completed Successfully: '.print_r($send_payment, true));
	} else {
		exit('MassPay failed: ' . print_r($send_payment, true));
	}
?>
