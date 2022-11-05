<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $controll = '';

        if (isset($_GET['controller'])) {
            $controll = $_GET['controller'];
        }

        switch ($controll) {
            case '':
                require ('./controller/root.controller.php');
                break;

            case 'lop':
                require ('./controller/lop.controller.php');
                break;
            case 'sinh_vien' :
                require ('./controller/sinh_vien.controller.php');
                break;
            default:
                echo "Dont controller matching";
        }
    ?>
</body>
</html>