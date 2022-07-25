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
        $sql = "SELECT * FROM bot_shop_profile WHERE id = '$userid'";
        if($result = mysqli_query($conn, $sql)){
            if(mysqli_num_rows($result) > 0){
                foreach($result as $row){
                    $userfname = $row["first_name"];
                    $userlname = $row["last_name"];
                    $userphone = $row["phone"];
                    $useradress = $row["adress"];
                }
                echo "<form method='post'>
                        <h3>Обновление пользователя</h3>
                        <input type='hidden' name='id' value='$userid' />
                        <p>Имя:
                        <input type='text' name='first_name' value='$userfname' /></p>
                        <p>Фамилия:
                        <input type='text' name='last_name' value='$userlname' /></p>
                        <p>Телефон:
                        <input type='text' name='phone' value='$userphone' /></p>
                        <p>Адрес:
                        <input type='text' name='adress' value='$useradress' /></p>
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
    elseif (isset($_POST["id"]) && isset($_POST["first_name"]) && isset($_POST["last_name"]) && isset($_POST["phone"]) && isset($_POST["adress"])) {
        
        $userid = mysqli_real_escape_string($conn, $_POST["id"]);
        $userfname = mysqli_real_escape_string($conn, $_POST["first_name"]);
        $userlname = mysqli_real_escape_string($conn, $_POST["last_name"]);
        $userphone = mysqli_real_escape_string($conn, $_POST["phone"]);
        $useradress = mysqli_real_escape_string($conn, $_POST["adress"]);
        
        $sql = "UPDATE bot_shop_profile SET first_name = '$userfname', last_name = '$userlname', phone = '$userphone', adress = '$useradress' WHERE id = '$userid'";
        if($result = mysqli_query($conn, $sql)){
            header("Location: users.php");
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