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
            <div class="threebutton"><a href="users.php"><img src="/panel/img/users.png" width="18" height="18"></a></div>
            <div class="fourbutton"><a href="product.php"><img src="/panel/img/setting.png" width="16" height="16"></a></div>
        </div>
        <div class="product">
            <div class = "pindextable">
            <?php
                $sql = "SELECT * FROM bot_shop_profile";
                if($result = $conn->query($sql)){
                    $rowsCount = $result->num_rows; // количество полученных строк
                    echo "<img src='/panel/img/showuser.png' width='18' height='16.5'> $rowsCount ";   
            ?>
            </div>
            <center><div class ="ptable">
            <?php
                    echo "<table style='height: 100%; overflow: scroll;'><tr><th>Номер</th><th>Имя</th><th>Фамилия</th><th>Номер</th><th>Адрес</th><th></th></tr>";
                    foreach($result as $row){
                            echo "<tr>";
                            echo "<td>" . $row["id"] . "</td>";
                            echo "<td>" . $row["first_name"] . "</td>";
                            echo "<td>" . $row["last_name"] . "</td>";
                            echo "<td>" . $row["phone"] . "</td>";
                            echo "<td>" . $row["adress"] . "</td>";
                            echo "<td><a href='updateu.php?id=" . $row["id"] . "'><img src='/panel/img/note.png' width='16' height='16'></a></td>";
                            echo "<td><a href='deleteu.php?id=" . $row["id"] . "'><img src='/panel/img/scrap.png' width='16' height='16'></a></td>";
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