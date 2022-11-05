<?php
    $server_name = "localhost";
    $username = 'root';
    $password = '';
    $database_name = 'test';

    $conn = new mysqli($server_name, $username, $password, $database_name);

    if ($conn->connect_error) {
        die ('Has error when connect database');
    }