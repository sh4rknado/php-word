<?php


namespace PhpOffice\PhpWord\Converter;

use PhpOffice\PhpWord\Exception\Exception;
use PhpOffice\PhpWord\IOFactory;
use Unoconv\Unoconv;


class Converter {


    /**
     * Converter constructor.
     */
    public function __construct() { }


    /**
     * @param $filename
     * @param $output
     */
    public function docxToPdf($filename, $output) {

        $binary = "/usr/bin/unoconv";

        $unoconv = Unoconv::create(array(
            'timeout'          => 42,
            'unoconv.binaries' => $binary,
        ));

        $unoconv->transcode($filename, 'pdf', $output);
    }


    public function docxToHtml($filename, $output) {
        $html = "";
        if($filename) {
            try {
                $phpword = IOFactory::load($filename);
                $objWriter = IOFactory::createWriter($phpword, 'HTML');
                $objWriter->save("/tmp/tpl.html");
                $html = file_get_contents("/tmp/tpl.html");
                unlink("/tmp/tpl.html");
            }
            catch (Exception $e) { }
        }
        file_put_contents($output, $html);
    }

}
