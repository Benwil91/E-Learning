<?php
session_start();
?>

<html>
<head>
<meta http-equiv="refresh" content="3; URL=index.php">
</head>

<?php  /* innlogging-sjekk  */
/*
/*  Programmet sjekker om en innlogging er vellykket eller ikke
*/

include("sjekk-brukernavn-og-passord.php");
include("start.html");

$brukernavn=$_POST ["brukernavn"];
$passord=$_POST["passord"];  /* variable gitt verdier fra feltene i HTML-skjemaet */

if (sjekkBrukernavnOgPassord($brukernavn,$passord))  /* brukernavn og passord er korrekt */
  {

	$_SESSION['navn'] =   $brukernavn;
	$_SESSION['innlogget'] = 1;


    echo("Innlogging vellykket <br />");
    echo "Du er logget inn som: ". $_SESSION['navn'] . "<br>";
	echo("Du vil bli sendt videre om fem sekunder");
	header ("Location: course.php");

  }
else  /* brukernavn og passord er ikke korrekt */
  {
    echo("Feil brukernavn/passord <br />");
	print("Du vil bli sendt videre om fem sekunder");
  }

include ("slutt.html");
?>

</html>