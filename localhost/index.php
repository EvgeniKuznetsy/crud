<?php
include "connect.php";
$query = "SELECT*FROM `product`";
$result = mysqli_query($induction, $query);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title></title>
</head>

<body>
    <header>
        <ul>
            <li><a href="create.php">Создать</a></li>
            <li><a href="update.php">Обновать</a></li>

        </ul>
    </header>


    <main>
        <div class="container">
            <?php
            while ($dbResult = mysqli_fetch_array($result)) {

                $arr = [$dbResult["id"], $dbResult["category"], $dbResult["name"], $dbResult["img"], $dbResult["count"], $dbResult["ones"], $dbResult["price"]];
                echo '<div class="blockForm">
                <div class="img">
                <img src="img/' . $dbResult['img'] . '" alt="">
                </div>
                <div class="block">
                    <div class="blockUnitName">
                        <div class="category">
                            ' . $dbResult['category'] . '
                        </div>
                        <div class="name">
                        ' . $dbResult['name'] . '
                        </div>
                    </div>
                    <div class="blockUnitPrice">
                        <div class="count">
                            ' . $dbResult['count'] . $dbResult['ones'] . '
                        </div>
                        <div class="price">
                        ' . $dbResult['price'] . "Руб" . '
                        </div>
                    </div>
                    <div class="Button">        
                        <form action="action/delete.php" method="POST"><input name="id"  hidden value="'. $dbResult['id']  .
                     '" type="text" class="buttonDelet"><input class="buttonDelet" type="submit" value="DELETE">'.'<form>'.'
                     <form action="action/update.php" method="POST"><input name="id"  hidden value="'. $dbResult['id']  .
                     '" type="text" class="buttonDelet"><input class="buttonDelet" type="submit" value="DELETE">'.'<form>'.'

                    </div>
                    

                </div>
                
                </div>';
            }
            ?>


        </div>
    </main>

</body>

</html>