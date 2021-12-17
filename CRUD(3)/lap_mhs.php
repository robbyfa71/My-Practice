<?php
    //memanggil library pdf
    require ('../fpdf/fpdf.php');
    //intance object dan memberikan pengaturan halaman pdf
    $pdf = new FPDF('l','mm','A5');
    //membuat halaman baru
    $pdf ->AddPage();
    //setting jenit font yang akan digunakan
    $pdf->setFont('Arial','B',16);
    //mencetak string judul
    $pdf->Cell(190,7,'PROGRAM STUDI TEKNIK INFORMATIKA',0,1,'C');
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(190,7,'DAFTAR MAHASISWA MAKUL PEMROGRAMAN WEB DINAMIS',0,1,'C');

    //memberikan space kebawah agar tidak terlalu rapat
    $pdf->Cell(10,7,'',0,1);

    $pdf->SetFont('Arial','B',10); //set font
    //membuat table header dalam laporan 
    $pdf->Cell(20,6,'NIM',1,0);
    $pdf->Cell(50,6,'NAMA MAHASISWA',1,0);
    $pdf->Cell(25,6,'J KEL',1,0);
    $pdf->Cell(50,6,'ALAMAT',1,0);
    $pdf->Cell(30,6,'TANGGAL LHR',1,1);

    $pdf->SetFont('Arial','',10);

    include '../koneksi.php'; //koneksi ke database
    $mahasiswa = mysqli_query($conn, "select * from mahasiswa");
    while($row = mysqli_fetch_array($mahasiswa)){
        $pdf->Cell(20,6,$row['nim'],1,0);
        $pdf->Cell(50,6,$row['nama'],1,0);
        $pdf->Cell(25,6,$row['jkel'],1,0);
        $pdf->Cell(50,6,$row['alamat'],1,0);
        $pdf->Cell(30,6,$row['tgllhr'],1,1); // angka 1 menandakan bahwa itu adalah akhir cell
    }
    $pdf->Output();
?>