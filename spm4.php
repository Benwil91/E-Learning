<?php     
include("start.html");?>
<script type="text/javascript">
function validate(){
var radio1 = document.getElementById('stcw').checked;
var radio2 = document.getElementById('marpol').checked;
var radio3 = document.getElementById('anti').checked;
var radio4 = document.getElementById('solas').checked;

if((radio4==""))


{
	alert("Feil svar. Prøv igjen!");
	return false;
	}
	else
	alert("Riktig svar. Gå til neste spørsmål!");
	return true;
	}

</script>


Which of these conventions is The International Ship and Port Facility Security (ISPS) Code a part of?

<form name="spm4" onSubmit="return validate()" action="gratulerer.php">

  <p>
    <input type="radio" name="spm" id="stcw">
    STCW-95
  <br>
  <input type="radio" name="spm" id="anti">The Anti Terrorist International Agreement
  <br>
  <input type="radio" name="spm" id="solas">SOLAS
  <br>
  <input type="radio" name="spm" id="marpol">MARPOL<br>
  
  <br>
    <input type="submit" value="Sjekk svar" />
  </p>
</form>


<?php
include("slutt.html");?>