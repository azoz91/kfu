<?php
include 'connect-db.php';

$query = "SELECT * FROM faculty WHERE ID='".$_GET['fid']."'";

 $result = mysqli_query($con,$query);
  
if(mysqli_num_rows($result)>=1)
    
  {
      echo "false";
  }

  else
  {
     echo "true"; 
  }

?>