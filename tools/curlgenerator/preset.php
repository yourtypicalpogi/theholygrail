<?php
class Requests {

     public $cookies;

     public function __construct() {
          $this->cookies = tempnam('/tmp', 'cookie');
     }

     public function get($url, $headers) {
          $ch = curl_init();
          curl_setopt_array($ch, [
               CURLOPT_URL => $url,
               CURLOPT_HEADER => false,
               CURLOPT_RETURNTRANSFER => true,
               CURLOPT_FOLLOWLOCATION => true,
               CURLOPT_SSL_VERIFYPEER => false,
               CURLOPT_SSL_VERIFYHOST => false,
               #CURLOPT_PROXY => $this->proxy,
               #CURLOPT_PROXYUSERPWD => $this->userpass,
               CURLOPT_COOKIEFILE => $this->cookies,
               CURLOPT_COOKIEJAR => $this->cookies,
               CURLOPT_HTTPHEADER => $headers,
          ]);
          
          $response = curl_exec($ch);
          curl_close($ch);

          return $response;
     }
     public function post($url, $headers, $post) {
          $ch = curl_init();
          curl_setopt_array($ch, [
               CURLOPT_URL => $url,
               CURLOPT_HEADER => false,
               CURLOPT_RETURNTRANSFER => true,
               CURLOPT_FOLLOWLOCATION => true,
               CURLOPT_SSL_VERIFYPEER => false,
               CURLOPT_SSL_VERIFYHOST => false,
               #CURLOPT_PROXY => $this->proxy,
               #CURLOPT_PROXYUSERPWD => $this->userpass,
               CURLOPT_COOKIEFILE => $this->cookies,
               CURLOPT_COOKIEJAR => $this->cookies,
               CURLOPT_HTTPHEADER => $headers,
               CURLOPT_POSTFIELDS => $post,
          ]);

          $response = curl_exec($ch);
          curl_close($ch);

          return $response;
     }
}

class woocommerce {
     public function nonce($string) {
          return explode('"', explode('name="woocommerce-process-checkout-nonce" value="', $string)[1])[0];
     }
}

function get_str($string, $start, $end) {
     return explode($end, explode($start, $string)[1])[0];
}

function rand_str($length) {
     return substr(str_shuffle('abcdefghijklmnopqrstuvwxyz'), 0, $length);
}

function rand_int($length) {
     return substr(str_shuffle('0123456789'), 0, $length);
}
function uuid() {
     return vsprintf( '%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex(random_bytes(16)), 4) );
}

$email = rand_str(8).rand_int(3).'@gmail.com';
$password = rand_int(2).rand_str(5).rand_int(4);
$card = $_GET['card'];
$card_array = explode('|', $card);
$cc = $card_array[0];
$mm = $card_array[1];
$yyyy = $card_array[2];
$cvv = $card_array[3];

?>