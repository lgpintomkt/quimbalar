<?php
// Send the headers
header('Content-type: text/xml');
header('Pragma: public');
header('Cache-control: private');
header('Expires: -1');
echo "<?xml version=\"1.0\" encoding=\"utf-8\"?>";

echo '<xml>';

echo '<total>';
echo wc_cart_totals_subtotal_html();
echo '</total>';

echo '</xml>';

?>