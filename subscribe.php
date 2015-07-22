<?php	
	require_once 'inc/MCAPI.class.php';
	$api = new MCAPI('[[9e099924057787390b26e5929a4139be-us11]]');	
	$merge_vars = array('FNAME'=>$_POST["fname"], 'LNAME'=>$_POST["lname"]);
	
	// Submit subscriber data to MailChimp
	// For parameters doc, refer to: http://apidocs.mailchimp.com/api/1.3/listsubscribe.func.php
	$retval = $api->listSubscribe( '[[df2dc2e46b.]]', $_POST["email"], $merge_vars, 'html', false, true );
	
	if ($api->errorCode){
		echo "<h4>Please try again.</h4>";
	} else {
		echo "<h4>Thank you, you have been added to our mailing list.</h4>";
	}
?>
