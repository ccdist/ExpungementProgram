<?	session_start();
	$inDirectory = strpos($_SERVER['PHP_SELF'], '_protected');
	if($inDirectory){
		$_SESSION['fileDirectory'] = "../";
	} 
	else {
		$_SESSION['fileDirectory'] = "";
	}
	require_once($_SESSION['fileDirectory'] . "_php/secure.php");
 	require_once($_SESSION['fileDirectory'] . "_includes/header.php"); ?>

  <title>IVYT Expungement Program</title>
<!-- *********************************
      INSERT PAGE SPECIFIC CSS FILE
**************************************-->
<link rel="stylesheet" href="<? echo $_SESSION['fileDirectory']; ?>_css/adminHome.css">
</head>
<body>
<? require_once($_SESSION['fileDirectory'] . "_includes/navbar.php"); ?>
<div id="mainContainer" class="container-fluid"> <!-- gives main bg color, extends to screen width -->
	<div id="contentContainer" class="container py-1"><!-- contains all content -->
		<h1>Password Protected Admin Page</h1>
		
	</div><!-- content container -->
</div><!-- main page container -->
<? require_once($_SESSION['fileDirectory'] . '_includes/bootstrapDependencies.php'); ?>
<script src="<? echo $_SESSION['fileDirectory']; ?>_script/adminHome.js"></script>
<? require_once($_SESSION['fileDirectory'] . '_includes/footer.php');  ?>