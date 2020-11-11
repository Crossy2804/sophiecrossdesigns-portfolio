<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $subject = "New Message";
    $mailFrom = $_POST['email'];
    $message = $_POST['message'];

    $mailTo = "admin@sophiecrossdesigns.com";
    $headers = "From: ".$mailFrom;
    $txt = "You have received a message from ".$name.".\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: thankyou.html?mailsend");
}

?>