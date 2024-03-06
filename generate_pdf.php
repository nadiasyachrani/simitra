<?php
include "koneksi.php";

require 'fpdf/fpdf.php'; // Sesuaikan dengan lokasi file FPDF jika berbeda

// Menggunakan FPDF
class PDF extends FPDF
{
    // Fungsi untuk header
    function Header()
    {
        // Informasi perusahaan
        // Logo
    
        $this->SetFont('Arial', 'B', 18);
        $this->Cell(237, 5, 'CV. MITRA INDO MANDIRI', 0, 1, 'C');
        $this->SetFont('Arial', 'B', 12);
        $this->Cell(237, 5, 'FUMIGATION AND PEST CONTROL', 0, 1, 'C');
        $this->SetFont('Arial', '', 10);
        $this->Cell(237, 4, 'Perumahan Mutiara Cluster 5A, Jl. Pedurungan Kidul v RT.1 / RW. 4', 0, 1, 'C');
        $this->Cell(237, 4, 'Kelurahan Gemah - Semarang, Telp./Fax. (024) 6705285', 0, 1, 'C');
        $this->Cell(237, 4, 'email: mitra.Indomandiri@gmail.com', 0, 1, 'C');
        $this->Ln(2);
        $this->SetLineWidth(0.75);
        $this->Line(10, $this->GetY(), 200, $this->GetY());
        $this->Ln(1);
        $this->SetLineWidth(0.2);
        $this->Line(10, $this->GetY(), 200, $this->GetY());
        
        $this->Ln(10);
        // Select Arial bold 15
        $this->SetFont('Arial', 'B', 14);
        $this->Cell(0, 5, 'FORMULIR PEMBERITAHUAN TENTANG MULAI DAN SELESAINYA', 0, 1, 'C');
        $this->Cell(0, 5, 'FUMIGASI', 0, 1, 'C');
        $this->Ln(2);
        $this->SetFont('Arial', '', 12);
        $this->Cell(0, 10, 'Hal : Pemberitahuan pada Pemilik Depo', 0, 1, 'L');
        $this->Cell(0, 5, 'Bersama ini kami memberitahukan kepada Pengelola/pemilik Depo, bahwa kami telah mulai/selesai', 0, 1, 'L');
        $this->Cell(0, 5, 'melaksanakan fumigasi', 0, 1, 'L');
        $this->Ln(5);
    }

    // Fungsi untuk footer
    function Footer()
    {
        // Position at 1.5 cm from bottom
        $this->SetY(-15);
        // Select Arial italic 8
        $this->SetFont('Arial', 'I', 8);
        // Page number
        $this->Cell(0, 10, 'Page ' . $this->PageNo(), 0, 0, 'C');
    }
}

include "koneksi.php";

// Membuat objek PDF
$pdf = new PDF();
$pdf->AliasNbPages();

// Menambahkan halaman baru
$pdf->AddPage();

// Membuat tabel dengan alignment teks tengah
$pdf->SetFont('Arial', '', 10);
$pdf->Cell(30, 7, 'ID Standar', 1, 0, 'C');
$pdf->Cell(30, 7, 'BBB Feet', 1, 0, 'C');
$pdf->Cell(30, 7, 'BTK Feet', 1, 0, 'C');
$pdf->Cell(30, 7, 'BOP Feet', 1, 0, 'C');
$pdf->Cell(30, 7, 'Jumlah HPP Feet', 1, 0, 'C');
$pdf->Ln();

// Mendapatkan data dari database
$sql = "SELECT * FROM data_hpp_feet ORDER BY no ASC";
$hasil = mysqli_query($kon, $sql);

// Menampilkan data dalam tabel PDF
while ($data = mysqli_fetch_assoc($hasil)) {
    $pdf->Cell(30, 7, $data["id_standar"], 1, 0, 'C');
    $pdf->Cell(30, 7, $data["bbb_feet"], 1, 0, 'C');
    $pdf->Cell(30, 7, $data["btk_feet"], 1, 0, 'C');
    $pdf->Cell(30, 7, $data["bop_feet"], 1, 0, 'C');
    $pdf->Cell(30, 7, $data["jumlah_hpp_feet"], 1, 0, 'C');
    $pdf->Ln();
}

// Output PDF
$pdf->Output();
?>