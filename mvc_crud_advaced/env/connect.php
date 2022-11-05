<?php
   function connet() {
    $server_name = "localhost";
    $username = 'root';
    $password = '';
    $database_name = "mvc_2_table";

    $conn = new mysqli($server_name, $username, $password, $database_name);

    if ($conn->connect_error) {
        die ('Hass error: ' . $conn->error);
    }

    return $conn;

   }