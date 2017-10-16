<?php 
require_once "vendor/autoload.php";

if(isset($_POST['message'])) {

	$email_taup = "lozjuan@gmail.com";
	$subject = $_POST["topic"];
	$name = $_POST["name"]; 
    $last_name = $_POST["last_name"];
    $complete_name = $name." ".$last_name; 
    $email_from = $_POST["email"];
    $content = $_POST["message"]; 
    $error_message = "";
    $email_exp = "/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/";
    $string_exp = "/^[A-Za-z .'-]+$/";
    $email_message = "Vous avez été contacté via le site taup \n\n";

	function died($error) {
        echo $error."<br /><br />";
        die();
    }

	if(!isset($_POST["name"]) ||
        !isset($_POST["last_name"]) ||
        !isset($_POST['email'])) {
        died('Veuillez vérifier les informations saisies dans le formulaire. Tous les champs sont obligatoires.');       
    }

    if(!preg_match($email_exp,$email_from)) {
    	$error_message .= "Veuillez vérifier l'adresse mail que vous avez rentrée.<br />";
  	}

  	if(!preg_match($string_exp,$first_name)) {
	    $error_message .= "Veuillez vérifier le prénom que vous avez rentré.<br />";
  	}

  	if(!preg_match($string_exp,$last_name)) {
    	$error_message .= "Veuillez vérifier le nom que vous avez rentré.<br />";
  	}

  	if(strlen($error_message) > 0) {
		died($error_message);
	}

    $mail = new PHPMailer(true);    

	try {
		//server params
	    $mail->SMTPDebug = 2;                                 
	    $mail->isSMTP();                                      
	    $mail->Host = "ssl://smtp.gmail.com";  
	    $mail->SMTPAuth = true;                               
	    $mail->Username = "taupwebpage@example.com";                 
	    $mail->Password = "";                           
	    $mail->SMTPSecure = "ssl";                            
	    $mail->Port = 465;
	    //content
	    $mail->isHTML(true);    
	    $mail->setFrom($email_from, $complete_name);                              
	    $mail->Subject = $subject;
	    $mail->Body = $content;
	    
	    $mail->send();
    	echo 'Le message a été envoyé';
	} catch (Exception $e) {
    	echo 'Message could not be sent.';
    	echo 'Mailer Error: ' . $mail->ErrorInfo;
	}
}

