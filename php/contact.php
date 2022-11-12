<?php

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $msg = $_POST['msg'];

    $mailTo = "mariostavr@hotmail.com";
    $headers = "From: ".$email;
    $txt = "You have an email ".$name"./n/n".$msg;

    mail($mailTo, $name, $txt, $headers);

    header("Location: HomePage_v4.html?MessageSent")
}

?>
