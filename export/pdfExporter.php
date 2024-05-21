<?php
namespace export;
class pdfExporter extends exporter
{
    protected $format = "pdf";

    public function export($data)
    {
        echo "ok";
    }
}