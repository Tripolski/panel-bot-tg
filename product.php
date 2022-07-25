<?php
    require_once ("connect.php");
?>
<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <title>MPPANEL</title>
        <link href="css/style.css" rel="stylesheet">
        <link rel="icon" href="img/favicon.png" type="img/png"> 
    </head>
    <body>
        <div class ="panel">
            <div class="onebutton"><a href="index.php"><img src="/panel/img/home.png" width="16" height="16"></a></div>
            <div class="twobutton"><a href="orders.php"><img src="/panel/img/lists.png" width="16" height="16"></a></div>
            <div class="threebutton"><a href="users.php"><img src="/panel/img/users.png" width="16" height="16"></a></div>
            <div class="fourbutton"><a href="product.php"><img src="/panel/img/setting.png" width="18" height="18"></a></div>
        </div>
        <div class="product">
            <div class = "pindextable">
            <?php
                $sql = "SELECT * FROM bot_shop_product";
                if($result = $conn->query($sql)){
                    $rowsCount = $result->num_rows; // количество полученных строк
                    echo "<img src='/panel/img/showproduct.png' width='18' height='18'> $rowsCount ";   
            ?>
            </div>
            <center><div class ="ptable">
            <?php
                    echo "<table style='height: 100%; overflow: scroll;'><tr><th>Номер</th><th>Наименование</th><th>Описание</th><th>Цена</th><th></th><th></th></tr>";
                    foreach($result as $row){
                        $userhide = $row["hide"];
                        switch($userhide) {
                            case 0:
                                $iconhide = "<td><img src='/panel/img/hide.png' width='16' height='16'></td>";
                                break;
                            case 1:
                                $iconhide = "<td><img src='/panel/img/nhide.png' width='16' height='16'></td>";
                                break;
                        }
                        echo "<tr>";
                            echo "<td>" . $row["id"] . "</td>";
                            echo "<td>" . $row["name"] . "</td>";
                            echo "<td>" . $row["description"] . "</td>";
                            echo "<td>" . $row["price"] . "</td>";
                            echo "<td><img src=" . $row["image"] . " style='width:45px' alt='' /></td>";
                            echo "<td><a href='updatep.php?id=" . $row["id"] . "'><img src='/panel/img/note.png' width='16' height='16'></a></td>";
                            echo "<td><a href='deletep.php?id=" . $row["id"] . "'><img src='/panel/img/scrap.png' width='16' height='16'></a></td>";
                            echo "<td>" . $iconhide . "</td>";
                            echo "</tr>";
                    }
                    echo "</table>";
                    $result->free();
                } else {
                    echo "Ошибка: " . $conn->error;
                }
                $conn->close();
            ?>
            </div></center>
        </div>
    </body>
</html>