<?php
session_start();
$_SESSION['innlogget'] = 0;
$_SESSION['navn'] = "";
session_destroy();  /* sesjonen avsluttes */
header("Location: index.php");

?>