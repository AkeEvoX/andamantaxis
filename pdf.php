<?php
require_once __DIR__.'/vendor/autoload.php';


$templete = file_get_contents('include/templete-complete.php');
$pdf_dest = __DIR__."\\temp_pdf\\";
$pdf_name= $pdf_dest."purchase_0001.pdf";


$mpdf = new\Mpdf\Mpdf(["temp_pdf" => __DIR__."\\media"] );
$mpdf->WriteHTML($templete);
$mpdf->Output($pdf_name,"F");

?>