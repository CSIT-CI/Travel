<?php
// Website Contact Form Generator 
// http://www.tele-pro.co.uk/scripts/contact_form/ 
// This script is free to use as long as you  
// retain the credit link  

// get posted data into local variables
$EmailFrom = Trim(stripslashes($_POST['EmailFrom'])); 
$EmailTo = "PUT your email address HERE"; 
$Subject = "Choose a subject, e.g.: Newsletter Subscription from my Site";
$newsletter = Trim(stripslashes($_POST['newsletter'])); 

// validation
$validationOK=true;
if (Trim($EmailFrom)=="") $validationOK=false;
if (!$validationOK) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=ENTER A SITE HERE WHERE TO REDIRECT IF SUBMISSION FAILED eg. fail.html\">";
  exit;
}

// prepare email body text
$Body = "";
$Body .= "newsletter: ";
$Body .= $newsletter;
$Body .= "\n";

// send email 
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

// redirect to success page 
if ($success){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=ENTER A SITE HERE WHERE TO REDIRECT IF SUBMISSION WAS SUCCESSFUL eg. sucess.html\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=ENTER A SITE HERE WHERE TO REDIRECT IF SUBMISSION FAILED eg. fail.html\">";
}
?>