<?php

$servername="localhost";
$username="root";
$password="";
$db_name="fc_games";

if($conn->connection_error){
    die("connection failed".$conn->connection_error);
}

echo"connection successful";

?>