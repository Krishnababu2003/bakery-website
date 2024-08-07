<?php
session_start();
session_destroy();
header("Location:adminmain.php");
?>