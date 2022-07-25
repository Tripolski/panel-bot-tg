<?php
    require_once ("connect.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>MPPANEL</title>
        <link href="css/style.css" rel="stylesheet">
        <link rel="icon" href="img/favicon.png" type="img/png">
    </head>
    <body>
    <?php
    // если запрос GET
    if($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["id"]))
    {
        $userid = mysqli_real_escape_string($conn, $_GET["id"]);
        $sql = "SELECT * FROM bot_shop_product WHERE id = '$userid'";
        if($result = mysqli_query($conn, $sql)){
            if(mysqli_num_rows($result) > 0){
                foreach($result as $row){
                    $username = $row["name"];
                    $userdescription = $row["description"];
                    $userprice = $row["price"];
                    $userhide = $row["hide"];
                }
                echo "<form method='post'>
                        <p><h3>Обновление продукта</h3>
                        <input type='hidden' name='id' value='$userid' />
                        <p>Имя:
                        <input type='text' name='name' value='$username' /></p>
                        <p>Описание:
                        <input type='text' name='description' value='$userdescription' /></p>
                        <p>Цена:
                        <input type='number' name='price' value='$userprice' /></p>
                        <p>Видимость:
                        <input type='number' name='hide' value='$userhide' /></p>
                        <input type='submit' value='Сохранить'>
                     </form>";
            }
            else{
                echo "<div>Пользователь не найден</div>";
            }
            mysqli_free_result($result);
        } else{
            echo "Ошибка: " . mysqli_error($conn);
        }
    }
    elseif (isset($_POST["id"]) && isset($_POST["name"]) && isset($_POST["description"]) && isset($_POST["price"]) && isset($_POST["hide"])) {
        
        $userid = mysqli_real_escape_string($conn, $_POST["id"]);
        $username = mysqli_real_escape_string($conn, $_POST["name"]);
        $userdescription = mysqli_real_escape_string($conn, $_POST["description"]);
        $userprice = mysqli_real_escape_string($conn, $_POST["price"]);
        $userhide = mysqli_real_escape_string($conn, $_POST["hide"]);
        
        $sql = "UPDATE bot_shop_product SET name = '$username', description = '$userdescription', price = '$userprice', hide = '$userhide' WHERE id = '$userid'";
        if($result = mysqli_query($conn, $sql)){
            header("Location: product.php");
        } else{
            echo "Ошибка: " . mysqli_error($conn);
        }
    }
    else{
        echo "Некорректные данные";
    }
    mysqli_close($conn);
    ?>
    </body>
</html>