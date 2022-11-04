<?php
    include './env/connect.php';
    
    $sql = "select ma, title from article";
    $listMenu = $conn->query($sql);

    if ($listMenu->num_rows === 0) {
        die('No item menu');
    }