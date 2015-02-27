<?php  


$host="localhost";

$user="094232";

$password="Phr0z3n-";

$database="094232";  /* verdier satt for host, user, password og database for tilkobling til databaseserver */


mysql_pconnect($host,$user,$password) or die ("ikke kontakt med database-server");  /* tilkobling til database-serveren utført */

mysql_selectdb($database) or die ("ikke kontakt med database");  /* valg av database foretatt */

?>