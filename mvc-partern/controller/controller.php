<?php
    $action = '';
    if (isset($_GET['action'])) {
        $action = $_GET['action'];
    }
    switch ($action) {
        case 'article':
            $ma = $_GET['ma'];
            include ('./modal/article.model.php');
            include ('./view/article.view.php');
            break;
        default: 
            include ('./modal/menu.model.php');
            include ('./view/menu.view.php');
    }
    $conn->close();
    