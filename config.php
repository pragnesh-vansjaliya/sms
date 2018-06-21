<?php session_start();

$coon = mysqli_connect("localhost","root","","sms");
if($coon == false){
    echo "database connection lost";
}

define("BASEURL", "http://localhost/sms/");

?>



