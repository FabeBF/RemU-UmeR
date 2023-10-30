<?php

$serverName = "localhost";
$username = "root";
$password = '';
$database = "class";

try {
    $connect = new PDO(
        "mysql:host=$serverName;dbname=$database",$username,$password
    );
} catch (PDOException $error) {
    echo "Connection failed ; " . $error->getMessage();
}

?>