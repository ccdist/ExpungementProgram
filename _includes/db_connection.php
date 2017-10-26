<?
if ($_SERVER['REMOTE_ADDR'] == "::1"){
	$server  = "localhost";
	$username = "root";
	$password = "root";
	$database = 'C250209_ivyExpunge';
} else {
		$server  = "mysql905.ixwebhosting.com";
		$username = "C250209_ivyAdmin";
		$password = "BUmxohaFPux5";
		$database = 'C250209_ivyExpunge';

	}


$db = mysqli_connect($server, $username, $password, $database);

if (!$db) { // this prevents errors from popping up on team members computers who don't have DB access
	$server  = "localhost";
	$username = "root";
	$password = "root";
	$database = 'mysql';
	
	$db = mysqli_connect( $server, $username, $password, $database);
	if (!$db) {
		die( "Connection failed: " . mysqli_connect_error() );
	} else {
		//echo "Connected Successfully";
	 }
 }
 
 ?>