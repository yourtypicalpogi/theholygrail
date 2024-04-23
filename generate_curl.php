<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
     $curl = str_replace("^", '', json_decode(file_get_contents("php://input"), true)['curl']);

     preg_match('/curl "(.*?)"/', $curl, $match);

     $url = $match[1];

     preg_match_all('/-H "(.*?)"/', $curl, $match);
     $headers = $match[1];

     if (preg_match('/--data-raw "(.*)"$/', $curl, $match)) {
          $data = $match[1];
     } elseif (preg_match('/--data-binary "(.*)"$/', $curl, $match)) {
          $data = $match[1];
     }

     if(!isset($data)) {
          echo json_encode(["url" => $url, "method" => 'get', "headers" => $headers]);
     }
     else {
          echo json_encode(["url" => $url, "method" => 'post', "headers" => $headers, "postfield" => $data]);
     }

     
}

?>