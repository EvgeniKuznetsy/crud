<?php
$host = "localhost";
$name = "root";
$pass = "";
$db = 'db';
$induction = mysqli_connect($host, $name, $pass, $db);



if ($induction == false) {
    echo die, "error to connect DataBase";
}
?>