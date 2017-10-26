<footer class="container-fluid">
	<div id="footerMainContent" class="container">
		<div class="row pt-2">
			<section id="address" class="col-sm-6 col-md-6 col-lg-3 pt-lg-5">
				<p>804 Lincolnway West -- B 04 <br>
					PO Box 11587 <br>
					South Bend, Indiana 46616<br>
					<tel>584-931-2173</tel>
				</p>
			</section>
			<section id="map" class="col-lg-6 d-none d-lg-inline">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2979.795884599626!2d-86.26381124868979!3d41.68175148555507!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x881132b5d8b79ca9%3A0x203c458fe168a281!2s804+Lincoln+Way+W%2C+South+Bend%2C+IN+46616!5e0!3m2!1sen!2sus!4v1508959875545"></iframe>
			</section>
			<section id="links" class="col-sm-6 col-md-6 col-lg-3">
				<ul>
					<a href="#"><li>Link number 1</li></a>
					<? if($_SESSION['loggedIn'] != 1){  
						echo "<a href='login.php'><li>Admin Area</li></a>"; 
						} else { 
							echo "<a href='logout.php'><li>Logout as Admin</li></a>"; 
						}
					?>
				</ul>
			</section>	
		</div>
	</div>
</footer>
<script src="_script/global.js"></script>
</body>
</html>