<?php

$host = "localhost";
$dBUsername = "id18258446_db_root";
$dBPassword = "123456";
$dBName = "id18258446_phpproiect";

$conn = mysqli_connect($host, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
    die("Connection failed: " . mysql_connect_error());
    
}