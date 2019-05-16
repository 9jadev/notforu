<?php
// Required if your environment does not handle autoloading
require __DIR__ . '/vendor/autoload.php';

// Use the REST API Client to make requests to the Twilio REST API
use Twilio\Rest\Client;

// Your Account SID and Auth Token from twilio.com/console
$sid = 'AC1b2cafbc350197fbcdb6f12caea5a937';
$token = '020b9af962f05b7cba6698a9d1b06f0d';
$client = new Client($sid, $token);

// Use the client to do fun stuff like send text messages!
$client->messages->create(
    // the number you'd like to send the message to
    '2349034426192',
    array(
        // A Twilio phone number you purchased at twilio.com/console
        'from' => '8337864564',
        // the body of the text message you'd like to send
        'body' => 'Hey Jenny! Good luck on the bar exam!'
    )
);
if ($client) {
	echo 'Solomon ahamba';
}