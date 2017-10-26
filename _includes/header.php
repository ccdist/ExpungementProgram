<? session_start(); ?>
<?// 	error_reporting(E_ALL); ini_set('display_errors', '1'); 
	$inDirectory = strpos($_SERVER['PHP_SELF'], '_protected');
	if($inDirectory){
		$_SESSION['fileDirectory'] = "../";
	} 
	else {
		$_SESSION['fileDirectory'] = "";
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
    <!-- insert global styling for mobile / desktop response -->
    <link rel="stylesheet" type="text/css" href="<? echo $_SESSION['fileDirectory']; ?>_css/globalResponsive.min.css"> 
    
    <!-- insert global styles -->
    <link rel="stylesheet" type="text/css" href="<? echo $_SESSION['fileDirectory']; ?>_css/global.css">
    
    <!-- insert icons -->
    <link rel="stylesheet" type="text/css" href="<? echo $_SESSION['fileDirectory']; ?>_css/font-awesome-4.7.0/css/font-awesome.min.css">
	<? 
		// include universal functions
		include_once($_SESSION['fileDirectory'] . "_includes/functions.php"); 
		// include database connection
		require_once($_SESSION['fileDirectory'] . "_includes/db_connection.php");
	?>