<?
	session_start();
	
	if(!isset($_POST)){
		header("Location: login.php");
	}
//	error_reporting(E_ALL); ini_set('display_errors', '1');
	require_once("../_includes/db_connection.php");
	require_once("../_includes/functions.php");

	loginVerification($db, 'userAuthentication', $_POST['username'], $_POST['password']);

?>