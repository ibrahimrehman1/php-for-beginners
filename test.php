<?php namespace app;

require_once 'vendor/autoload.php';

$person = new Person();

// Guzzle - PHP HTTP Client

// $client = new \GuzzleHttp\Client();
// $response = $client->request(
//     'GET',
//     'https://api.github.com/repos/guzzle/guzzle'
// );

// echo $response->getStatusCode(); // 200
// echo $response->getHeaderLine('content-type'); // 'application/json; charset=utf8'
// echo $response->getBody(); // '{"id": 1420053, "name": "guzzle", ...}'

// // Send an asynchronous request.
// $request = new \GuzzleHttp\Psr7\Request('GET', 'http://httpbin.org');
// $promise = $client->sendAsync($request)->then(function ($response) {
//     echo 'I completed! ' . $response->getBody();
// });

// $promise->wait();

// Cookies and Sessions

session_start();
echo session_id();

session_destroy();

setcookie('name', 'value', time() + 60);

?>
