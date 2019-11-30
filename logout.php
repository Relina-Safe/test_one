<?php 
 // logout
 session_unset(); // clear all session varriables
 session_destroy(); // destroy session from cache
 header("Location: login.php");
?>