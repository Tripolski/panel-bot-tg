<?php
    require_once ("connect.php");
?>
<?php
    if(isset($_GET["id"]))
    {
        $userid = mysqli_real_escape_string($conn, $_GET["id"]);
        $sql = "DELETE FROM bot_shop_profile WHERE id = '$userid'";
        if(mysqli_query($conn, $sql)){
            
            header("Location: users.php");
        } else{
            echo "Ошибка: " . mysqli_error($conn);
        }
        mysqli_close($conn);    
    }
?>
