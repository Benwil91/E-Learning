<?php 
include ("start.html"); ?>

<form id="innloggingSkjema" name="innloggingSkjema" method="post" action="innlogging-sjekk.php"><br>
Denne siden er forbeholdt registrerte brukere, så om du ikke har fått tilsendt konto informasjon av en administrator, ta kontakt med ditt brukersted.<br> Det vil ikke bli utstedt innloggingsinformasjon via denne portalen. <br>
<br>
<input name="brukernavn" type="text" placeholder="Brukernavn" id="brukernavn"> 
<br />
<input name="passord" type="password" placeholder="Passord" id="passord"  >  <br />
<input type="submit" name="logginnKnapp" value="Logg inn">
<input type="reset" name="nullstill" id="nullstill" value="Nullstill"> <br />
</form>

<?php
include("slutt.html");?>