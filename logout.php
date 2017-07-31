<?php 
  //find session
   session_start();

   // unset session variables
   $_SESSION == array();

   //destroy cookies
   if(isset($_COOKIE[session_name()])){
           setcookie(session_name(), '', time()-4200, '/');
   }

   //DESTROY THE SESSION
   session_destroy();

   //redirect
   header("location: admin_login.php");
?>