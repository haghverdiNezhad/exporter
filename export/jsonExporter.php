<?php
namespace export;
class jsonExporter extends exporter
{
    protected $format = "json";

    public function export($data)
    {
        $fileName = $data['nameFile'] . '.' . $this->format;
        $filePath = __DIR__ . '/files/' . $fileName;
        file_put_contents($filePath,json_encode($data['contentFile']));
        echo "create " . $fileName . " succesfully";
    }
}