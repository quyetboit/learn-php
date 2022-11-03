<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Trang chủ
    <?php
        include './controller/menu.controller.php';

        if (isset($_GET['ma'])) {
            include './controller/article.controller.php';
        }
    ?>
</body>
</html>