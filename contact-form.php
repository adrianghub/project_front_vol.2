<?php

if (isset($_POST['submit'])) {
  // set variables
  $name = $_POST['name'];
  $mailFrom = $_POST['email'];
  $message = $_POST['message'];

  $mailTo = 'zinko.adrian00@gmail.com'; // my email
  $headers = "From: ".$mailFrom; // visitor email
  
  // message sent to visitor
  $txt = "You have received an e-mail from ".$name.".\n\n".$message; 
  $headers = "Reply-To: ".$mailTo.".\r\n";


  // php function for email building structure
  mail($mailTo, $name, $txt, $headers);

  // location of the contact form
  header("Location: index.html");
}

?>

