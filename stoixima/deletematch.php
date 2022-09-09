<?php

session_start();
$profil=$_SESSION['username'];
if($profil != true)
{
    header("Location: index.php");
}
else
{
// Include config file10
require_once('login2/config.php');

if(isset($_REQUEST['delId'])){
	$key = $_GET['delId'];

	$sql = "SELECT * FROM posts WHERE ID ='$key'";
	$result = mysqli_query($link, $sql) or die(mysqli_error($link));

	if(mysqli_num_rows($result) > 0)
	{
		$sqlDel = "DELETE from posts WHERE ID = '$key'";
		$result_d = mysqli_query($link, $sqlDel) or die(mysqli_error($link));
		if($result_d)
		{
     		header("Location: index.php#schedule");
    	}
    	else
    	{
     		echo "Oups try later";
    	}

	}


}
mysqli_close($link);
}

?>