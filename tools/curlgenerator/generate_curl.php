<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
     $json = json_decode(file_get_contents("php://input"), true);
     echo '<?php
# Made by Pogi

$ch = curl_init();
curl_setopt_array($ch, [
     CURLOPT_URL => "'.$json['url'].'",
     CURLOPT_RETURNTRANSFER => true,
     CURLOPT_FOLLOWLOCATION => true,
     CURLOPT_SSL_VERIFYPEER => false,
     CURLOPT_SSL_VERIFYHOST => false,
     CURLOPT_COOKIEFILE => $cookie,
     CURLOPT_COOKIEJAR => $cookie,
     CURLOPT_HTTPHEADER => [
';
     foreach($json['headers'] as $key => $header) {
          echo "\t\t\"$header\",\n";
     }
     echo "\t],";
     
     if ($json['post'] != '') {
          echo "
     CURLOPT_POSTFIELDS => '".$json['post']."'
]);";
     }

     echo '

$response = curl_exec($ch);
curl_close($ch);';
}
