<?php

require_once "../vendor/autoload.php";

use PhpOffice\PhpWord\TemplateProcessor;

//open your template
$templateProcessor = new TemplateProcessor('resources/Sample_41_TemplateImages.docx');

$width=300;
$height=300;

//add image to selector
$templateProcessor->setImg('image1',
    array('src' => 'resources/_earth.jpg',
        'swh'=>'200',
        'size'=> array(0=>$width, 1=>$height)));


//add image to selector
$templateProcessor->setImg('image2',
    array('src' => 'resources/_mars.jpg',
        'swh'=>'200',
        'size'=> array(0=>$width, 1=>$height)));


// Save Result.docx
$templateProcessor->saveAs('results/Sample_41_TemplateImages.docx');