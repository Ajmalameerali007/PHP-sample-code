<?php
require_once '../Paytabs-plugin.php';
$plugin = new Paytabs();

$request_url = 'payment/request';
$data = [
    "tran_type" => "auth",
    "tran_class" => "recurring",
    "cart_id" => "cart_444441",
    "cart_currency" => "aed",
    "cart_amount" => 10,
    "cart_description" => "Description of the items/services",
    "token" => "2C4651BE67A3EA30C6B791F8618B78B0",  //token you received in the create page with token request
    "tran_ref" => "TST2105600089454", // trans_ref you received in the create page with token request
    "hide_shipping" => true,
    "paypage_lang" => "en",
   ];
$page = $plugin->send_api_request($request_url, $data);
print_r($page);
exit();
