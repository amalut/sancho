<?php
if(isset($_POST['submit'])){
    $to = "amalut101@gmail.com";



    $name = $_POST['name'];
    $email= $_POST['email'];
    $phone= $_POST['phone'];
    $comments= $_POST['comments'];
    $headers = 'From: '.$email . "\r\n";


    $body = "name : ".$name. "\r\n" .
    		"Phone : ".$phone. "\r\n" .
    		"Message : " . $comments;
    if(mail($to, $body, $headers)){
        echo "Mail Sent!";
    }else{
         echo "Failed To Send Mail";
    }
}
?>