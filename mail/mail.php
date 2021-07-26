<?
$name = $_POST{'name'};
$email = $_POST{'email'};
$message = $_POST['message'];

$email_message = "

Name: ".$name."
Email: ".$email."
Message: ".$message."

";

mail ("leeonardo.r23@gmail.com" , "PagWeb", $email_message);
header("location: ../gracias.html ");




?>


