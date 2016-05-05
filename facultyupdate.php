<?php
$title='Faculty Update';
include 'header.php';
?>
			<div class="body">
				<div>
					<h2>Update Faculty information</h2>
                    <br>
                    <br>
					<form id="fregister" name="fregister" >
                        <table>
            <tr>
                <td><label for="fname">Name:    </label>
                <input type="text" name="fname"></td></tr>
           <tr>
            <td><label for="fpass">Password: </label>
            <input type="password" name="fpass"></td></tr>
           <tr> <td><label for="fgender">Gender</label>
            <input type="radio" name="fgender" value="male">Male
                        <input type="radio" name="fgender" value="female">Female </td>
           <td> <label for="fage">Age: </label>
               <input type="number" name="age"></td></tr>
                       <tr> <td><label for="fdep">Department</label>
            <input type="radio" name="fdep" value="CS">CS
                        <input type="radio" name="fgender" value="IS">IS
                        <input type="radio" name="fdep" value="CN">CN </td>
            <td><label for="fmail">E-Mail: </label>
            <input type="email" name="fmail"></td></tr>
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