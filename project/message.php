<?php
  $name = htmlspecialchars($_POST['name']);
  $email = htmlspecialchars($_POST['email']);
  $phone = htmlspecialchars($_POST['phone']);
  $website = htmlspecialchars($_POST['website']);
  $pass=htmlspecialchars($_POST['password']);
  $cpass=htmlspecialchars($_POST['cPassword']);
  

  if(!empty($email)) {
    if(strstr($email,'@') && strstr($email,'.ly')) {
      $receiver = "receiver_email_address"; //enter that email address where you want to receive all messages
      $subject = "From: $name <$email>";
      $body = "Name: $name\nEmail: $email\nPhone: $phone\nWebsite: $website\n\nRegards,\n$name";
      $sender = "From: $email";

      if(mail($receiver, $subject, $body, $sender)){
         echo "Your message has been sent";
      }
      else{
         echo "Sorry, failed to send your message!";
      }
    else{
      echo "Enter a valid email address!";
    }
  }
  }
  else{
    echo "Email and message field is required!";
  }
?>
