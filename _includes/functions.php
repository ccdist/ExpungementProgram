<? //insert universal functions here


function getTestimonials($db){
	//set a constant for query usage
	$MAXIMUM_TESTIMONIALS = 8;
	
 //this loop gets up to $MAXIMUM_TESTIMONIALS most recent updates from the database - edit the CONSTANT to adjust the amount.
    $sql = "SELECT * FROM `testimonials` ORDER BY `pk` DESC LIMIT $MAXIMUM_TESTIMONIALS";
    
    //checks for a successful query, on success, populate page with testimonials from DB
    if($runSQL = mysqli_query($db, $sql)){
        $i = 1;
        
        while($row = mysqli_fetch_array($runSQL)){	
	    	if ($i == 1){
	    		echo "<div class='row py-5 text-light'>";
			}
	        // fix the logic for creating the DIV tag				
            echo "  
	            <article class='col-sm-12 col-md-6 col-lg-3 article" . $i . "'>
		            <h5>" . $row['name'] . " said: </h5>
		            <hr>
		            <p><i class='fa fa-quote-left'></i> " . $row['messages'] . " <i class='fa fa-quote-right'></i></p>
	            </article>";
            $i++;
			if($i > 4){$i = 1;}
			if ($i == 1){
	    		echo "</div>";
			}
        }
        if($i > 1){
	        echo "</div> <!-- END OF ROW DIV  -->";
	    }
    } else { // this else is if the query to the db is unsuccessful. Upon a failed connection, page is populated with Lorem Ipsum.
	    $i = 1;
	    $j = 1;
	    while ($i <= 4 && $j <= 2){
   	    	if ($i == 1){
	    		echo "<div class='row py-5 text-light'>";
			}

	    	echo '<article class="col-sm-12 col-md-6 col-lg-3 article'. $i .'">
				<h5>Parturient V. said:</h5>
				<hr>
				<p> <i class="fa fa-quote-left"></i> Etiam porta sem malesuada magna mollis euismod. Sed posuere consectetur est at lobortis. Curabitur blandit tempus porttitor. Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. <i class="fa fa-quote-right"></i></p>
			</article>
			';
			$i++;
			if($i > 4){$i = 1; $j += 1;}
			if ($i == 1){
	    		echo "</div>";
			}
		}
		if ($i > 1){
			echo "</div> <!-- END OF ROW DIV  -->";
		}
	}
} 


//This function checks the username and the password against the database
function loginVerification ($db, $tablename, $username, $password){
    
    // Clean POST data
    $hashedPassword = password_hash(mysqli_real_escape_string($db, trim($password)), PASSWORD_DEFAULT);
	$username = mysqli_real_escape_string($db, trim($username));
	
    // query to check for username in database
    $queryForUsername = ("SELECT * FROM `$tablename` WHERE `username` = '$username'");
    $usernameResult = mysqli_query($db, $queryForUsername);
    $userInfo = mysqli_fetch_array($usernameResult);
     /*********************************************************
	 //    THIS SECTION ON REMOVES SECURITY ON LOCAL SERVER   *
	 *********************************************************/
	if ($_SERVER['REMOTE_ADDR'] == "::1"){
		$_SESSION['loggedIn'] = 1;
		header("Location: ../_protected/adminHome.php?noProtectionOnLocalServer");
		exit();
    }
     /*********************************************************
	 //   ABOVE SECTION ON REMOVES SECURITY ON LOCAL SERVER   *
	 *********************************************************/
    // check to see if user is in database
    if (mysqli_num_rows($usernameResult) < 1){
	    	    
        $_SESSION['loginError'] = "Hold your horses! That Username and Password does not match!"; // set error log for display on login page
        header("Location: ../login.php?error=1"); // redirect user back to login if not in database
        
    } else {  //if username is in the database, check for matching password
	    
        if (password_verify($password, $userInfo['password'])){ 	        
	        
			$_SESSION['loggedIn'] = 1; // raise flag for sucessful login
			$_SESSION['loginError'] = 0; //delete login error flag if it had been raised
		
			
		} else { // username matches, but password does not
						
            $_SESSION['loggedIn'] = 0; // lower flag for failed login
			$_SESSION['loginError'] = $_SESSION['loginError'] = "Hold your horses! That Username and Password does not match!"; // set error log for display on login page
        }
    }
    
    // redirect user pending login status 

    if ($_SESSION['loggedIn'] == 0 ){ 
	    
	    // failed login
        header("Location: ../login.php?error=1");
	} else {
		
		//successful login
    	header("Location: ../_protected/adminHome.php");
	}
}

function checkUsernameAvailability($db, $tablename, $username){
	// Clean POST Data
	$cleanUsername = mysqli_real_escape_string($db, trim($_POST['username']));
	
	//query for username
	$queryForUsername = ("SELECT * FROM $tablename WHERE username = '" . $_POST['username']."'");
	$usernameResult = mysqli_query($db, $queryForUsername);
	
	return mysqli_num_rows($usernameResult) ? false : true;
}

// for registration page, username unavailable
function usernameUnavailable() {
	$_SESSION['registrationError'] = "Sorry, Champ. That one's taken.";
	header ("Location: ../login.php?error=1");
}

//for registratin  page, username available
function usernameAvailable(){
	echo "register this bitch";
}

	    
?>
