<?php
require_once('login2/config.php');
    $row1="";
    $row2="";
    $row3="";
    $tim = 0;
    $sqlk = "SELECT * FROM posts WHERE color='DarkGreen' OR color='DarkRed' OR color='Gray' ";
    $resa = mysqli_query($link, $sqlk) or die(mysqli_error($link));
    $row = mysqli_fetch_assoc($resa);

    while($row = mysqli_fetch_assoc($resa)) :
        if((int)$row['curtim']>$tim)
        {
            $tim = (int)$row['curtim'];
        }
    endwhile;


    $curtime = $tim;
    $time1 = time();
    $time= (int)$time1;
    $dif_time = $time - $curtime;

    //------------CREATE A NEW TABLE WITH HISTORY OF GAMES--------------
if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_POST['submit'])) //54000
    {

        $sqlDel = "DELETE from history ";
        $result_d = mysqli_query($link, $sqlDel) or die(mysqli_error($link));

        $sq = "SELECT * FROM posts WHERE color='DarkGreen' OR color='DarkRed' OR color='Gray' ";
        $rest = mysqli_query($link, $sq) or die(mysqli_error($link));
        $roww = mysqli_fetch_assoc($rest);

    while($roww = mysqli_fetch_assoc($rest)) :
        $game = $roww['game'];
        $predict = $roww['predict'];
        $result = $roww['result'];
        $sport = $roww['sport'];
        $userID = $roww['userID'];
        $apod = $roww['apodosi'];
        $color = $roww['color'];

        $sqle = "INSERT INTO history (gam,predic,resul,spor,userIDD,apodos,colo)VALUES ('$game', '$predict','$result','$sport','$userID','$apod' , '$color') ";
        $res = mysqli_query($link, $sqle) or die(mysqli_error($link));

    endwhile;

        if($res)
        {
            header("location:index.php#last_day");
        }
        else
        {
            echo '<script>alert("Data Not Updated"); </script> ';
        }
    }
?>