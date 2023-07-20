<?php

// Include the main TCPDF library (search for installation path).
include_once('TCPDF/tcpdf.php');

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);


$pdf->setPrintHeader(false);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__) . '/lang/eng.php')) {
    require_once(dirname(__FILE__) . '/lang/eng.php');
    $pdf->setLanguageArray($l);
}

$pdf->setTitle('Hasil Evaluasi');
// set font
$pdf->setFont('times', '', 10);
// add a page
$pdf->AddPage();

// set cell padding
$pdf->setCellPaddings(1, 1, 1, 1);

// set cell margins
$pdf->setCellMargins(1, 1, 1, 1);

// set color for background
$pdf->setFillColor(255, 255, 127);

// MultiCell($w, $h, $txt, $border=0, $align='J', $fill=0, $ln=1, $x='', $y='', $reseth=true, $stretch=0, $ishtml=false, $autopadding=true, $maxh=0)



$tittle = '
<table width="100%" >
<tr>
    <td rowspan="5" style="width:15%" align="right"><img src="gambar/logopoltek.png"></td>
    <td style="width:80%"><h3 align="center">KEMENTERIAN PENDIDIKAN, KEBUDAYAAN, RISET, DAN TEKNOLOGI</h3></td>
</tr>
<tr>
    <td><h1 align="center">POLITEKNIK NEGERI BALI</h1></td>
</tr>
<tr>
    <td><h5 align="center">Kampus Politeknik Negeri Bali Bukit Jimbaran Kuta Selatan Badung-Bali</h5></td>
</tr>
<tr>
    <td><h5 align="center">Telepon : 0361-701981, Fax : 0361-701128</h5></td>
</tr>
<tr>
    <td><h5 align="center">Website : www.pnb.ac.id, Email : poltek@pnb.ac.id</h5></td>
</tr>
</table><br><hr>


<h2 style="text-weight:bold">Hasil Evaluasi Bimbingan</h2>
<br>
<table style>
<tr>
<th>Nama    : ' . $User->Nama . '</th>
<th>Nama Orang Tua : '. $User->NamaOrangTua . '</th>
</tr>
<tr>
<td>Nim : ' . $User->Nim . '</td> 
<td>Alamat Orang Tua : ' . $User->AlamatOrtu . '</td>
</tr>
<tr>
<td>Alamat :' . $User->Alamat . '</td>
<td>No.Hp Orang Tua : ' . $User->TelpOrangTua . '</td>
</tr>
<tr>
<td>NO.Hp : ' . $User->NoHp . '</td>
<td>Nama Pembimbing : ' . $User->NamaDosen . '</td>
</tr>
</table><br><hr>
';



$pdf->writeHTMLCell(0, 0, '', '', $tittle, 0, 1, 0, true, 'L', true);

$table = '<table style="border:1px solid #000; padding:6px;">';
$table .= '
<tr>
  <th style="border:1px solid #000; padding:6px;" colspan="2">Kondisi</th>
  <th style="border:1px solid #000; padding:6px;" colspan="2">Thn.Ajaran</th>
  <th style="border:1px solid #000; padding:6px;" colspan="3">Uraian</th>
  <th style="border:1px solid #000; padding:6px;" colspan="3">Solusi</th>
  <th style="border:1px solid #000; padding:6px;">IPK</th>
  <th style="border:1px solid #000; padding:6px;">IPS</th>
  <th style="border:1px solid #000; padding:6px;" colspan="2">Status</th>
</tr>

<tbody>
<tr>
  <td style="border:1px solid #000; padding:6px;" colspan="2">' . $User->StatusMahasiswa . '</td>
  <td style="border:1px solid #000; padding:6px;" colspan="2">' . $User-> tahunajaran. '</td>
  <th style="border:1px solid #000; padding:6px;" colspan="3">' . $User-> Uraian. '</th>
  <th style="border:1px solid #000; padding:6px;" colspan="3">' . $User-> Solusi. '</th>
  <td style="border:1px solid #000; padding:6px;">' . $User-> IPK. '</td>
  <td style="border:1px solid #000; padding:6px;">' . $User-> IPS. '</td>
  <td style="border:1px solid #000; padding:6px;" colspan="2">' . $User->VerifMahasiswa . ' </td>
</tr>
</tbody>';
$table .= '</table>';
$pdf->writeHTMLCell(0, 0, '', '', $table, 0, 1, 0, true, 'C', true);

// move pointer to last page
$pdf->lastPage();

// ---------------------------------------------------------

//Close and output PDF document
ob_clean();
$pdf->Output('report.pdf', 'I');


//============================================================+
// END OF FILE
//============================================================+
