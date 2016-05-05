<?php
$title='Student Registration';
include 'header.php';
include 'connect-db.php';

if(isset($_POST['submit']))
{

    $id = $_POST['sid'];
    $name = $_POST['sname'];
    $suser = $_POST['suser'];
    $pass = $_POST['spass'];
     $gender = $_POST['sgender'];
	 $age = $_POST['sage'];
	 $email = $_POST['smail'];

    
            $query = "INSERT INTO student (ID,Name,UserName,Password,
            Gender, Age, Email) VALUES ('$id','$name','$suser','$pass','$gender','$age','$email')";
            
			
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

    header("Location: studentregister.php?status=$status");
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
                     </br>
                <?php if(isset($_GET['status']) && $_GET['status']==="done") { ?>   
    <p>You have been registered successfully and will activate your account shortly, Thank you</p>
    <br>
    <br>
    <p><a href="index.php">Home page</a></p>
</script>
    <?php } else {if(isset($_GET['status']) && $_GET['status']==="notdone") { ?>
    <p>Sorry something going wrong, try again </p> <?php echo $_GET['err']?>
    <?php } else { ?>
                    <br>
					<form id="sregister" name="sregister" method="post" action="studentregister.php" enctype="multipart/form-data">
                        <table>
            <tr><td><label for="sid">ID*: </label></td>
               <td><input type="text" name="sid" required></td>
                <td><label for="sname">Name*:    </label></td>
                <td><input type="text" name="sname" required></td></tr>
           <tr><td> <label for="suser">User Name*: </label></td>
            <td><input type="text" name="suser" required</td>
            <td><label for="spass">Password*: </label></td>
            <td><input type="password" name="spass" required></td></tr>
           <tr><td><label for="sgender">Gender*</label></td>
            <td><input type="radio" name="sgender" value="male">Male
                <input type="radio" name="sgender" value="female">Female </td>
           <td> <label for="sage">Age*: </label></td>
               <td><input type="number" name="sage" required></td></tr>
            <tr><td><label for="smail">E-Mail*: </label></td>
            <td><input type="email" name="smail" required></td></tr>
                            <tr><td><input type="submit" name="submit" value="Signup">
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