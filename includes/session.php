<?php 
   session_start();

   function logged_in(){
   		return isset($_SESSION['uname']);
   }

   function confirm_logged_in(){
   if(!logged_in()){
   	header("location: admin_login.php");
   }
   }

?>