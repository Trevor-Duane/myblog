<?php 

$host = 'localhost';
$user = 'root';
$pass = 'Computers1996.';
$db_name = 'blog';


$conn = new MySQLi($host, $user, $pass, $db_name);

if($conn->connect_error){

    die('Database Connection error'. $conn->connect_error);

} else {
    
    echo "Db connection successful";
}


