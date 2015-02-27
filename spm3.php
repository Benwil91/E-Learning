<?php     
include("start.html");?>
<script type="text/javascript">
function validate(){
var radio1 = document.getElementById('2').checked;
var radio2 = document.getElementById('3').checked;
var radio3 = document.getElementById('know').checked;
var radio4 = document.getElementById('1').checked;

if((radio2==""))


{
	alert("Feil svar. Prøv igjen!");
	return false;
	}
	else
	alert("Riktig svar. Gå til neste spørsmål!");
	return true;
	}

</script>


Which Security Levels require the highest security alert?

<form name="spm3" onSubmit="return validate()" action="spm4.php">

  <p>
    <input type="radio" name="spm" id="know">
    I don`t know
  <br>
  <input type="radio" name="spm" id="1">Level 1
  <br>
  <input type="radio" name="spm" id="2">Level 2
  <br>
  <input type="radio" name="spm" id="3">Level 3 <br>
  
  <br>
    <input type="submit" value="Sjekk svar" />
  </p>
</form>


<?php
include("slutt.html");?>