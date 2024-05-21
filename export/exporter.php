<?php

namespace export;
interface export
{
    function export($data);
}

class exporter implements export
{
    protected $format;
//    protected $data;

//    public function __construct($contentFile)
//    {
//        $this->data = $contentFile;
//    }

    function export($data)
    {
    }

}