<?php 

$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'contact-app';

$connect = mysqli_connect($hostname, $username, $password, $database);

if (!$connect) {
    die('failed to connect' . mysqli_connect_error());
}
