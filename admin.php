<?php
$title='Admin';
include 'header.php';
include 'sessionad.php';
?>
			<div class="body">
				<div>
					<h2>Welcome Admin <?php echo $login_session; ?>!</h2>
					<h3>
					<ul class="ss">
						<li class="ss"><a href=actives.php>Activate students</a></li>
                        <li class="ss"><a href=activef.php>Activate faculty</a></li>
						<li class="ss"><a href=addcourse.php>Add course</a></li>
						<li class="ss"><a href=facultydelete.php>Delete Faculty</a></li>
						<li class="ss"><a href=studentdelete.php>Delete Student</a></li>
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