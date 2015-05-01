<?php
$name=$_POST['name'];
$username=$_POST['username'];
$location=$_POST['location'];
$bg=$_POST['bg'];
$email=$_POST['email'];
$password=$_POST['password'];

$con=mysql_connect("localhost","root","");
mysql_select_db("bloodbank");

$sql="INSERT INTO bldbnk values('$name','$username','password','$location','$bg','$email')";

$query=mysql_query($sql,$con);

include('PHPMailer-master/PHPMailerAutoload.php');
include('PHPMailer-master/class.smtp.php');

date_default_timezone_set('Asia/Calcutta');

$mail = new PHPMailer();

//$mail->SMTPDebug = 3;                               

$mail->isSMTP();                                      
$mail->Host = 'smtp.gmail.com';  
$mail->SMTPAuth = true;                               
$mail->Username = 'parimivamsi9@gmail.com';                 
$mail->Password = 'vamsichowdary';                           
$mail->SMTPSecure = 'tls';                            
$mail->Port = 587;                                    

$mail->From = 'parimivamsi9@gmail.com';

$mail->addAddress($email, 'raviteja');     
$mail->addAddress(' ');              
$mail->addReplyTo('');
$mail->addCC(' ');
$mail->addBCC(' ');
 
$mail->isHTML(true);                                  

$mail->Subject = 'registerd';
$mail->Body    = 'you have been registered';
$mail->AltBody = '';

if(!$mail->send())
 {
    echo 'Mail conont be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} 
else 
{
    echo 'Mail has been sent';
}

mysql_close($con);

header('Location:login_don.html');

?>