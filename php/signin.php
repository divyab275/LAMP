<?php

$server = "localhost";
$suname = "user123";
$spassword = "12345";
$database = "FOSSLamp";

$username = $_POST["email"];
$password = $_POST["password"];

$connect = new mysqli($server, $suname, $spassword, $database);

if ($connect->connect_error) {
    echo "Connection error";
} else {

    $sql = "SELECT email,password FROM user u WHERE u.email='$username'";
    $output = $connect->query($sql);
    if ($output === false) {
        echo "SQL error";

    } else {
        while ($row = $output->fetch_assoc()) {
            if ($password === $row["password"]) {
                echo "Login Success ";
            } else {
                echo "Login Failed,Wrong Password";
            }

        }
    }
}
