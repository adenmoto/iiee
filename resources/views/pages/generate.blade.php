<?php


 
require "vendor/autoload.php";

use Endroid\QrCode\QrCode;

$qrcode = new QrCode("SALAMAT SA PAG SUPORTA");

echo $qrcode->writeString();
die();
?>