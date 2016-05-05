<?php
$title='Faculty Page';
include 'header.php';
include('session.php');
?>
			<div class="body">
				<div>
					<h2>Welcome <?php echo $login_session; ?>!</h2>
					<h3>
					<ul class="ss">
						<li class="ss"><a href=startbroadcast.php>Start Broadcast</a></li>
						<li class="ss"><a href=schedule.php>Choose Schedule</a></li>
						<li class="ss"><a href=#.php>Students Approved</a></li>
						<li class="ss"><a href=#.php>Students Delete</a></li>
						<li class="ss"><a href=#>Update Profile</a></li>
					</ul>
					</h3>
					<h2><a href = "logout.php">Sign Out</a></h2>
					
				</div>
			</div>
		</div>
	</div>
</body>
</html>