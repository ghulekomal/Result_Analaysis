<?php
session_start();

unset($_SESSION['loginRES']);
unset($_SESSION['loginRESuname']);
unset($_SESSION['loginRESdept']);
 
session_destroy();

header("Location:index.php");
?>
