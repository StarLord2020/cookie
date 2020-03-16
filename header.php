<?php
/**
 * Created by PhpStorm.
 * User: Ivan
 * Date: 15.03.2020
 * Time: 22:42
 */
require_once ('Cookie.php');
    $cookie=new Cookie();
    $color=$cookie->select("color");
    if($_SERVER['REQUEST_METHOD']=="POST")
    {
        $cookie->save('color',$_POST['color'],time()+31536000);
    }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .red {
            background-color: red;
        }
        .gray {
            background-color: gray;
        }
        .blue {
            background-color: blue;
        }
        .green {
            background-color: green;
        }
    </style>
</head>
<body>
    <header class="<?=$color?>" style="height: 100px"></header>
    <form action="" method="post">
        <select name="color" id="">
            <option value="red">Красный</option>
            <option value="gray">Серый</option>
            <option value="blue">Синий</option>
            <option value="green">Зеленый</option>
        </select>
        <input type="submit">
    </form>
</body>
</html>


