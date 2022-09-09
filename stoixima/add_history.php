<?php
ini_set('display_errors', '1');

session_start();
$profil=$_SESSION['username'];
if($profil != true)
{
    header("Location: index.php");
}
    require_once('login2/config.php');

    if(isset($_POST['but1']))
    {
        $sql = "SELECT * FROM history";
        $result = mysqli_query($link, $sql) or die(mysqli_error($link));


            $sqle = "INSERT INTO history (gam,predic,resul,spor,userIDD,apodos,colo)SELECT game,predict,result,sport,userID,apodosi,color FROM posts WHERE color='DarkGreen' OR color='DarkRed' OR color='Gray'";
            $res = mysqli_query($link, $sqle) or die(mysqli_error($link));


            if($res)
            {
                header("location:index.php#last_day");
            }
            else
            {
                header("location:../login2/login.php");
            }

    }
?>