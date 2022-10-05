<?php

class Api_model extends CI_Model {

    public function busca($symbol,$term)
    {
        if(empty($symbol))
        {
            return array();
        }

        $symbol = $this->input->post("search");

        $url = 'https://pro-api.coinmarketcap.com/v2/cryptocurrency/quotes/latest';
        $parameters = [
        'convert' => 'USD',
        'symbol' => $symbol,
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
        $result = json_decode($response);
        $result = $result->data->$term[0];
        return $result;

        // echo '<pre>';
        // print_r($result);
        // print_r($result->data);
        // print_r($result->data->$term[0]->id);
        // print_r($result->data->$term[0]->name);
        // print_r($result->data->$term[0]->symbol);
        // print_r($result->data->$term[0]->max_supply);
        // print_r($result->data->$term[0]->circulating_supply);
        // print_r($result->data->$term[0]->total_supply);
        // echo '</pre>';
        // exit;
        
    }
}