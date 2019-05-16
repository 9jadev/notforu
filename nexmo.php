<?php
$i= "67d82881";
$g= "fc78c7f1c77059e7";
$basic  = new vendor\Nexmo\Client\Credentials\Basic( $i,$g );
$client = new vendor\Nexmo\Client($basic);

$message = $client->message()->send([
    'to' => +2349034426192,
    'from' => 'Acme Inc',
    'text' => 'A text message sent using the Nexmo SMS API'
]);
?>