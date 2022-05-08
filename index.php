<?php
$access_token ="";

require_once 'vendor/autoload.php';

MercadoPago\SDK::setAccessToken("$access_token");

$preference = new MercadoPago\Preference();

$item = new MercadoPago\Item();
$item->title = 'Camiseta Corinthians';
$item->quantity = 1;
$item->unity_price = (double)75.00;
$preference->items = array($item);

$preference->back_urls = array(
    "success" =>'', 
    "failure" =>'',
    "pending" =>''
); 
$preference->notification_url ='';
$preference->external_reference =4545;
$preference->save();

$link = $preference->ini_point;

echo $link;



?>