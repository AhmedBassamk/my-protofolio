<?php
include('mailer.php');


if ($_SERVER['REQUEST_METHOD'] == "POST") {
if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['subject']) && !empty($_POST['massage'])) {
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $massage = $_POST['massage'];


    $mail->setFrom($email, $name);
    $mail->addAddress('ahmedabk2002@gmail.com');               //Name is optional
    $mail->Subject = $subject;
    $mail->Body    = "<b>$massage</b>";
    $mail->send();
    
    
}else{
    echo "error in input";
}
}else{
    echo "request method";
}
















