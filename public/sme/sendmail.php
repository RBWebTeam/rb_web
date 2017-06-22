<?php

// if(isset($_POST['submit'])){
//     $to = "scriptdp@gmail.com"; // this is your Email address
//     $from = 'rajbhardp@gmail.com'; // this is the sender's Email address
//     $first_name = $_POST['fullname'];
//     $last_name = $_POST['mobile'];
//     $subject = "Form submission";
//     $subject2 = "Copy of your form submission";
//     $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['makemodel'];
//     $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

//     $headers = "From:" . $from;
//     $headers2 = "From:" . $to;
//     mail($to,$subject,$message,$headers);
//     mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
//     echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
//     // You can also use header('Location: thank_you.php'); to redirect to another page.
//     }


// $to = "rajbhardp@gmail.com";
// $subject = "Test mail";
// $message = "Hello! This is a simple email message.";
// $from = "rajbhardp@gmail.com";
// $headers = "From: $from";
// mail($to,$subject,$message,$headers);
// echo "Mail Sent.";
// print_r(error_get_last());




          $to = "rajbhardp@gmail.com";
          $subject = "This is subject";
         
         $message = "<b>This is HTML message.</b>";
         $message .= "<h1>This is headline.</h1>";
         
         $header = "From:scriptdp@gmail.com \r\n";
         $header .= "Cc:rajbhardp@gmail.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
         
         if($retval == true ) {
            echo "Message sent successfully...";
         }else {
          echo "Message could not be sent...";

             
 
             print_r(error_get_last());

            
         }

?>