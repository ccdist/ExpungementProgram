<? require_once($_SESSION['fileDirectory']."_includes/header.php"); ?>
  <title>IVYT Expungement Program</title>
<!-- *********************************
      INSERT PAGE SPECIFIC CSS FILE
**************************************-->
<link rel="stylesheet" href="<? echo $_SESSION['fileDirectory']; ?>_css/login.css">
</head>
<body>
<? require_once($_SESSION['fileDirectory']."_includes/navbar.php"); ?>
<div id="mainContainer" class="container-fluid"> <!-- gives main bg color, extends to screen width -->
	<div id="contentContainer" class="container pt-1"><!-- contains all content -->

	    <form id="login" method="post" action="_php/loginVerification.php">
	        <fieldset>
	            <legend>Login: </legend>
	            <label for="login-username">Username:</label>
	            <input id="login-username" type="text" name="username"> <br>
	            <label for="login-password">Password:</label>
	            <input id="login-password" type="password" name="password"> <br>
	            <input class="buy-btn" type="submit" value="Login!">
	            <input class="buy-btn" type="reset">
	            <? if($_SESSION['loginError']){ ?> <span class="warning alert small"><? echo $_SESSION['loginError']; ?></span> <? } ?>
	        </fieldset>
	    </form>


	</div><!-- content container -->
</div><!-- main page container -->

<? require_once($_SESSION['fileDirectory'].'_includes/bootstrapDependencies.php'); ?>
<script src="<? echo $_SESSION['fileDirectory'] ?>_script/login.js"></script>
<? require_once($_SESSION['fileDirectory'].'_includes/footer.php'); ?>