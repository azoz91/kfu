<?php
$title='Faculty Delete';
include 'header.php';
include 'connect-db.php';

if(isset($_POST['submit']))
{
	$key=$_POST['del'];
	
	$query = "SELECT ID,Name FROM faculty WHERE ID=$key";

   $result = mysqli_query($con,$query);
}
?>
			<div class="body">
				<div>
					<h2>Delete Faculty information</h2>
                    <br>
                    <br>
					<form id="fdelete" name="fdelete" method="post" action="facultydelete.php">
                       <label for="fid"> ID: </label>
                <input type="text" name="fdel"> <input type="button" value="Search" /> 
                   <br>
                    <br>
                        <table>
           <tr><td><label for="fid">ID: </label>
                <input type="text" name="fid" value="<?php echo $result['ID'];?>" readonly></td>
                <td><label for="fname">Name:    </label>
                <input type="text" name="fname" value="<?php echo $result['Name'];?>" readonly></td></tr>
                            <tr><td><input type="submit" name="submit" value="Delete">
           </td></tr>
                    
                    </table>
                    
                    </form>
					
				</div>
			</div>
		</div>
	</div>
</body>
</html>