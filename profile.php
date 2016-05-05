<?php
$title='My Profile';
include 'header.php';
include('session.php');
?>

<div id="profile">
<b id="welcome">Welcome : <i><?php echo $login_session; ?></i></b>
<b><a href="logout.php">Log Out</a></b>
</div>
</body>
</html>