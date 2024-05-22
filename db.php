<?php

$server_name = "127.0.0.1:4306";
$user_name = "root";
$user_pass = "";
$dbname = "music_user";
//$result = "";
$con = mysqli_connect($server_name, $user_name, $user_pass, $dbname);

if (!$con) {
   echo ('connection failed');
} else {
    echo('DataBase Succsfully Connected');
} 




?>