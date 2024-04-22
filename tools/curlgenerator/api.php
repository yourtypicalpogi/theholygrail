<?php 

error_reporting(E_ERROR);

require 'preset.php';

$requests = new Requests;

# Sample
$url = "https://store.bookbinding.co.uk/store/store.asp";
$headers = [
	"User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:126.0) Gecko/20100101 Firefox/126.0",
	"Accept: */*",
	"Accept-Language: en-US,en;q=0.5",
	"Content-Type: application/x-www-form-urlencoded; charset=UTF-8",
	"X-Requested-With: XMLHttpRequest",
	"Origin: https://store.bookbinding.co.uk",
	"Connection: keep-alive",
	"Sec-Fetch-Dest: empty",
	"Sec-Fetch-Mode: cors",
	"Sec-Fetch-Site: same-origin",
	"Priority: u=1",
	"Pragma: no-cache",
	"Cache-Control: no-cache",
	"TE: trailers",
];
$post = "action=add_product&prodcode=19040&quantity=1&quantity_fraction=0&ajax=1";
$response = $requests->post($url, $headers, $post);
