<?
session_start();

if($_SESSION['loggedIn'] != 1){
	header("Location: ".$_SESSION['fileDirectory']."login.php");
}

	
?>