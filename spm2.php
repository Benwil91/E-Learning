<?php     
include("start.html");?>
<script type="text/javascript">
function validate(){
var radio1 = document.getElementById('plan').checked;
var radio2 = document.getElementById('record').checked;
var radio3 = document.getElementById('vessel').checked;
var radio4 = document.getElementById('security').checked;

if((radio3==""))


{
	alert("Feil svar. Prøv igjen!");
	return false;
	}
	else
	alert("Riktig svar. Gå til neste spørsmål!");
	return true;
	}

</script>


What is a Continuous Synopsis Record?

<form name="spm2" onSubmit="return validate()" action="spm3.php">

  <p>
    <input type="radio" name="spm" id="record">
    A record of all security incidents
  <br>
  <input type="radio" name="spm" id="security">A plan including all security measures onboard
  <br>
  <input type="radio" name="spm" id="vessel">A record of the vessels history
  <br>
  <input type="radio" name="spm" id="plan">A plan for continuous maintenance of security equipment <br>
  
  <br>
    <input type="submit" value="Sjekk svar" />
  </p>
</form>


<?php
include("slutt.html");?>