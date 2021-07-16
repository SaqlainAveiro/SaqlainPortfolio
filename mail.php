<?php

if(isset($_POST['submit'])){
    $name = $_POST['Name'];
    $mailFrom = $_POST['Email'];
    $subject = $_POST['Subject'];
    $message = $_POST['Message'];

    $to = "saqlainahs@gmail.com";
    $headers = "You have an email from your portfolio!";
    $txt = "Name: ".$name."\nFrom: ".$mailFrom."\nSubject: ".$subject."\nMessage: \n".$message."\n\n";
    

    mail($to, $subject, $txt, $headers);

    header("Location: index.php");
}

?>
