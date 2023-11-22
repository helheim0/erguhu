<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

//Validate first
if(empty($name)||empty($visitor_email)||empty($message)) 
{
    echo "This field is mandatory!";
    exit;
}

if(IsInjected($visitor_email))
{
    echo "Bad email value!";
    exit;
}

$email_from = "helga.budai@proton.me";
$email_subject = "Inquiry";
$email_body = "You have received a new message from the user $name.\n".
    "Here is the message:\nName : $name \nE-mail : $visitor_email \nMessage : $message \n".
    
$to = "helga.budai@proton.me";//<== update the email address
$headers = "From: $visitor_email \r\n";
$headers .= "Reply-To: $visitor_email \r\n";
//Send the email!
mail($to,$email_subject,$email_body,$headers);
header("Location: index.php/#contact");

// Function to validate against any email injection attempts
function IsInjected($str)
{
  $injections = array('(\n+)',
              '(\r+)',
              '(\t+)',
              '(%0A+)',
              '(%0D+)',
              '(%08+)',
              '(%09+)'
              );
  $inject = join('|', $injections);
  $inject = "/$inject/i";
  if(preg_match($inject,$str))
    {
    return true;
  }
  else
    {
    return false;
  }
}
?> 