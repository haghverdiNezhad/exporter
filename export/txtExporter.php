<?php

namespace export;
class txtExporter extends exporter
{
    protected $format = "txt";

    public function export($data)
    {
        $fileName = $data['nameFile'] . '.' . $this->format;
        $filePath = __DIR__ . '/files/' . $fileName;
        file_put_contents($filePath, $data['contentFile']);
        echo "create " . $fileName . " succesfully";
    }
}