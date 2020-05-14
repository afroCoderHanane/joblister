<?php

session_start();
// destroy the session
session_destroy();
echo"<script> 
alert('Logging out!');
window.location.href='login.php';
</script>";
?>