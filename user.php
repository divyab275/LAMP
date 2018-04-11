<?php 

$servername = "localhost";
$username = "user123";
$password = "12345";
$dBname = "FOSSLamp";

$connect = new mysqli($servername,$username,$password,$dBname);

if($connect->connect_error){
    die("Connection failed :".$connect->connect_error);
}

$sql = "CREATE TABLE user(
        id INT(6) AUTO_INCREMENT PRIMARY KEY,
        email VARCHAR(20) NOT NULL,
        password VARCHAR(30) NOT NULL
)";

if( $connect->query($sql) === TRUE){
    echo "Table successfully created";
}
else{
    echo "Error".$connect->error;
}

$connect->close();