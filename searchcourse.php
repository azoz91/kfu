<?php
$title='Register a course';
include 'header.php';
include 'connect-db.php';

	
	$query = "SELECT course.ID, course.Course, course.Section, faculty.Name 
	FROM course INNER JOIN faculty 
	WHERE course.FacultyID=faculty.ID And Course LIKE '%".$_GET['search']."%'";

   $result = mysqli_query($con,$query);
 ?>

<div class="body">
				<div>
									<h2>Register a Course </h2>
                    <br> 
                    <br>
                    <form id="crsreg" method="post" action="searchcourse.php">
           	 <table style=" margin-left: 80px; 
					border:1px dotted;">
		<tr><th>ID</th><th>Course Name</th><th>Section</th><th>Faculty Name</th><th></th></tr>
		<?php while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["ID"]."</td><td>".$row["Course"]." 
        </td><td>".$row["Section"]." 
        </td><td>".$row["Name"]." 
        </td><td><input type='radio' name='crsid' value=".$row["ID"]."/> 
        </td></tr>";}?>
	</table>
	<br>
	<input style="margin-left: 550px;" type="submit" value="Register"/>
            </form>
				</div>
			</div>
		</div>
<style type="text/css">
td
{
    padding:0 30px 0 30px;
}
</style>
</body>
</html>