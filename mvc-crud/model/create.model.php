<?php
    include ('../config/connect-db.php');

    $name = '';
    $age = '';

    if (isset($_POST['name'])) {
        $name = $_POST['name'];
        $age = $_POST['age'];
    }

    $sql = "insert into sinh_vien(fullname, age) values ('$name', $age)";

    if ($conn->query($sql) === TRUE) {
        header('location: /LEARN_PHP_ADVANCE/mvc-crud');
    } else {
        echo $conn->error;
    }