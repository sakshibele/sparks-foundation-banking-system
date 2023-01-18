<?php
$servername= "127.0.0.1:3307";
$username="root";
$password="";
$dbname="banking";


$con = mysqli_connect($servername, $username, $password, $dbname);
if(mysqli_connect_error()){
    echo "fail to connect";
    exit();
}
// echo "connection done";

?>