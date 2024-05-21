<?php
include "../autoloading.php";
$data = $_POST;
$name = $data['nameFile'];
$content = $data['contentFile'];
$format = $data['formatFile'];

//function export($format, $data)
//{
//    $fileName = $data['nameFile'] . '.' . $format;
//    $filePath = __DIR__ . '/files/' . $fileName;
//    file_put_contents($filePath,$data);
//    echo "create ".$fileName." succesfully";
//}
$clasName = "export\\{$format}Exporter";

$obj = new $clasName();
$obj->export($data);
