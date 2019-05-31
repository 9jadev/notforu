<?php
$data = array('name' => 'solomon' , 'hows' => "don't you know" );
//echo $data;
$content = json_encode($data);
$url = "http://localhost/spring-bank/recieve";
$curl = curl_init($url);
curl_setopt($curl, CURLOPT_HEADER, false);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HTTPHEADER,
		array("Content-type: application/json"));
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, $content);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false); //curl error SSL certificate problem, verify that the CA cert is OK

$result		= curl_exec($curl);
$response	= json_decode($result);
var_dump($response);
curl_close($curl);

?>