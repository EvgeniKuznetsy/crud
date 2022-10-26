<?php

include "connect.php";
$query = "SELECT*FROM `product`";
$result = mysqli_query($induction, $query);
$id=$_POST['id'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style/index.css">
    <title></title>
</head>
<body>
<header>
    <ul>
        <li><a href="index.php">Вернуться назад</a></li>
        <li><a href="update.php">Обновать</a></li>

    </ul>
</header>
<main>
    <?php


    $sqlSel="SELECT*FROM product WHERE id='$id";

    while ($dbResult = mysqli_fetch_array($result)) {

        $arr = [$dbResult["id"], $dbResult["category"], $dbResult["name"], $dbResult["img"], $dbResult["count"], $dbResult["ones"], $dbResult["price"]];
        if($dbResult['id'==$id]){
            $arrID=$dbResult;
            print_r($arrID);
        }

    }
    ?>
    <form action="action/updateAction" method="post">

        <label>Введите категории</label>
        <input type="text" placeholder="" name="category">
        <label>Введите наименование ингридиента</label>
        <input type="text" placeholder="Ввидите наименование ингридиента" name="name">
        <label>Введите название картинки</label>
        <input type="text" placeholder="Ввидите название картинки" name="img">
        <label>Введите колличество на складе</label>
        <input type="text" placeholder="Ввидите колл. на складе" name="count">
        <label>Введите единицу измерения</label>
        <input type="text" placeholder="Ввидите единицу измерения" name="ones">
        <label>Введите стоимость</label>
        <input type="text" placeholder="Ввидите стоимость" name="price">
        <button type="submit" name="submit" class="Button">Добавить</button>
    </form>
</main>

</body>
</html>