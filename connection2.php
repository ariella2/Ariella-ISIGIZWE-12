<?php

$servername="localhost";
$username="root";
$password="";
$db_name="fc_games";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connection_error){
    die("connection failed". $conn->connection_error);
}

echo"connection successful";

?>