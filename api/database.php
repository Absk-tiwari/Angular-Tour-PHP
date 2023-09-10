<?php
header("Access-Control-Allow-Origin: http://localhost:4200");
header('Access-Control-Allow-Credentials: false');
header("Access-Control-Allow-Methods:POST, PUT, PATCH, GET,OPTIONS,  DELETE");
header("Access-Control-Allow-Headers: *");
header("Content-Type: *"); 
header('Accept: *');

define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('NAME', 'Angular');
 
$mysql = mysqli_connect(HOST,USER,PASS,NAME);
 if(!$mysql){
    die(
        'couldn\'t connect to the database'
    );
 }

?>