<?php
$title='Home Page';
include 'header.php';
include('sessionstd.php');
?>
			<div class="body">
				<div>
					<h2>Welcome <?php echo $login_session; ?>!</h2>
					<h3>
					<ul class="ss">
						<li class="ss"><a href=studentupdate.php>Update Profile</a></li>
						<li class="ss"><a href=registercourse.php>register a course</a></li>
					</ul>
					</h3>
					<h2><a href = "logout.php">Sign Out</a></h2>
					
					
				</div>
			</div>
		</div>
	</div>
</body>
</html>