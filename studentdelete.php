<?php
$title='Student Delete';
include 'header.php';
?>
			<div class="body">
				<div>
									<h2>Delete a student </h2>
                    <br> 
                    <br>
				<form id="supdate" name="supdate"/>
                
                    <label for="fid"> ID: </label>
                <input type="text" name="fid"> <input type="button" value="Search" /> 
                   <br>
                    <br>
                        <table>
           <tr><td><label for="fid">ID: </label>
                <input type="text" name="fid"></td>
                <td><label for="fname">Name:    </label>
                <input type="text" name="fname"></td></tr>
                            <tr><td><input type="submit" name="submit" value="Delete">
           <input type="reset" name="reset"></td></tr>
                    
                    </table>
                    
                    </form>
					
					
				</div>
			</div>
		</div>
	</div>
</body>
</html>