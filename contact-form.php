<?php

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $mailFrom = $_POST['email'];
  $message = $_POST['message'];

  $mailTo = 'zinko.adrian00@gmail.com';
  $headers = "From: ".$mailFrom; 
  $txt = "You have received an e-mail from ".$name.".\n\n".$message;

  mail($mailTo, $name, $txt, $headers);
  header("Location: index.php?mailsend");
}

?>

