<?php

  if($_POST['submit'])
    {
      echo "Form is not submitted!";
      exit;
    }
  if(empty($_POST["commentnameInput"])) ||
    empty($_POST["messageInput"]))
    empty($_POST["helpemailInput"]))
    empty($_POST["helpphoneInput"]))
    {
      echo "Please fill the form"
      exit;
    }
  $name = $_POST["commentnameInput"];
  $message = $_POST["messageInput"];
  $email = $_POST["helpemailInput"];
  $phone = $_POST["helpphoneInput"];

  mail('samarjit@gmail.com' , 'New form submission' , 'New form submission: $name, Email:$email Message:$message Phone:$phone')

?>
