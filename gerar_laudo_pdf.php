<?php
	require_once("fpdf/fpdf.php");
	
	$inputID = $_POST['inputID'];
	$inputNome = $_POST['inputNome'];
	$inputEmail = $_POST['inputEmail'];
	$pdf= new FPDF("P","pt","A4");
	 
	$pdf->AddPage();
	$pdf->SetFont('arial','B',18);
	$pdf->Cell(0,5,"Laudo",0,1,'C');
	$pdf->Cell(0,5,"","B",1,'C');
	$pdf->Ln(8);
	 
	// Insere nome
	$pdf->SetFont('arial','B',12);
	$pdf->Cell(70,20,"Nome:",0,0,'L');
	$pdf->setFont('arial','',12);
	$pdf->Cell(0,20,$inputNome,0,1,'L');
	
	// Insere ID
	$pdf->SetFont('arial','B',12);
	$pdf->Cell(70,20,"ID:",0,0,'L');
	$pdf->setFont('arial','',12);
	$pdf->Cell(0,20,$inputID,0,1,'L');
	 
	// Insere email
	$pdf->SetFont('arial','B',12);
	$pdf->Cell(70,20,"E-mail:",0,0,'L');
	$pdf->setFont('arial','',12);
	$pdf->Cell(70,20,$inputEmail,0,1,'L');
	 
	$pdf->Output("arquivo.pdf","I");
?>