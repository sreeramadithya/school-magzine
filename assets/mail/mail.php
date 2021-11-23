<?
$name = $_POST{'name'};
$subject = $_POST{'subject'};
$email = $_POST{'email'};
$message = $_POST['message'];

$email_message = "

Name: ".$name."
Subject: ".$subject."
Email: ".$email."
Message: ".$message."

";

mail ("weseewemagazine@outlook.com" , "Response from website", $email_message);
header("location: ../../mail-success.html");
?>


