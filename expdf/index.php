<?php
// Require composer autoload
require_once __DIR__ . '/vendor/autoload.php';
// Create an instance of the class:
$mpdf = new \Mpdf\Mpdf();

// Write some HTML code:
$mpdf->WriteHTML('Exemplos <b>PHP</b>');
$mpdf->WriteHTML('Autor: <a href="https://sandroalencarfernandes.com">Sandro Alencar Fernandes</a>');


// Output a PDF file directly to the browser
$mpdf->Output();