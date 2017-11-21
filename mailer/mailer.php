<!DOCTYPE html>
<html>

<?php require_once "../tools/header.php";?>
<body>
    <?php require_once '../tools/nav.php'; ?>
    
        <?php 
        require_once "../vendor/autoload.php";

        use PHPMailer\PHPMailer\PHPMailer;
        use PHPMailer\PHPMailer\Exception;

        if(isset($_POST['message'])) {

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

            function died($message) {
                echo "<section class='mailer' style='margin-left: 2rem;'><p>". $message."</p><br /><br />"."<form action='../contact.php' method='post'><button type='submit' name='back' class='btn btn-success'>Retour</button></form> </section>" ;
                die();
            }

            if(!preg_match($string_exp,$name)) {
                $error_message .= "Veuillez vérifier le prénom que vous avez rentré.<br />";
    	    }

    	    if(!preg_match($string_exp,$last_name)) {
    	       $error_message .= "Veuillez vérifier le nom que vous avez rentré.<br />";
    	    }

            if(!preg_match($email_exp,$email_from)) {
                $error_message .= "Veuillez vérifier l'adresse mail que vous avez rentrée.<br />";
            }

            if(!$content){
                $error_message .= "Veuillez vérifier le contenu du message.<br />";
            }

    	    if(strlen($error_message) > 0) {
               died($error_message);
    	    }

            $mail = new PHPMailer(true);    

    	    try {
                //server params
    	        $mail->SMTPDebug = 0;                                 
    	        $mail->isSMTP();                                      
    	        $mail->Host = "smtp.gmail.com";  
    	        $mail->SMTPAuth = true;                               
    	        $mail->Username = "";                 
    	        $mail->Password = "";                           
    	        $mail->SMTPSecure = "ssl";                            
    	        $mail->Port = 465;
                //recipient
                $mail->setFrom("", "");
                $mail->addAddress("");
                $mail->addCC("");   
    	        //content
    	        $mail->isHTML(true);         
    	        $mail->Subject = $subject;
    	        $mail->Body = "Message from: " . $complete_name . " Email: " . $email_from . "<br/><br/>" . $content;
    	    
    	        $mail->send();
        	    $success = 'Le message a été envoyé. Nous vous repondrons dans le plus bref délais.';
                died($success);
    	    } catch (Exception $e) {
        	    $failure = "Le message n'a pas été envoyé. Nous vous prions d'essayer ultérieurement.";
        	    $error_info = 'Mailer Error: ' . $mail->ErrorInfo;
                died($failure);
    	    }
        }?>
    <script src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>  
    </body>
</html>

