<?php
// подключаем библиотеку
require_once('vendor/fpdf/fpdf.php');
// создаем PDF документ('портретная', 'миллиметры', 'формат A4')
$pdf = new FPDF( 'P', 'mm', 'A4' );
// устанавливаем заголовок документа
$pdf->SetTitle("Dokument - pdf");
// создаем страницу
$pdf->AddPage('P');
$pdf->SetDisplayMode(real,'default');
// устанавливаем размер шрифта
$pdf->SetFontSize(14);
// устанавливаем шрифт Helvetica жирный
$pdf->SetFont( 'Helvetica', 'B', 14);
// добавляем текст
$text = 'Heder';
$pdf->Write(0, $text);
// устанавливаем цвет шрифта
$pdf->SetTextColor(120, 255, 110); // зеленый
$text = 'Green Text in Center';
// Вводим текст в ячейку
$pdf->Cell( 0, 15, $text, 0, 0, 'C' );
// устанавливаем шрифт Helvetica обычный
$pdf->SetFont( 'Helvetica', '', 14);
// устанавливаем цвет шрифта
$pdf->SetTextColor(0, 0, 0); 
// пропускаем 16 мм
$pdf->Ln( 16 );
$pdf->setFillColor(58, 226, 206); // Заливка голубой
$pdf->SetTextColor(255, 255, 255);  // текст белый
$pdf->Cell( 46, 12, " PRODUCT", 0, 0, 'L', true ); // trye - заливка
$pdf->Ln( 16 );
// выводим текст
$pdf->SetTextColor(0, 0, 0);  // вернем черный цвет текста
$pdf->Write(0, 'Lorem ipsum');
// цвет для рамки и линий
$pdf->SetDrawColor( 220, 20, 60); // красный
$pdf->Line( 10, 50, 200, 50 );
//устанавливаем позитцию ( х, у )
$pdf->SetXY(150, 60);
$pdf->Write(0, 'Hallo'); // выводим текст
// выводим прямоугольник (левый верхний угол х и у, правый нижний угол х и у)
$pdf->Rect(20, 60, 90, 30);
// добавляем на страницу изображение 
$pdf->Image( 'images/1.jpg', 50, 100, 50 ); // (фото, х, у, ширина)
// опускаемся 160
$pdf->Ln( 95 );
// добавляем текст по центру
$txt = 'Düsseldorf';
$pdf->Cell( 0, 15, $txt.'-1', 0, 0, 'C', 0, 'www.link.ru' ); // c сылкой
$pdf->Ln( 16 );
$pdf->Cell( 0, 15, $txt.'-2', 0, 0, 'C', true, 'www.link.ru' ); // с заливкой и c сылкой
// выводим документа в браузере
$pdf->Output( "report.pdf", "I" ); //
?>