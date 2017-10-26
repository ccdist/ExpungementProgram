<?
	session_start();
	session_unset();
	session_destroy();
	
	$inDirectory = strpos($_SERVER['PHP_SELF'], '_protected');
	if($inDirectory){
		$_SESSION['fileDirectory'] = "../";
	} 
	else {
		$_SESSION['fileDirectory'] = "";
	}
	header("Location: ".$_SESSION['fileDirectory']."index.php");	
?>