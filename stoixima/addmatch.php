<?php
ini_set('display_errors', '1');

session_start();
$profil = $_SESSION['username'];

if($profil==true)
{
	require_once('login2/config.php');
	if(isset($_POST['insertdata'])){
		$sport = $_POST['sport'];
		$game = $_POST['game'];
		$predict = $_POST['predictgame'] ?? null;
		$result = $_POST['resultgame'] ?? null;
		$apod = $_POST['apodosi'];
		$color = null;
		$curtime = time();
		$newid = "SELECT * FROM users WHERE Username = '$profil' ";

		$rest = mysqli_query($link, $newid) or die(mysqli_error($link));
		$row = mysqli_fetch_assoc($rest);
		$idnew = $row['ID'];

		$sqle = "INSERT INTO posts (game,predict,result,sport,userID,apodosi,color,curtim)VALUES ('$game', '$predict','$result','$sport','$idnew','$apod' , '$color' ,'$curtime') ";
		$res = mysqli_query($link, $sqle) or die(mysqli_error($link));

			if($res)
			{
				echo '<script> alert("ΤΑ ΔΕΔΟΜΕΝΑ ΑΠΟΘΗΚΕΥΤΗΚΑΝ"); </script>';
				header('Location: index.php#schedule');
			}
			else
			{
				echo '<script> alert("ΚΑΤΙ ΠΗΓΕ ΣΤΡΑΒΑ!!!ΠΡΟΣΠΑΘΗΣΕ ΑΡΓΟΤΕΡΑ."); </script>';
			}
		}
	
}
else
{
    header("Location: index.php");
}
mysqli_close($link);

?>
