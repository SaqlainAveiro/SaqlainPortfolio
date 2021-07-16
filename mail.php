<?php

if(isset($_POST['submit'])){
    $name = $_POST['Name'];
    $mailFrom = $_POST['Email'];
    $subject = $_POST['Subject'];
    $message = $_POST['Message'];

    $mailTo = "saqlainahs@gmail.com";
    $header = "You have an email from your portfolio!";
    $text = "Name: ".$name."\nFrom: ".$mailFrom."\nSubject: ".$subject."\nMessage: \n".$message."\n\n";
    

    mail($mailTo, $subject, $text, $header);

    header("Location: index.html");
}

?>
