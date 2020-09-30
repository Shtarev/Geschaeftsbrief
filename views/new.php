<h3 class="mb-3 mt-3 text-center">Neues Schreiben</h3><br>
<form method="post" action="">
	<h3 class="green">Empfänger</h3>
	<h4>Postanschrift</h4>
	<label for="NameE">Name Vorname (oder Firmenname):<br><input type="text" id="NameE" name="NameE" value="" placeholder=""></label><br>
	<label for="StrasseE">Straße:<br><input type="text" id="StrasseE" name="StrasseE" value="" placeholder=""></label><br>
	<label for="HausnummerE">Hausnummer:<br><input type="text" id="HausnummerE" name="HausnummerE" value="" placeholder=""></label><br>
	<label for="OrtE">Ort:<br><input type="text" id="OrtE" name="OrtE" value="" placeholder=""></label><br>
	<label for="PostleitzahlE">Postleitzahl:<br><input type="number" id="PostleitzahlE" name="PostleitzahlE" value="" placeholder=""></label><br>
	<label for="LandE">Land:<br><input type="text" id="LandE" name="LandE" value="" placeholder=""></label><br>
	<h3 class="green">Absender</h3>
	<h4>Postanschrift</h4>
	<label for="Name">Name Vorname:<br><input type="text" id="Name" name="Name" value="" placeholder=""></label><br>
	<label for="Strasse">Straße:<br><input type="text" id="Strasse" name="Strasse" value="" placeholder=""></label><br>
	<label for="Hausnummer">Hausnummer:<br><input type="text" id="Hausnummer" name="Hausnummer" value="" placeholder=""></label><br>
	<label for="Ort">Ort:<br><input type="text" id="Ort" name="Ort" value="" placeholder=""></label><br>
	<label for="Postleitzahl">Postleitzahl:<br><input type="number" id="Postleitzahl" name="Postleitzahl" value="" placeholder=""></label><br>
	<label for="Land">Land:<br><input type="text" id="Land" name="Land" value="" placeholder=""></label><br>
	<h4>Personaldaten</h4>
	<label for="Telefon">Telefon:<br><input type="tel" id="Telefon" name="Telefon" value="" placeholder=""></label><br>
	<label for="Fax">Fax:<br><input type="tel" id="Fax" name="Fax" value="" placeholder=""></label><br>
	<label for="EMail">E-Mail:<br><input type="email" id="EMail" name="EMail" value="" placeholder=""></label><br>
	<label for="Internet">Internet:<br><input type="text" id="Internet" name="Internet" value="" placeholder=""></label><br>
	<label for="Skype">Skype:<br><input type="text" id="Skype" name="Skype" value="" placeholder=""></label><br>
	<label for="RegisterNr">Register-Nr.:<br><input type="text" id="RegisterNr" name="RegisterNr" value="" placeholder=""></label><br>
	<label for="Amtsgericht">Zuständiges Amtsgericht:<br><input type="text" id="Amtsgericht" name="Amtsgericht" value="" placeholder=""></label><br>
	<label for="Finanzamt">Finanzamt:<br><input type="text" id="Finanzamt" name="Finanzamt" value="" placeholder=""></label><br>
	<label for="Steuernummer">Steuernummer:<br><input type="text" id="Steuernummer" name="Steuernummer" value="" placeholder=""></label><br>
	<label for="IBAN">IBAN:<br><input type="text" id="IBAN" name="IBAN" value="" placeholder=""></label><br>
	<label for="BIC">BIC:<br><input type="text" id="BIC" name="BIC" value="" placeholder=""></label><br>
	<label for="Kreditinstituts">Kreditinstituts:<br><input type="text" id="Kreditinstituts" name="Kreditinstituts" value="" placeholder=""></label><br>
	<label for="Kontoinhaber">Kontoinhaber:<br><input type="text" id="Kontoinhaber" name="Kontoinhaber" value="" placeholder=""></label><br>
	<h4>Briefdaten</h4>
	<label for="BriefID">BriefID:<br><input type="text" id="BriefID" name="BriefID" value="<?=$BriefID?>" placeholder=""></label><br>
	<label for="Datum">Datum:<br><input type="text" id="Datum" name="Datum" value="<?=$Datum?>" placeholder=""></label><br>
	<label for="Brieftitle">Brieftitle:<br><input type="text" id="Brieftitle" name="Brieftitle" value="" placeholder=""></label><br>
	<label for="Hallo">Begrüßung:<br><input type="text" id="Hallo" name="Hallo" value="Sehr geehrte Damen und Herren," placeholder="Sehr geehrte Damen und Herren,"></label><br>
	<label for="Brieftext">Brieftext:<br><textarea class="brieftext" id="Brieftext" name="Brieftext"></textarea></label><br>
	<label for="Abschied">Abschied:<br><textarea class="abschied" id="Abschied" name="Abschied">Mit freundlichen Grüßen
Name des Absenders</textarea></label><br>
	<h4>Extras</h4>
	<label for="Logo">Logo:<input class="col mt-2 ml-1" type="checkbox" id="Logo" name="Logo" value="true"></label><br>
	<label for="Footer">Footer:<input class="col mt-2" type="checkbox" id="Footer" name="Footer" value="true"></label><br><br>
	<input class="btn btn-success" style="width: 200px" type="submit" id="NewBrief" name="NewBrief" value="Brief herstellen"><br><br><br>
</form>

<script>
document.getElementById('NewBrief').onclick = function(){
	var bgc = 'lightpink';
	var bgc0 = 'white';
	var inputArray = ['NameE','StrasseE','HausnummerE','OrtE','PostleitzahlE','Name','Strasse','Hausnummer','Ort','Postleitzahl'];
	inputArray.forEach(function(value){ document.getElementById(value).style.backgroundColor = bgc0; });
	if(!NameE.value){
		NameE.style.backgroundColor = bgc;
		alert('Feld Name Vorname (oder Firmenname) soll ausgefüllt werden');
		return false;
	}
	if(!StrasseE.value){
		StrasseE.style.backgroundColor = bgc;
		alert('Feld Straße soll ausgefüllt werden');
		return false;
	}
	if(!HausnummerE.value){
		HausnummerE.style.backgroundColor = bgc;
		alert('Feld Hausnummer soll ausgefüllt werden');
		return false;
	}
	if(!OrtE.value){
		OrtE.style.backgroundColor = bgc;
		alert('Feld Ort soll ausgefüllt werden');
		return false;
	}
	if(!PostleitzahlE.value){
		PostleitzahlE.style.backgroundColor = bgc;
		alert('Feld Postleitzahl soll ausgefüllt werden');
		return false;
	}
	if(!Name.value){
		Name.style.backgroundColor = bgc;
		alert('Feld Name Vorname soll ausgefüllt werden');
		return false;
	}
	if(!Strasse.value){
		Strasse.style.backgroundColor = bgc;
		alert('Feld Straße soll ausgefüllt werden');
		return false;
	}
	if(!Hausnummer.value){
		Hausnummer.style.backgroundColor = bgc;
		alert('Feld Hausnummer soll ausgefüllt werden');
		return false;
	}
	if(!Ort.value){
		Ort.style.backgroundColor = bgc;
		alert('Feld Ort soll ausgefüllt werden');
		return false;
	}
	if(!Postleitzahl.value){
		Postleitzahl.style.backgroundColor = bgc;
		alert('Feld Postleitzahl soll ausgefüllt werden');
		return false;
	}
}
</script>