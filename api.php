<?php
$url = 'https://pro-api.coinmarketcap.com/v2/cryptocurrency/quotes/latest';
$parameters = [
  'convert' => 'USD',
  'symbol' => 'BTC',
];

$headers = [
  'Accepts: application/json',
  'X-CMC_PRO_API_KEY: cf6b52b9-30b8-4d97-856a-2125eea4db0c'
];
$qs = http_build_query($parameters); // query string encode the parameters
$request = "{$url}?{$qs}"; // create the request URL


$curl = curl_init(); // Get cURL resource
// Set cURL options
curl_setopt_array($curl, array(
  CURLOPT_URL => $request,            // set the request URL
  CURLOPT_HTTPHEADER => $headers,     // set the headers 
  CURLOPT_RETURNTRANSFER => 1         // ask for raw response instead of bool
));

$response = curl_exec($curl); // Send the request, save the response
// print_r(json_decode($response)); // print json decoded response
curl_close($curl); // Close request


echo '<pre>';
print_r($response);
echo '<pre>';

?>