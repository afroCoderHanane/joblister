<?php 

  include_once 'config/init.php'

?>



<?php



if(isset($_POST['submit'])){

    $name= $_POST['contact-name'];

    $email= $_POST['contact-email'];

    $title= $_POST['contact-title'];

    $message= $_POST['contact-message'];

  

    if ($name == '' || $email == '' || $title == '' || $message =='')

      echo '<script type = "text/javascript"> alert("Please fill out all forms")</script>'; 

    else

    {

      $formcontent=" From: $name \n Message: $message";

      $recipient = "youremail@here.com";

      $subject = "Contact Form";

      $mailheader = "From: $email \r\n";

      mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");

      echo '<script type = "text/javascript"> alert("Thank you, your message was sent!")</script>';

    }



}



//Display the footer and header

$template= new Template('templates/job-contact.php');

echo $template;

?>