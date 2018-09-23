<?php

if(isset($_GET['problema'])&&isset($_GET['c1'])&&isset($_GET['c2'])&&isset($_GET['c3'])&&isset($_GET['c4'])
    &&isset($_GET['c5'])&&isset($_GET['c6'])){

      $problema=$_GET['problema'];
      $c1=$_GET['c1'];
      $c2=$_GET['c2'];
      $c3=$_GET['c3'];
      $c4=$_GET['c4'];
      $c5=$_GET['c5'];
      $c6=$_GET['c6'];

      require_once('fpdf/rotation.php');

      $pdf = new PDF_Rotate();
      $pdf->AddPage();

      $pdf->SetFillColor(211,185,197);
      $pdf->SetFont('Arial','B',14);
      $pdf->Cell(0,10,"DIAGRAMA DE ISHIKAWA", 0, 0, 'C', True);
      $pdf->SetFont('Arial','B',8);
      $pdf->RotatedImage('images/arrow.jpg',165,105,10,10,270);
      $pdf->Image('images/fish.png',19,50, 125, 120, 'png' );
      $pdf->SetFillColor(0,0,0);

      $pdf->SetFont('Arial','',9);
      $pdf->SetXY(165,103);
      $imprProb = iconv('UTF-8', 'windows-1252', "$problema");
      $pdf->MultiCell(30,10,$imprProb,1,'C',0);

      $pdf->SetXY(112,57);
      $pdf->Rotate(-50);
      $imprc1 = iconv('UTF-8', 'windows-1252', "$c1");
      $pdf->Cell(40,10,"$imprc1", 0, 0, 'C');
      $pdf->Rotate(0);

      $pdf->SetXY(82,57);
      $pdf->Rotate(-50);
      $imprc2 = iconv('UTF-8', 'windows-1252', "$c2");
      $pdf->Cell(40,10,"$imprc2", 0, 0, 'C');
      $pdf->Rotate(0);

      $pdf->SetXY(52,57);
      $pdf->Rotate(-50);
      $imprc3 = iconv('UTF-8', 'windows-1252', "$c3");
      $pdf->Cell(40,10,"$imprc3", 0, 0, 'C');
      $pdf->Rotate(0);

      $pdf->SetXY(23,170);
      $pdf->Rotate(50);
      $imprc4 = iconv('UTF-8', 'windows-1252', "$c4");
      $pdf->Cell(40,10,"$imprc4", 0, 0, 'C');
      $pdf->Rotate(0);

      $pdf->SetXY(53,170);
      $pdf->Rotate(50);
      $imprc5 = iconv('UTF-8', 'windows-1252', "$c5");
      $pdf->Cell(40,10,"$imprc5", 0, 0, 'C');
      $pdf->Rotate(0);


      $pdf->SetXY(83,170);
      $pdf->Rotate(50);
      $imprc6 = iconv('UTF-8', 'windows-1252', "$c6");
      $pdf->Cell(40,10,"$imprc6", 0, 0, 'C');
      $pdf->Rotate(0);

      $pdf->SetLineWidth(0.5);
      $pdf->Line(20,110,165,110);

      $pdf->Line(145,110,94,50);
      $pdf->Line(115,110,64,50);
      $pdf->Line(85,110,34,50);

      $pdf->Line(145,110,95,170);
      $pdf->Line(115,110,65,170);
      $pdf->Line(85,110,35,170);

      $pdf->Output();


    }
?>
