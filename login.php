<?php
$title='Login';
include 'header.php';
include 'connect-db.php';
 session_start();
 $error="";
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($con,$_POST['username']);
      $mypassword = mysqli_real_escape_string($con,$_POST['password']); 
      
      $sql = "SELECT ID FROM faculty WHERE UserName = '$myusername' and Password = '$mypassword' and status='active'";
      $result = mysqli_query($con,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         $_SESSION['login_user'] = $myusername;
         
         header("location: faculty.php");
      }else {
         $error = "Your username or Password is invalid or Not activated";
		 
      }
   }
?>
			<div class="body">
				<div>
					<h2>Log in</h2>
                    <br>
                    <br>
                    <div style = "font-size:11px; color:#cc0000;"><?php echo $error; ?></div>
                    <table id="tl">
                   <form id="login" name="login" method="post" action="" >
	 <tr><td colspan="2"><label for="username">User Name: </label></td>
           <td> <input type="text" name="username" required></td></tr>
           <tr><td colspan="2"> <label for="password">Password:  </label></td> 
            <td><input type="password" name="password" required></td></tr>
                      
             <tr><td colspan="2"><input type="submit" name="submit" value="login">
           <input type="reset" name="reset"></td></tr>
                       </table>
                    </form>
                 
				</div>
			</div>
		</div>
	</div>
</body>
</html>