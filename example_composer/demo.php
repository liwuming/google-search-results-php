<?php
  require __DIR__ . '/vendor/autoload.php';
  $client = new GoogleSearchResults(getenv('API_KEY'));
  $query = ["q" => "coffee","location"=>"Austin,Texas"];
  $response = $client->get_json($query);
  print_r($response);
 ?>