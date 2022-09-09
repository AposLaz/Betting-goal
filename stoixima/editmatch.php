<?php
ini_set('display_errors', '1');

session_start();
$profil=$_SESSION['username'];

if($profil==true)
{
	require_once('login2/config.php');

	if(isset($_POST['editdata']))
	{
		$id = $_POST['update_id'];

		$game = $_POST['game'];
		$predict = $_POST['predictgame'];
		$result = $_POST['resultgame'];
		$sport = $_POST['sport'];
		$apod = $_POST['apodosi'];
		$color = $_POST['check'] ?? null;

		$sql = "UPDATE posts SET game='$game', predict = '$predict', result = '$result' ,sport = '$sport' ,apodosi = '$apod', color = '$color'  WHERE ID = '$id' ";
		$res = mysqli_query($link, $sql) or die(mysqli_error($link));

		if($res)
		{
			echo '<script> alert("Data Updated"); </script>';
			header("location:index.php#schedule");
		}
		else
		{
			echo '<script>alert("Data Not Updated"); </script> ';
		}
	}
}
else
{
    header("Location: index.php");
}
?>