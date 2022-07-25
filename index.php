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
            <div class="onebutton"><a href="index.php"><img src="/panel/img/home.png" width="18" height="18"></a></div>
            <div class="twobutton"><a href="orders.php"><img src="/panel/img/lists.png" width="16" height="16"></a></div>
            <div class="threebutton"><a href="users.php"><img src="/panel/img/users.png" width="16" height="16"></a></div>
            <div class="fourbutton"><a href="product.php"><img src="/panel/img/setting.png" width="16" height="16"></a></div>
        </div>
        <div>
            <div class = "pindextable">
                <div class = "indexsota">
                    <?php
                        $sql1 = "SELECT * FROM bot_shop_product";
                        if($result = $conn->query($sql1)){
                            $rowsCount1 = $result->num_rows; // количество полученных строк
                            echo "<img src='/panel/img/showproduct.png' width='18' height='18'> $rowsCount1"; 
                        }  
                    ?>
                </div>
                <div class = "indexsota">
                <?php
                    $sql2 = "SELECT * FROM bot_shop_profile";
                    if($result = $conn->query($sql2)){
                        $rowsCount2 = $result->num_rows; // количество полученных строк
                        echo "<img src='/panel/img/showuser.png' width='18' height='16.5'> $rowsCount2 "; 
                    }  
                ?>
                </div>
                <div class = "indexsota">
                <?php
                    $sql3 = "SELECT * FROM bot_shop_order_product";
                    if($result = $conn->query($sql3)){
                        $rowsCount3 = $result->num_rows; // количество полученных строк
                        echo "<img src='/panel/img/showorder.png' width='18' height='18'> $rowsCount3 "; 
                    }  
                ?>
                </div>
            </div>
            <div class="news">
                <script type="text/javascript" src="https://vk.com/js/api/openapi.js?169"></script>
                <!-- VK Widget -->
                <div id="vk_groups"</div>
                <script type="text/javascript">
                VK.Widgets.Group("vk_groups", {mode: 4, wide: 1, width: "1400" , height: "600"}, 212990193);
                </script>
            </div>
        </div>
    </body>
</html>