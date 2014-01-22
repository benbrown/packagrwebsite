<?php 

	$form = $_POST;
	
	
	$message = "Demo request received!\n\nName: " . $form['name'] . "\nEmail: " . $form['email'] . "\nPhone: " . $form['phone']  . "\nWebsite: " . $form['website'] . "\n\nMessage:\n\n" . $form['message'];
		
	mail(
		'benbrown@gmail.com,ericsoelzer@gmail.com',
		'Packa.gr Demo Request from ' . $form['name'] . ' on ' . date('M j'),
		$message
	);

	if($form['subscribe']) {
		$url = 'http://xoxapi.herokuapp.com/subscribe_packagr_promo';
		$myvars = 'email='.urlencode($form['email']);
		$ch = curl_init( $url );
		curl_setopt( $ch, CURLOPT_POST, 1);
		curl_setopt( $ch, CURLOPT_POSTFIELDS, $myvars);
		curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
		curl_setopt( $ch, CURLOPT_HEADER, 0);
		curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);
		
		$response = curl_exec( $ch );
	}

	header("Location: thanks.html");




?>