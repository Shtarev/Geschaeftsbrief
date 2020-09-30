<?php
/**
* POST data
*/

if(isset($_POST['Logo'])){
	$brief['Logo'] = 1;
}
else{
	$brief['Logo'] = 0;
}

if(isset($_POST['NameE'])){
	$brief['NameE'] = $_POST['NameE'];
}
if(isset($_POST['StrasseE'])){
	$brief['StrasseE'] = $_POST['StrasseE'];
}
if(isset($_POST['HausnummerE'])){
	$brief['HausnummerE'] = $_POST['HausnummerE'];
}
if(isset($_POST['OrtE'])){
	$brief['OrtE'] = $_POST['OrtE'];
}
if(isset($_POST['PostleitzahlE'])){
	$brief['PostleitzahlE'] = $_POST['PostleitzahlE'];
}
if(isset($_POST['LandE'])){
	$brief['LandE'] = $_POST['LandE'];
}

if(isset($_POST['Name'])){
	$brief['Name'] = $_POST['Name'];
	// A. Shtarev для обратного адреса
	$brief['NameShort'] = $brief['Name'][0].'.'.mb_strstr($brief['Name'], ' ');
}
if(isset($_POST['Strasse'])){
	$brief['Strasse'] = $_POST['Strasse'];
}
if(isset($_POST['Hausnummer'])){
	$brief['Hausnummer'] = $_POST['Hausnummer'];
}
if(isset($_POST['Ort'])){
	$brief['Ort'] = $_POST['Ort'];
}
if(isset($_POST['Postleitzahl'])){
	$brief['Postleitzahl'] = $_POST['Postleitzahl'];
}
if(isset($_POST['Land'])){
	$brief['Land'] = $_POST['Land'];
}

/* Персональные данные */
if(isset($_POST['Telefon'])){
	$brief['Telefon'] = $_POST['Telefon'];
}
if(isset($_POST['Fax'])){
	$brief['Fax'] = $_POST['Fax'];
}
if(isset($_POST['EMail'])){
	$brief['EMail'] = $_POST['EMail'];
}
if(isset($_POST['Internet'])){
	$brief['Internet'] = $_POST['Internet'];
}
if(isset($_POST['Skype'])){
	$brief['Skype'] = $_POST['Skype'];
}
if(isset($_POST['RegisterNr'])){
	$brief['RegisterNr'] = $_POST['RegisterNr'];
}
if(isset($_POST['Amtsgericht'])){
	$brief['Amtsgericht'] = $_POST['Amtsgericht'];
}
if(isset($_POST['Finanzamt'])){
	$brief['Finanzamt'] = $_POST['Finanzamt'];
}
if(isset($_POST['Steuernummer'])){
	$brief['Steuernummer'] = $_POST['Steuernummer'];
}
if(isset($_POST['IBAN'])){
	$brief['IBAN'] = $_POST['IBAN'];
}
if(isset($_POST['BIC'])){
	$brief['BIC'] = $_POST['BIC'];
}
if(isset($_POST['Kreditinstituts'])){
	$brief['Kreditinstituts'] = $_POST['Kreditinstituts'];
}
if(isset($_POST['Kontoinhaber'])){
	$brief['Kontoinhaber'] = $_POST['Kontoinhaber'];
}

/* Содержимое письма */
if(isset($_POST['BriefID'])){
	$brief['BriefID'] = $_POST['BriefID'];
}
if(isset($_POST['Datum'])){
	$brief['Datum'] = $_POST['Datum'];
}
if(isset($_POST['Brieftitle'])){
	$brief['Brieftitle'] = $_POST['Brieftitle'];
}
if(isset($_POST['Hallo'])){
	$brief['Hallo'] = $_POST['Hallo'];
}
if(isset($_POST['Brieftext'])){
	$brief['Brieftext'] = $_POST['Brieftext'];
}
if(isset($_POST['Abschied'])){
	$brief['Abschied'] = $_POST['Abschied'];
}
if(isset($_POST['Footer'])){
	$brief['Footer'] = 1;
}
else{
	$brief['Footer'] = 0;
}
?>