<?php
if(isset($_POST['contactFrmSubmit']) && !empty($_POST['name']) &&  !empty($_POST['email']) &&(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false) && !empty($_POST['message'])){
    
    // Submitted form data
    $name   = $_POST['name'];
    $email  = $_POST['email'];
    $from  = $_POST['email'];
    $message= $_POST['message'];
    
    /*
     * Send email to admin
     */
	$from = $email;
    $to = 'slawek.krybus@gmail.com';
    $subject = $_POST['name'];
    $htmlContent = '
		Imię i nazwisko: '.$name.'
		E-mail: '.$email.'
		
		Treść wiadomości: '.$message.'';
    
    // Additional headers
	$headers .= 'From: ' . $from . "\r\n";
	$headers .= 'Reply-To: ' .$from . "\r\n";
    
    // Send email
    if(@mail($to,$subject,$htmlContent,$headers)){
        $status = 'ok';
    }else{
        $status = 'err';
    }
    
    // Output status
    echo $status;die;
}