<html>
<?php 
/** send emails through the contact form in website */

$part_message = $_POST['message'];
$name = $_POST['name'];
$email = $_POST['email'];
$from = "info@netengineering.com";
$headers = "From:" . $from;
$message = "You have got a message from".$name."(".$email.")"."from your website:".$part_message; 
$to = "nsushant021@gmail.com";
$subject = "Message from the website";

mail($to,$subject,$message);
header('Location: index.php');
exit();
?>