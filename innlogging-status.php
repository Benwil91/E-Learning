<?php
session_start();
?>

<html>
<head>
</head>

<?php


if ( ! isset($_SESSION['innlogget'])  )
  {

	header ("Location: course.php");

  }
else  /* brukernavn og passord er ikke korrekt */
  {
    echo("Du er ikke innlogget <br />");

  }

?>