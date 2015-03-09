<?
php  $to = "juliusalmeida28@gmail.com";  
$subject = $_REQUEST['subject']; 
 $email = $_REQUEST['email'] ; 
  $message = $_REQUEST['message'] ; 
   $headers = "From: $email"; 
    $sent = mail($to, $subject, $message, $headers) ;  
    if($sent)  {print "Your mail was sent successfully"; } 
    else  {print "We encountered an error sending your mail"; } 
    ?>