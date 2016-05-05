<?php
   include('connect-db.php');
   session_start();
   
   $user_check = $_SESSION['login_admin'];
   
   $ses_sql = mysqli_query($con,"select UserName from admin where ID = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['UserName'];
   
   if(!isset($_SESSION['login_admin'])){
      header("location:loginad.php");
   }
?>