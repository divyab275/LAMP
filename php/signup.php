<?php
$server = "localhost";
$suname = "user123";
$spassword = "12345";
$database = "FOSSLamp";

$email = $_POST["email"];
$password = $_POST["password"];

$connect = new mysqli($server, $suname, $spassword, $database);

if ($connect->connect_error) {
    die("Connection Error" . $connect->connect_error);
} else {
    $sql = "INSERT into user(email,password) VALUES('$email','$password')";

    if ($connect->query($sql) === true) {
        echo "Success";
        header("Location:/signin.html");
    } else {
        echo "Failure";
    }

}

$connect->close();
