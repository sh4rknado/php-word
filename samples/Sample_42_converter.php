<?php

require_once "../vendor/autoload.php";

use PhpOffice\PhpWord\Converter\Converter;

$converter = new Converter();


/**
 * Convert to HTML
 */
$converter->docxToHtml( "resources/result.docx","results/result.html");



/**
 * Convert to PDF
 */
$converter->docxToPdf("resources/result.docx", "results/result.pdf");
