<?php 
// Start the session to access and destroy it 
session_start();
 // Destroy all session data 
 session_destroy(); 
 // Redirect back to the homepage 
 header("Location: index.php");
  exit; 
