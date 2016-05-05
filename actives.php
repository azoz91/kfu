<?php
$title='Actvivation';
include 'header.php';
include 'connect-db.php';

$query = "SELECT * FROM student WHERE status='notactive'";
$result = mysqli_query($con,$query);

if(isset($_POST['submit']))
{
$sql="UPDATE student SET status='active' WHERE ID='".$_POST['stdid']."'";

if ($con->query($sql) === TRUE) {
	$status = "done";
    
} else {
	$status="notdone";
    $err=mysqli_error($con);
    
}
header("Location: actives.php?status=$status");
}
		?>
		<div class="body">
				<div>
					<h2>Pending list</h2>
					<br>
					<br>
					<?php if(isset($_GET['status']) && $_GET['status']==="done") { ?>   
    <p>The user has been activated successfully , Thank you</p>
    <br>
    <br>
    <p><a href="admin.php">Admin Page</a></p>
</script>
    <?php } else {if(isset($_GET['status']) && $_GET['status']==="notdone") { ?>
    <p>Sorry something going wrong, try again </p> <?php echo $_GET['err']?>
    <?php } else { ?>
					<form id="activate" name="activate" method="POST" action="actives.php">
					<table style=" margin-left: 80px; 
					border:1px dotted;">
		<tr><th>ID</th><th>Name</th><th>Gender</th><th>Email</th><th></th></tr>
		<?php while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["ID"]."</td><td>".$row["Name"]." 
        </td><td>".$row["Gender"]." 
        </td><td>".$row["Email"]." 
        </td><td><input type='radio' name='stdid' value=".$row["ID"]."/> 
        </td></tr>";}?>
	</table>
	</br>
	
				<input style="margin-left: 450px;" type="submit" name="submit" value="Activate"/>
				</form>
				</div>
			</div>
		</div>
		<?php } } ?>
	</div>
</body>
</html>
	
