<?php     
include("start.html");?>
<script type="text/javascript">
function validate(){
var radio1 = document.getElementById('flag').checked;
var radio2 = document.getElementById('insurance').checked;
var radio3 = document.getElementById('port').checked;
var radio4 = document.getElementById('us').checked;

if((radio1==""))


{
	alert("Feil svar. Prøv igjen!");
	return false;
	}
	else
	alert("Riktig svar. Gå til neste spørsmål!");
	return true;
	}

</script>


Who is responsible for issuing an ISPS certificate?

<form name="spm1" onSubmit="return validate()" action="spm2.php">

  <p>
    <input type="radio" name="spm" id="port">
    The Port State
  <br>
  <input type="radio" name="spm" id="insurance">The Insurance Company
  <br>
  <input type="radio" name="spm" id="us">US Cost Guard
  <br>
  <input type="radio" name="spm" id="flag">The Flag State <br>
  
  <br>
    <input type="submit" value="Sjekk svar" />
  </p>
</form>


<?php
include("slutt.html");?>