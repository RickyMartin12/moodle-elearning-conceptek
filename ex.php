<?php


require_once __DIR__ . '/vendor/autoload.php';

$html = '
aa

';

$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML($html);
$mpdf->Output();
