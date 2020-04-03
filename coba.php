<?php

require ('vendor/autoload.php');

// $barcode = new \Com\Tecnick\Barcode\Barcode();

// $bobj = $barcode->getBarcodeObj('QRCODE,H', 'aHR0cHM6Ly93d3cueW91dHViZS5jb20vd2F0Y2g/dj1wNWVvSEhyVEt2cw==', -4, -4, 'black', array(-2, -2, -2, -2))->setBackgroundColor('#f0f0f0');
// // instantiate the barcode class
$barcode = new \Com\Tecnick\Barcode\Barcode();

// generate a barcode
$bobj = $barcode->getBarcodeObj(
    'QRCODE,H',                     // barcode type and additional comma-separated parameters
    'aHR0cHM6Ly93d3cueW91dHViZS5jb20vd2F0Y2g/dj1wNWVvSEhyVEt2cw==',          // data string to encode
    -5,                             // bar width (use absolute or negative value as multiplication factor)
    -5,                             // bar height (use absolute or negative value as multiplication factor)
    'black',                        // foreground color
    array(-2, -2, -2, -2)           // padding (use absolute or negative values as multiplication factors)
    )->setBackgroundColor('white'); // background color

// output the barcode as HTML div (see other output formats in the documentation and examples)
$base_img = base64_encode($bobj->getPngData());
echo "<img alt='QRCode' src='data:image/png;base64,$base_img'/>"
?>
