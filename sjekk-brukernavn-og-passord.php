<?php  /* sjekk-brukernavn-og-passord */
/*
/*  Programmet inneholder en funksjon for å sjekker brukernavn og passord
*/

function sjekkBrukernavnOgPassord($brukernavn,$passord)
{
/*
/*  Hensikt
/*    Funksjonen sjekker om brukernavn og passord er korrekt
/*  Parametre 
/*    $brukernavn = brukernavnet som skal sjekkes
/*    $passord = passordet som skal sjekkes
/*  Funksjonsverdi/Returverdi
/*    Funksjonen returnerer true hvis brukernavn og passord er korrekt
/*    Funksjonen returnerer false ellers
*/

  include("db-tilkobling.php");  /* tilkobling til database-server og valg av database utført */

  $lovligBruker=1;

  $sqlSetning="SELECT * FROM bruker WHERE brukernavn='$brukernavn'";
  $sqlResultat=mysql_query($sqlSetning);  /* SQL-setning sendt til database-serveren */

  if (!$sqlResultat)  /* SQL-setningen ble ikke utført med vellykket resultat */
    {
      $lovligBruker=0;
    }
  else
   {
      $rad=mysql_fetch_array($sqlResultat);  /* ny rad hentet fra spørringsresultatet */
      $lagretBrukernavn=$rad[0];
      $lagretPassord=$rad[1];  /* brukernavn og passord hentet fra databasen */
	  
      $passord=md5($passord);  /* innparamter-passord kryptert med md5-funksjonen */

      if($brukernavn==$lagretBrukernavn && $passord==$lagretPassord)
        {
          $lovligBruker=1;
        }
      else
        {
          $lovligBruker=0;
        }
    }

  if ($lovligBruker)  /* ingen feil funnet */
    {
      return true;
    }
  else
    {
      return false;
    }	

}  /*  Slutt på funksjonen sjekkBrukernavnOgPassord($brukernavn,$passord)  */

?>
