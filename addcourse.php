<?php
$title='Add course';
include 'header.php';
include 'connect-db.php';

$query="Select Name,ID FROM Faculty WHERE status='active'";
$result = mysqli_query($con,$query);
if(isset($_POST['submit']))
{

    $id = $_POST['cid'];
    $name = $_POST['cname'];
    $section = $_POST['section'];
    $facid = $_POST['fid'];
    

    
       $query = "INSERT INTO course (ID,Course,Section,FacultyID)
        VALUES ('$id','$name','$section','$facid')";
            
			
            $res = mysqli_query($con, $query);        

            if($res==1)
            {
                $status = "done";
				}
            
    else
    {
        $status="notdone";
		$err=mysqli_error($con);
    }

    header("Location: addcourse.php?status=$status");
}
?>
<script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-2.1.3.min.js"></script>
  <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/jquery.validate.min.js"></script>
  <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/additional-methods.min.js"></script>
  <script src="js/val.js"></script>
			<div class="body">
				<div>
					<h2>Please fill the form</h2>
                    <br>
                    <br>
                    <?php if(isset($_GET['status']) && $_GET['status']==="done") { ?>   
    <p>The course have been added successfully , Thank you</p>
    <br>
    <br>
    <p><a href="admin.php">Admin page</a></p>
</script>
    <?php } else {if(isset($_GET['status']) && $_GET['status']==="notdone") { ?>
    <p>Sorry something going wrong, try again </p> <?php echo $_GET['err']?>
    <?php } else { ?>
					<form id="coursereg" name="coursereg" method="post" action="addcourse.php">
                        <table>
            <tr><td><label for="cid">Course ID: </label></td>
                <td><input type="text" name="cid"></td>
                <td><label for="cname">Course Name:    </label></td>
                <td><input type="text" name="cname"></td></tr>
           
           <tr>
           <td> <label for="section">Section: </label></td>
              <td> <input type="number" name="section"></td>
               <td><label for="cid">Faculty ID: </label></td>
                <td><select name="fid">
                <?php foreach ($result as $r){?>  
                            
               <option value="<?php echo $r["ID"]?>"><?php echo$r["Name"]?></option>
				 <?php }?>
				 </select></td></tr>
                    
                            <tr><td><input type="submit" name="submit" value="Add">
           <input type="reset" name="reset"></td></tr>
                    
                    </table>
                    <br/>
                    <br/>
                    <br/>
                    <label id="messageBox" style="color: red;"></label>
                    </form>
					
				</div>
			</div>
		</div>
		<?php } } ?>
	</div>
</body>
</html>