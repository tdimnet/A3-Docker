<?php

$servername = $_ENV["MYSQL_DATABASE_SERVER"];
$username = $_ENV["MYSQL_USER"];
$password = $_ENV["MYSQL_PASSWORD"];
$database = $_ENV["MYSQL_DATABASE"];


//On établit la connexion
try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
} catch (PDOException $e) {
    echo "Error when connecting to DB : " . $e->getMessage();
}

