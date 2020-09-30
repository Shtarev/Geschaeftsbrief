<?php
/**
* Create the PDF-document
*/

$pdf = new FPDF( 'P', 'mm', 'A4' );
$pdf->SetTitle($brief['BriefID']);
$pdf->AddPage();
$pdf->SetFont( 'Arial', '', 11);

/* Линии для сгиба */
$pdf->Line( 0, 92, 5, 92 );
$pdf->Line( 0, 97, 5, 97 );
$pdf->Line( 0, 202, 5, 202 );

/* Лого если чек отмечен */
$LogoMacher = new LogoMacher;
if($brief['Logo']){
	$LogoMacher->Logo();
}
else{
	$LogoMacher->NoLogo();
}
$pdf->Image( 'images/logo.png', 140, 8, 60 );

/* Адрес для окошка конверта */
$pdf->SetFont( 'Arial', 'U', 8);
$pdf->SetXY(30, 45);
$pdf->Write(0, $brief['NameShort'].' – '.$brief['Strasse'].' '.$brief['Hausnummer'].' – '.$brief['Postleitzahl'].' '.$brief['Ort']);
$pdf->SetFont( 'Arial', '', 11);
$pdf->Ln( 7 );
$pdf->SetX(30);
$pdf->Write(0, $brief['NameE']);
$pdf->Ln( 4 );
$pdf->SetX(30);
$pdf->Write(0, $brief['StrasseE'].' '.$brief['HausnummerE']);
$pdf->Ln( 4 );
$pdf->SetX(30);
$pdf->Write(0, $brief['PostleitzahlE'].' '.$brief['OrtE']);
$pdf->Ln( 4 );
$pdf->SetX(30);
$pdf->Write(0, $brief['LandE']);

/* Данные в верхнем правом углу */
$pdf->SetXY(140, 36);
$pdf->Write(0, $brief['Name']);
$pdf->Ln( 4 );
$pdf->SetX(140);
$pdf->Write(0, $brief['Strasse'].' '.$brief['Hausnummer']);
$pdf->Ln( 4 );
$pdf->SetX(140);
$pdf->Write(0, $brief['Postleitzahl'].' '.$brief['Ort']);

$pdf->Ln( 7 );
$pdf->SetX(140);
$pdf->Write(0, 'BriefID: '.$brief['BriefID']);
$pdf->Ln( 4 );
$pdf->SetX(140);
$pdf->Write(0, 'Tel.: '.$brief['Telefon']);
$pdf->Ln( 4 );
$pdf->SetX(140);
$pdf->Write(0, 'Fax: '.$brief['Fax']);
$pdf->Ln( 4 );
$pdf->SetX(140);
$pdf->Write(0, 'Skype: '.$brief['Skype']);
$pdf->Ln( 4 );
$pdf->SetX(140);
$pdf->Write(0, 'E-Mail: '.$brief['EMail']);
$pdf->Ln( 4 );
$pdf->SetX(140);
$pdf->Write(0, 'Internet: '.$brief['Internet']);
$pdf->Ln( 4 );
$pdf->SetX(140);
$pdf->Write(0, 'Datum: '.$brief['Datum']);

/* Заголовок письма */
$pdf->SetFont( 'Arial', 'B', 11);
$pdf->SetXY(30, 110);
$pdf->Write(0, $brief['Brieftitle']);
$pdf->SetFont( 'Arial', '', 11);

/* Приветствие */
$pdf->Ln( 8 );
$pdf->SetX(30);
$pdf->Write(0, $brief['Hallo']);

/* Текст письма */
$txt = $brief['Brieftext'];
$pdf->Ln( 8 );
$pdf->SetX(30);
$pdf->MultiCell(0, 4, $txt);

/* Прощание */
$pdf->Ln( 8 );
$pdf->SetX(30);
$pdf->MultiCell(0, 4, $brief['Abschied']);

/* Данные в самом низу пмсьма, если чек отмечен */
if($brief['Footer']){
	/* Линия футера */
	$pdf->Line( 5, 265, 205, 265 );
	/* Содержимое футера */
	$pdf->SetFont( 'Arial', '', 8);
	$pdf->SetXY(5, 267);
	$pdf->Cell( 50, 0, $brief['Name'], 0, 0 );
	$pdf->Cell( 50, 0, 'Tel.: '.$brief['Telefon'], 0, 0 );
	$pdf->Cell( 50, 0, $brief['Kreditinstituts'], 0, 0 );
	$pdf->Cell( 50, 0, 'Z.A.: '.$brief['Amtsgericht'], 0, 0 );

	$pdf->SetXY(5, 270);
	$pdf->Cell( 50, 0, $brief['Strasse'].' '.$brief['Hausnummer'], 0, 0 );
	$pdf->Cell( 50, 0, 'Fax: '.$brief['Fax'], 0, 0 );
	$pdf->Cell( 50, 0, 'KTO Inh.: '.$brief['Kontoinhaber'], 0, 0 );
	$pdf->Cell( 50, 0, 'Finanzamt: '.$brief['Finanzamt'], 0, 0 );

	$pdf->SetXY(5, 273);
	$pdf->Cell( 50, 0, $brief['Postleitzahl'].' '.$brief['Ort'], 0, 0 );
	$pdf->Cell( 50, 0, 'E-Mail: '.$brief['EMail'], 0, 0 );
	$pdf->Cell( 50, 0, 'BIC: '.$brief['BIC'], 0, 0 );
	$pdf->Cell( 50, 0, 'Steuer-Nr: '.$brief['Steuernummer'], 0, 0 );

	$pdf->SetXY(5, 276);
	$pdf->Cell( 50, 0, $brief['Land'], 0, 0 );
	$pdf->Cell( 50, 0, 'WEB: '.$brief['Internet'], 0, 0 );
	$pdf->Cell( 50, 0, 'IBAN: '.$brief['IBAN'], 0, 0 );
	$pdf->Cell( 50, 0, 'Register-Nr.: '.$brief['RegisterNr'], 0, 0 );
}

$DataBank = new DataBank($brief['BriefID']);
/* Вывод документа */
$pdf->Output( $DataBank->file, 'F' );
$pdf->Output( $brief['BriefID'].'.pdf', 'I' );
$LogoMacher->LogoKill();//удаляем логотип

?>