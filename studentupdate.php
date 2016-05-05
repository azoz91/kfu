<?php
$title='Student Update';
include 'header.php';
?>
			<div class="body">
				<div>
									<h2>Update student information</h2>
                    <br>
                    <br>
				<form id="supdate" name="supdate"/>
                
                   
                        <table>
            <tr>
                <td><label for="sname">Name:    </label>
                <input type="text" name="sname" readonly></td></tr>
           <tr>
            <td><label for="spass">Password: </label>
            <input type="password" name="spass"></td></tr>
           <tr> <td><label for="sgender">Gender</label>
            <input type="radio" name="sgender" value="male">Male
                        <input type="radio" name="sgender" value="female">Female </td>
           <td> <label for="sage">Age: </label>
               <input type="number" name="sage"></td></tr>
            <td><label for="smail">E-Mail: </label>
            <input type="email" name="smail"></td></tr>
                            <tr><td><input type="submit" name="submit" value="Update">
           <input type="reset" name="reset"></td></tr>
                    
                    </table>
                    
                    </form>
					
					
				</div>
			</div>
		</div>
	</div>
</body>
</html>