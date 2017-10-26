<footer class="container-fluid">
	<div id="footerMainContent" class="container">
		<div class="row pt-2 text-light">
			<section id="address" class="col-sm-6 col-md-6 col-lg-3 pt-lg-5">
				<p>804 Lincolnway West -- B 04 <br>
					PO Box 11587 <br>
					South Bend, Indiana 46616<br>
				<a href="tel:5749312173"><i class="fa fa-phone" aria-hidden="true"></i> 574-931-2173</a>
				</p>
			</section>
			<section id="map" class="col-lg-6 d-none d-lg-inline">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2979.795884599626!2d-86.26381124868979!3d41.68175148555507!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x881132b5d8b79ca9%3A0x203c458fe168a281!2s804+Lincoln+Way+W%2C+South+Bend%2C+IN+46616!5e0!3m2!1sen!2sus!4v1508959875545"></iframe>
			</section>
			<section id="links" class="col-sm-6 col-md-6 col-lg-3">
				<ul>
					<li><a href="#">Link number 1</a></li>
					<? if($_SESSION['loggedIn'] != 1){  
						echo "<li><a href='_protected/adminHome.php'>Admin Area</a></li>"; 
						} else { 
							echo "<li><a href='".$_SESSION['fileDirectory']."logout.php'>Logout as Admin</a></li>"; 
						}
					?>
				</ul>
			</section>	
		</div>
	</div>
</footer>
<script src="<? echo $_SESSION['fileDirectory']; ?>_script/global.js"></script>
</body>
</html>