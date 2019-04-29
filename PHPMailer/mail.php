<?php 
     use PHPMailer\PHPMailer\PHPMailer;
     use PHPMailer\PHPMailer\SMTP;
     use PHPMailer\PHPMailer\Exception;
     
     require '../PHPMailer/src/PHPMailer.php';
     require '../PHPMailer//src/SMTP.php';
     require '../PHPMailer//src/Exception.php';

	function envoyerMail($mailDes){

   
        
        //Create a new PHPMailer instance
        $mail = new PHPMailer;
        // Set PHPMailer to use the sendmail transport
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';              // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'e.debboutn@gmail.com';                 // SMTP username
        $mail->Password = 'aze123aze123';                           // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                                    // TCP port to connect to
        
        //Set who the message is to be sent from
        $mail->setFrom('e.debboutn@gmail.com', 'E-debbou');
        //Set an alternative reply-to address
        
        //Set who the message is to be sent to
        $mail->addAddress($mailDes, 'Kais');
        //Set the subject line
        $mail->Subject = 'Succès !';
        
        $mail->Body = 'Votre livraison est arrivé avec succés !';
        
        
        //send the message, check for errors
        if (!$mail->send()) {
            echo "Mailer Error: " . $mail->ErrorInfo;
        } else {
            echo "Message sent!";
        } 


	}


?>