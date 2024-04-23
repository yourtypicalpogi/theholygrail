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

$url = "https://store.bookbinding.co.uk/store/go/checkout/";
$headers = [
	"User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:126.0) Gecko/20100101 Firefox/126.0",
	"Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,*/*;q=0.8",
	"Accept-Language: en-US,en;q=0.5",
	"Content-Type: application/x-www-form-urlencoded",
	"Origin: https://store.bookbinding.co.uk",
	"Connection: keep-alive",
	"Referer: https://store.bookbinding.co.uk/store/go/checkout/",
	"Upgrade-Insecure-Requests: 1",
	"Sec-Fetch-Dest: document",
	"Sec-Fetch-Mode: navigate",
	"Sec-Fetch-Site: same-origin",
	"Sec-Fetch-User: ?1",
	"Priority: u=1",
	"Pragma: no-cache",
	"Cache-Control: no-cache",
	"TE: trailers",
];
$post = "billing%5Baddress_changed%5D=0&billing%5Btitle%5D=Mr&billing%5Bfirstname%5D=Sadsad&billing%5Blastname%5D=Asdsad&billing%5Bcompany%5D=&billing%5Bemail%5D=asdasdw%40gmail.com&billing%5Btelephone%5D=2122122211&billing%5Baddress1%5D=123+Allen+Street&billing%5Baddress2%5D=&billing%5Bcity%5D=Wakefield&billing%5Bcountry%5D=United+Kingdom&billing%5Brequirezip%5D=1&billing%5Brequirestate%5D=0&billing%5Bzippostcode%5D=+%09WF1+1PQ&billing%5Bstate%5D=West+Yorkshire&billing%5Bfax%5D=&_billing_joinlist_submitted=1&billing%5Bmailinglist%5D=H&_billing_mailinglist_submitted=1&billing%5Busername%5D=asdasd123123&billing%5Bpassword%5D=%21H%23wAW2m%40r-G%236w&billing%5Bconfirmation%5D=%21H%23wAW2m%40r-G%236w&_billing_register_as_guest_submitted=1&shipping%5Bship_to_billing%5D=0&_shipping_ship_to_billing_submitted=1&shipping%5Baddress_changed%5D=0&shipping%5Bfirstname%5D=Sadsad&shipping%5Blastname%5D=Asdasd&shipping%5Bcompany%5D=&shipping%5Bemail%5D=asdasd%40gmail.com&shipping%5Btelephone%5D=1231231122&shipping%5Baddress1%5D=123+Allen+Street&shipping%5Baddress2%5D=&shipping%5Bcity%5D=Wakefield&shipping%5Bcountry%5D=United+Kingdom&shipping%5Brequirezip%5D=1&shipping%5Brequirestate%5D=0&shipping%5Bzippostcode%5D=+%09WF1+1PQ&shipping%5Bstate%5D=West+Yorkshire&shipping%5Bfax%5D=&checkout%5Bcomment%5D=&shippingmethod%5Bmethod_id%5D=3490&_shippingmethod_method_id_submitted=1&shippingmethod_type=1&checkout%5Bwebcoupon%5D=&checkout%5Bpluginid%5D=65&_checkout_pluginid_submitted=1&payment%5Bholdername%5D=Sadsad+Asdsad&payment%5Bcardnumber%5D=4355460266689958&payment%5Bexpirymonth%5D=12&payment%5Bexpiryyear%5D=2031&payment%5Bccv%5D=111&payment%5Bpm%5D=&subaction=confirmation&payment%5Bsubmitted%5D=1&checkout%5Bcurrent_step%5D=1&humans=&_ga=2.104070592.1155192380.1713774307-504242493.1713774307";
$response = $requests->post($url, $headers, $post);