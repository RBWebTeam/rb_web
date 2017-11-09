<?php

$curl = curl_init();
curl_setopt($curl, CURLOPT_CAINFO,'./cacert.pem');
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, true);
// curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
// curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt_array($curl, array(
  CURLOPT_URL => "https://android.googleapis.com/gcm/send",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "{\"registration_ids\":[\"cq7x1R-YZKc:APA91bEo0Br5Ks5bBjOL9AAcVcvHjphgYKBwiT82mI0RvHHCTjKwaVQG46vV4hJncofovbvTfYqWMzUnAEeBgSXGz669a1vC3g2-JVuHhx35hoCNw8zZy6G_dxaV1jKd21YXsdKeL7Aa\"]}",
  CURLOPT_HTTPHEADER => array(
    "Authorization: key=AIzaSyBMftUnBNsMjNGzSiA8kxFOkSefxFJV4Tc","Content-Type:application/json"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}