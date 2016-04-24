<?php

// Send the headers
header('Content-type: text/xml');
header('Pragma: public');
header('Cache-control: private');
header('Expires: -1');

global $woocommerce;

echo "<?xml version=\"1.0\" encoding=\"utf-8\"?>";

echo '<xml>';

echo '<total>';
echo $_GET["total"];
echo '</total>';

echo '</xml>';

?>