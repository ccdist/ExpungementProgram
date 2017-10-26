<nav class="navbar navbar-expand-lg navbar-dark sticky-top">
    <div class="container">
	    <a href="#" class="navbar-brand">
		    <img src="<? echo $_SESSION['fileDirectory']; ?>_images/Opening_Doors_Key.png" height="70">
	    </a>
	    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
	    	<span class="navbar-toggler-icon"></span>
		</button>		
		<div class="collapse navbar-collapse" id="navbarCollapse">
	        <div id="navElements" class="navbar-nav">
	            <a id="index" href="<? echo $_SESSION['fileDirectory']; ?>index.php" class="nav-item nav-link">Home</a>
	            <a id="services" href="<? echo $_SESSION['fileDirectory']; ?>services.php" class="nav-item nav-link">Services</a>
	            <a id="about" href="<? echo $_SESSION['fileDirectory']; ?>about.php" class="nav-item nav-link">About</a>
	            <a id="contact" href="<? echo $_SESSION['fileDirectory']; ?>contact.php" class="nav-item nav-link">Contact</a>
	            <a id="mission" href="<? echo $_SESSION['fileDirectory']; ?>mission.php" class="nav-item nav-link">Mission</a>
	            <a id="staff" href="<? echo $_SESSION['fileDirectory']; ?>staff.php" class="nav-item nav-link">Staff</a>
	            <a id="testimonials" href="<? echo $_SESSION['fileDirectory']; ?>testimonials.php" class="nav-item nav-link">Testimonials</a>
				<? if($_SESSION['loggedIn'] == 1){echo "<a id='logout' href='". $_SESSION['fileDirectory']."logout.php' class='nav-item nav-link'><li>Logout</li></a>"; }
				?>
	            <!--<li class="nav-item dropdown">
			        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown link</a>
			        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
				        <a class="dropdown-item" href="#">Action</a>
				        <a class="dropdown-item" href="#">Another action</a>
				        <a class="dropdown-item" href="#">Something else here</a>
			        </div>
			    </li>  ACTIVATE IF A DROPDOWN BOX IS REQUIRED IN THE FUTURE-->
	        </div> <!-- navbar-nav -->
		</div><!-- navbar collapse -->
    </div> <!-- container for navbar width -->
</nav>