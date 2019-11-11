<?php
require "fpdf/fpdf.php";
$name = new PDO('mysql:host=localhost; dbname=mahasiswa','root','');

class mypdf extends FPDF{
    function header(){
     $this->Image('logo.png',30,6); 
        $this->SetFont('Times','B',14);
        $this->setXY(90,10);
        $this->Cell(276, 10, 'KEMENTRIAN RISET, TEKNOLOGI DAN PENDIDIKAN TINGGI', 40, 0, 'L');
       
        $this->Ln();
    } 
    function univ(){
        $this->setXY(130,10);
        $this->Cell(276, 30, 'UNIVERSITAS PALANGKA RAYA', 40, 0, 'L');
        $this->Ln();
    }
    function fak(){
        $this->SetFont('Times','B',16);
        $this->setXY(143,10);
        $this->Cell(276, 50, 'FAKULTAS TEKNIK', 40, 0, 'L');
        $this->Ln();
    }
    function line(){
        $this->setXY(30,15);
        $this->Cell(276, 60, '---------------------------------------------------------------------------------------------------------------------------------', 40, 0, 'L');
        $this->Ln();
    }

    function headerTable(){
        $this->setXY(40,50);
        $this->SetFont('Times', 'B',12);
        $this->Cell(20,0,'nim',0,0,'L');
        $this->Cell(40,0,'nama',0,0,'L');
        $this->Cell(30,0,'jenis_kelamin',0,0,'L');
        $this->Cell(20,0,'angkatan',0,0,'L');
        $this->Cell(40,0,'alamat',0,0,'L');
        $this->Cell(20,0,'nomor hp',0,0,'L');
        $this->Ln();
    } 

    function viewTable($name){
        $this->setXY(40,55);
        $this->SetFont('Times','',12);
        $stmt=$name->query("SELECT * FROM biodata ");
        while($data = $stmt->fetch(PDO::FETCH_OBJ)){
            $this->Cell(20, 10, $data->nim,0,0,'L');
            $this->Cell(40, 10, $data->nama,0,0,'L');
            $this->Cell(30, 10, $data->jenis_kelamin,0,0,'L');
            $this->Cell(20, 10, $data->angkatan,0,0,'L');
            $this->Cell(40, 10, $data->alamat,0,0,'L');
            $this->Cell(20, 10, $data->no_hp,0,0,'L');
            $this->Ln();
        }
    }

    function headerTableD(){
        $this->setXY(40,75);
        $this->SetFont('Times', 'B',12);
        $this->Cell(70,0,'kode matakuliah',0,0,'L');
        $this->Cell(65,0,'mata kuliah',0,0,'L');
        $this->Cell(40,0,'sks',0,0,'L');
        $this->Cell(80,0,'nama dosen',0,0,'L');
        $this->Ln();
    } 

  
    function viewMata($name){
        $ha=80;
        $this->setXY(40,$ha);
        $this->SetFont('Times','',12);
        $stmt=$name->query("SELECT * FROM matkul ");
       
        while($data = $stmt->fetch(PDO::FETCH_OBJ)){
            $this->setXY(40,$ha);
            $this->Cell(40, 10, $data->kode_matkul,1,0,'L');
            $this->Cell(90, 10, $data->mata_kuliah,1,0,'L');
            $this->Cell(20, 10, $data->sks,1,0,'L');
            $this->Cell(80, 10, $data->nama,1,0,'L');
            $this->Ln();
           $ha= $ha+10;
        }
        $this->setXY(90,$ha);
        $this->Cell(276, 30, 'jumlah kredit yang diprogramkan semester ini :      23        SKS', 40, 0, 'L');
    } 
}

$pdf = new myPDF();
$pdf->AliasNbPages();
$pdf->AddPage('L', 'A4',0); 
$pdf->univ();
$pdf->fak();
$pdf->line();


$pdf->headerTable();
$pdf->viewTable($name);
$pdf->headerTableD();

$pdf->viewMata($name); 
$pdf->Output();