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
            <div class="twobutton"><a href="orders.php"><img src="/panel/img/lists.png" width="18" height="18"></a></div>
            <div class="threebutton"><a href="users.php"><img src="/panel/img/users.png" width="16" height="16"></a></div>
            <div class="fourbutton"><a href="product.php"><img src="/panel/img/setting.png" width="16" height="16"></a></div>
        </div>
        <div class="product">
            <div class = "pindextable">
            <?php
                $sql = "SELECT * FROM bot_shop_order_product";
                if($result = $conn->query($sql)){
                    $rowsCount = $result->num_rows; // количество полученных строк
                    echo "<img src='/panel/img/showorder.png' width='18' height='18'> $rowsCount ";
            ?>
            </div>
            <center><div class ="ptable">
            <?php
                    echo "<table style='height: 100%; overflow: scroll;'><tr><th>Номер</th><th>Индекс заказа</th><th>Индекс продукта</th><th></th></tr>";
                    foreach($result as $row){
                        $idnameout = $row["product_id"];
                        switch($idnameout) {
                            case 1:
                                $idlist = "BOSHKI SALT EXOTIC";
                                break;
                            case 2:
                                $idlist = "BOSHKI SALT NEON";
                                break;
                            case 3:
                                $idlist = "BOSHKI SALT БОДРЫЕ";
                                break;
                            case 4:
                                $idlist = "BOSHKI SALT ДОБРЫЕ";
                                break;
                            case 5:
                                $idlist = "BOSHKI SALT ДОБРЫЕ ON ICE";
                                break;
                            case 6:
                                $idlist = "BOSHKI SALT ЗИМНИЕ";
                                break;
                            case 7:
                                $idlist = "BOSHKI SALT ЗЛЫЕ";
                                break;
                            case 8:
                                $idlist = "BOSHKI SALT КУБАНСКИЕ";
                                break;
                            case 9:
                                $idlist = "BOSHKI SALT САДОВЫЕ";
                                break;
                            case 10:
                                $idlist = "BOSHKI SALT ЧЕРНЫЕ";
                                break;
                            case 11:
                                $idlist = "COSMONAUT PHENOMEN";
                                break;
                            case 12:
                                $idlist = "HEAD HUNTER SALT AIM GREEN";
                                break;
                            case 13:
                                $idlist = "HEAD HUNTER SALT BIGGIE JUDGE";
                                break;
                            case 14:
                                $idlist = "HEAD HUNTER SALT GUILTY MONKEY";
                                break;
                            case 15:
                                $idlist = "HEAD HUNTER SALT SWEET WITNESS";
                                break;
                            case 16:
                                $idlist = "HEAD HUNTER SALT VICTIM TROPIC";
                                break;
                            case 17:
                                $idlist = "Husky Gum Wolf Salt";
                                break;
                            case 18:
                                $idlist = "Husky Ice Woody Salt";
                                break;
                            case 19:
                                $idlist = "Husky Lemon Flock Salt";
                                break;
                            case 20:
                                $idlist = "Husky Mint Series SALT Berry Hunter";
                                break;
                            case 21:
                                $idlist = "Husky Shake Pears Salt";
                                break;
                            case 22:
                                $idlist = "Husky Wolfberry Salt";
                                break;
                            case 23:
                                $idlist = "JAMGO SALT Cherniy";
                                break;
                            case 24:
                                $idlist = "JAMGO SALT Dunkin";
                                break;
                            case 25:
                                $idlist = "JAMGO SALT Jumanji";
                                break;
                            case 26:
                                $idlist = "JAMGO SALT Jumanji";
                                break;
                            case 27:
                                $idlist = "JAMGO SALT Limbo";
                                break;
                            case 28:
                                $idlist = "JAMGO SALT Mister V";
                                break;
                            case 29:
                                $idlist = "JAMGO SALT Ultramarin";
                                break;
                            case 30:
                                $idlist = "Boshki Salt Дачные ON ICE (STRONG)";
                                break;
                            case 31:
                                $idlist = "Boshki Salt Тропические ON ICE (STRONG)";
                                break;
                            case 32:
                                $idlist = "Smoant Charon Baby Matte Purple";
                                break;
                            case 33:
                                $idlist = "Smoant Charon Baby Stainless Steel";
                                break;
                            case 34:
                                $idlist = "Smoant Battlestar baby 1.2ohm";
                                break;
                            case 35:
                                $idlist = "Smoant Pasito 0.6ohm";
                                break;
                            case 36:
                                $idlist = "Smoant Santi S2 0.6ohm";
                                break;
                            case 37:
                                $idlist = "Картридж Voopoo V.THRU ohm 1.2 3ml";
                                break;
                            case 38:
                                $idlist = "Husky White Salt Chew peak";
                                break;
                            case 39:
                                $idlist = "Husky White Salt Sweet vale";
                                break;
                            case 40:
                                $idlist = "Husky White Salt Mint wind (STRONG)";
                                break;
                            case 41:
                                $idlist = "Husky White Salt Cold passion (STRONG)";
                                break;
                            case 42:
                                $idlist = "Husky White Salt Green land (STRONG)";
                                break;
                            case 43:
                                $idlist = "Husky White Salt Chew peak (STRONG)";
                                break;
                            case 44:
                                $idlist = "Husky White Salt Cold passion";
                                break;
                            case 45:
                                $idlist = "Husky White Salt Sweet vale (STRONG)";
                                break;
                            case 46:
                                $idlist = "Husky Wolfberry Salt (STRONG)";
                                break;
                            case 47:
                                $idlist = "Husky Tropic Hunter Salt (STRONG)";
                                break;
                            case 48:
                                $idlist = "Husky Sour Beast Salt (STRONG)";
                                break;
                            case 49:
                                $idlist = "Husky Shake Pears Salt (STRONG)";
                                break;
                            case 50:
                                $idlist = "Husky Red Warg Salt (STRONG)";
                                break;
                            case 51:
                                $idlist = "Husky Mint Series Salt Water Place (STRONG)";
                                break;
                            case 52:
                                $idlist = "Husky Double Ice Salt Arctic Strike";
                                break;
                            case 53:
                                $idlist = "Husky Double Ice Salt Chily Kiwi";
                                break;
                            case 54:
                                $idlist = "Husky Double Ice Salt Frosty Palm";
                                break;
                            case 55:
                                $idlist = "Husky Double Ice Salt North Sweet";
                                break;
                            case 56:
                                $idlist = "Husky Double Ice Salt Siberian Black";
                                break;
                            case 57:
                                $idlist = "Husky Double Ice Salt Tropic dew";
                                break;
                            case 58:
                                $idlist = "Husky Lemon Flock Salt (STRONG)";
                                break;
                            case 59:
                                $idlist = "Cosmonaut Salt Nebula (STRONG)";
                                break;
                            case 60:
                                $idlist = "Cosmonaut Salt Rainbow Space (STRONG)";
                                break;
                            case 61:
                                $idlist = "Cosmonaut Salt Gravitation Gummy (STRONG)";
                                break;
                            case 62:
                                $idlist = "Boshki Salt Exotic (STRONG)";
                                break;
                            case 63:
                                $idlist = "Boshki Salt Neon (STRONG)";
                                break;
                            case 64:
                                $idlist = "Boshki Salt Бодрые (STRONG)";
                                break;
                            case 65:
                                $idlist = "Boshki Salt Добрые (STRONG)";
                                break;
                            case 66:
                                $idlist = "Boshki Salt Зимние (STRONG)";
                                break;
                            case 67:
                                $idlist = "Boshki Salt Злые (STRONG)";
                                break;
                            case 68:
                                $idlist = "Boshki Salt Кубанские (STRONG)";
                                break;
                            case 69:
                                $idlist = "Boshki Salt Садовые (STRONG)";
                                break;
                            case 70:
                                $idlist = "Husky Mint Series Salt Blue Up (STRONG)";
                                break;
                            case 71:
                                $idlist = "Husky Mint Series Salt Juicy Grapes (STRONG)";
                                break;
                            case 72:
                                $idlist = "Boshki Salt Ягодки ON ICE (STRONG)";
                                break;
                            case 73:
                                $idlist = "Husky Double Ice Salt Arctic Strike (STRONG)";
                                break;
                            case 74:
                                $idlist = "Husky Double Ice Salt Chily Kiwi (STRONG)";
                                break;
                            case 75:
                                $idlist = "Husky Double Ice Salt Frosty Palm (STRONG)";
                                break;
                            case 76:
                                $idlist = "Husky Double Ice Salt North Sweet (STRONG)";
                                break;
                            case 77:
                                $idlist = "Husky Double Ice Salt Siberian Black (STRONG)";
                                break;
                            case 78:
                                $idlist = "Husky Double Ice Salt Tropic dew (STRONG)";
                                break;
                        }
                            echo "<tr>";
                            echo "<td>" . $row["id"] . "</td>";
                            echo "<td>" . $row["parent_id"] . "</td>";
                            echo "<td>" . $idlist . "</td>";
                            echo "<td><a href='updateo.php?id=" . $row["id"] . "'><img src='/panel/img/note.png' width='16' height='16'></a></td>";
                            echo "<td><a href='deleteo.php?id=" . $row["id"] . "'><img src='/panel/img/scrap.png' width='16' height='16'></a></td>";
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