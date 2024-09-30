<?php
include('dbcon.php');

if (isset($_POST['message-submit'])) {

    $name = $_POST['fname'];
    $email = $_POST['femail'];
    $message = $_POST['fmessage'];

    if (empty($name) || empty($email) || empty($message)) { 
        echo 'fillupan mo muna, baby!';
    }

    else {
        $query = "INSERT INTO `messages` (`name`, `email`, `message`) values ('$name', '$email', '$message')";

        $statement = mysqli_query($connect, $query);

        if(!$statement) {
            die('Query failed' . mysqli_error($connect));
        }

        else {
            header('location:index.php?msg-sent=Message successfully sent!');
        }
    }
}