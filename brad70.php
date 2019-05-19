<?php
$cont = file_get_contents("https://gis.taiwan.net.tw/XMLReleaseALL_public/scenic_spot_C_f.xml");

$xml = simplexml_load_string($cont);
$errors = libxml_get_errors();
foreach ($errors as $error){
    echo $error . '<br />';
}
echo $xml->Infos->Info[1]->Name;