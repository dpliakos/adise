<?php
//  function openDbConnection() {
    $host="localhost";
    $user="root";
    $password="123456";
    $database ="bookstoredb";

    $conn = new mysqli($host, $user, $password, $database);

    if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);

?>