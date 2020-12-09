<?php

    $folderPath = "upload/";
  
    $image_parts = explode(";base64,", $_POST['signed']);
        
    $image_type_aux = explode("image/", $image_parts[0]);
      
    $image_type = $image_type_aux[1];
      
    $image_base64 = base64_decode($image_parts[1]);
      
    $file = $folderPath . 'assinatura' . '.'.$image_type;
      
    file_put_contents($file, $image_base64);

	$username = $_POST["username"];
	$sex = $_POST["sex"];
	$age = $_POST["idade"];
	$smoke= $_POST["smoke"];
	$QI = $_POST["Q1"];
	$QII = $_POST["Q2"];
	$QIII = $_POST["Q3"];
	$QIV = $_POST["Q4"];
	
	
	require('fpdf.php');
	require('makefont/makefont.php');

	//MakeFont('C:\\Windows\\Fonts\\comic.ttf','cp1252');

	$pdf = new FPDF();
	$pdf->AddPage();
	$pdf->SetFont('Arial','B',14);
	$pdf->Ln(30);
	$pdf->Cell(0,1,"Utilizador: $username" ,0,1);
	$pdf->Ln(30);
	$pdf->Cell(0,1,"Idade: $age" ,0,1);
	$pdf->Ln(30);
	$pdf->Cell(0,1,"Genero: $sex" ,0,1);
	$pdf->Ln(15);
	if($smoke=='N')
		{
		$var = "Não";
		$pdf->Cell(0,1,"Fuma? Nao" ,0,1); 			
		}
	else if($smoke=='S')
		{  $pdf->Cell(0,1,"Fuma? Sim" ,0,1); }
	else if($smoke=='O')
		{ $pdf->Cell(0,1,"Fuma? Sim, ocasionalmente!" ,0,1); }
	
	$pdf->Ln(30);
	$pdf->Cell(0,1,"Em media quantas vezes tem dores ou problemas dentarios durante 1 ano?" ,0,1);
	$pdf->Ln(15);
	
	
	//Questão I 1)
	if($QI == "1")
	{
		    $pdf->SetFont('Arial','U',13);
			$pdf->SetTextColor(0,255,0);
			$pdf->Cell(0,1,"Resposta: 1 ou menos vezes" ,0,1);
	}
	else if ($QI == "2")
	{
		    $pdf->SetFont('Arial','U',13);
			$pdf->SetTextColor(0,255,0);
			$pdf->Cell(0,1,"Resposta: 2 a 5 vezes" ,0,1);
	}
	else if ($QI == "3")
	{
		    $pdf->SetFont('Arial','U',13);
			$pdf->SetTextColor(0,255,0);
			$pdf->Cell(0,1,"Resposta: mais do que 5 vezes" ,0,1);
	}
	
	//Questão II
	$pdf->Ln(20);
	$pdf->SetFont('Arial','B',14);
	$pdf->SetTextColor(0,0,0);
	$pdf->Cell(0,1,"Em media quantas vezes por ano efetua um checkup / consulta dentaria?" ,0,1);
	$pdf->Ln(15);
	
	if($QII == "1")
	{
		    $pdf->SetFont('Arial','U',13);
			$pdf->SetTextColor(0,255,0);
			$pdf->Cell(0,1,"Resposta: 0 a 2 vezes" ,0,1);
	}
	else if ($QII == "2")
	{
		    $pdf->SetFont('Arial','U',13);
			$pdf->SetTextColor(0,255,0);
			$pdf->Cell(0,1,"Resposta: 2 a 4 vezes" ,0,1);
	}
	else if ($QII == "3")
	{
		    $pdf->SetFont('Arial','U',13);
			$pdf->SetTextColor(0,255,0);
			$pdf->Cell(0,1,"Resposta: mais do que 4 vezes" ,0,1);
	}
	
    //Questão II
	$pdf->Ln(20);
	$pdf->SetFont('Arial','B',14);
	$pdf->SetTextColor(0,0,0);
	$pdf->Cell(0,1,"Em media quantas vezes por ano efetua um checkup / consulta dentaria?" ,0,1);
	$pdf->Ln(15);
	
	if($QII == "1")
	{
		    $pdf->SetFont('Arial','U',13);
			$pdf->SetTextColor(0,255,0);
			$pdf->Cell(0,1,"Resposta: 0 a 2 vezes" ,0,1);
	}
	else if ($QII == "2")
	{
		    $pdf->SetFont('Arial','U',13);
			$pdf->SetTextColor(0,255,0);
			$pdf->Cell(0,1,"Resposta: 2 a 4 vezes" ,0,1);
	}
	else if ($QII == "3")
	{
		    $pdf->SetFont('Arial','U',13);
			$pdf->SetTextColor(0,255,0);
			$pdf->Cell(0,1,"Resposta: mais do que 4 vezes" ,0,1);
	}
	
	//Questão III
	$pdf->Ln(15);
	$pdf->SetFont('Arial','B',14);
	$pdf->SetTextColor(0,0,0);
	$pdf->Cell(0,1,"Com que frequencia lava os dentes?" ,0,1);
	$pdf->Ln(15);
	
	if($QIII == "1")
	{
		    $pdf->SetFont('Arial','U',13);
			$pdf->SetTextColor(0,255,0);
			$pdf->Cell(0,1,"Resposta: Diariamente 2 vezes ao dia" ,0,1);
	}
	else if ($QIII == "2")
	{
		    $pdf->SetFont('Arial','U',13);
			$pdf->SetTextColor(0,255,0);
			$pdf->Cell(0,1,"Resposta: Diariamente 3 vezes ao dia" ,0,1);
	}
	else if ($QIII == "3")
	{
		    $pdf->SetFont('Arial','U',13);
			$pdf->SetTextColor(0,255,0);
			$pdf->Cell(0,1,"Resposta: Diariamente 1 vez por dia (noite ou manha ou almoco)" ,0,1);
	}
	
	
	//Questão III
	$pdf->Ln(50);
	$pdf->SetFont('Arial','B',14);
	$pdf->SetTextColor(0,0,0);
	$pdf->Cell(0,1,"Ja alguma vez usou aparelhos/proteses dentarias?" ,0,1);
	$pdf->Ln(15);
	
	if($QIV == "1")
	{
		    $pdf->SetFont('Arial','U',13);
			$pdf->SetTextColor(0,255,0);
			$pdf->Cell(0,1,"Resposta: Sim" ,0,1);
	}
	else if ($QIV == "2")
	{
		    $pdf->SetFont('Arial','U',13);
			$pdf->SetTextColor(0,255,0);
			$pdf->Cell(0,1,"Resposta: Nao" ,0,1);
	}
	
	$pdf->Ln(20);
	$pdf->SetFont('Arial','B',14);
	$pdf->SetTextColor(0,0,0);
	$pdf->Cell(0,1,"Assinatura" ,0,1);
	$pdf->Ln(60);
	
	$pdf->Image('upload/assinatura.png',60,50,80);
	
	
	$pdf->Output();
?>