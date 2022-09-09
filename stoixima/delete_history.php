<?php

session_start();
$profil=$_SESSION['username'];
if($profil != true)
{
    header("Location: index.php");
}
require_once('login2/config.php');

    //------------CREATE A NEW TABLE WITH HISTORY OF GAMES--------------
if(isset($_POST['del'])){


            $sqlDel = "DELETE from history ";
            $result_d = mysqli_query($link, $sqlDel) or die(mysqli_error($link));

            if($result_d)
            {
                header("location:index.php#last_day");
            }
            else
            {
                echo '<script>alert("Data Not Updated"); </script> ';
            }

    }
?>