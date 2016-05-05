<?php
$title='Faculty Registration';
include 'header.php';
include 'connect-db.php';

if(isset($_POST['submit']))
{

    $id = $_POST['fid'];
    $name = $_POST['fname'];
    $fuser = $_POST['fuser'];
    $pass = $_POST['fpass'];
     $gender = $_POST['fgender'];
	 $age = $_POST['fage'];
	 $dept=$_POST['fdep'];
	 $email = $_POST['fmail'];
	 
       $query = "INSERT INTO faculty (ID,Name,UserName,Password,
      Gender, Age,Department ,Email) VALUES ('$id','$name','$fuser','$pass',
      '$gender','$age','$dept','$email')";
            
			
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

    header("Location: facultyregister.php?status=$status");
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
    <p>You have been registered successfully and we will activate your account shortly, Thank you</p>
    <br>
    <br>
    <p><a href="index.php">Home page</a></p>
    <?php } else {if(isset($_GET['status']) && $_GET['status']==="notdone") { ?>
    <p>Sorry something going wrong, try again </p> <?php echo mysqli_error($con);?>
    <?php } else { ?>
					<form id="fregister" name="fregister" method="post" action="facultyregister.php" enctype="multipart/form-data" >
                        <table>
            <tr><td><label for="fid">ID*: </label></td>
               <td><input type="text" name="fid"></td>
                <td><label for="fname">Name*:</label></td>
                <td><input type="text" name="fname"></td></tr>
           <tr><td> <label for="fuser">User Name*: </label></td>
           <td><input type="text" name="fuser"></td>
            <td><label for="fpass">Password*: </label></td>
            <td><input type="password" name="fpass"></td></tr>
           <tr> <td><label for="fgender">Gender*</label></td>
            <td><input type="radio" name="fgender" value="male">Male
                        <input type="radio" name="fgender" value="female">Female </td>
           <td> <label for="fage">Age*: </label></td>
              <td> <input type="number" name="fage"></td></tr>
                       <tr> <td><label for="fdep">Department*</label></td>
                        <td><input type="radio" name="fdep" value="CS">CS
                        <input type="radio" name="fdep" value="IS">IS
                        <input type="radio" name="fdep" value="CN">CN </td>
            <td><label for="fmail">E-Mail*: </label></td>
            <td><input type="email" name="fmail" id="fmail"></td></tr>
            <tr><td><input type="submit" name="submit" id="submit-button" value="Signup">
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