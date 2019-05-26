<?php
require 'vendor/autoload.php';
use Mailgun\Mailgun;
# Instantiate the client.
$mgClient = new Mailgun('f72dd7b55955806962dc3b470480bbb0-52b0ea77-9a23a0ae');
$domain = "https://api.mailgun.net/v3/app.shbankonline.com";
# Make the call to the client.
$result = $mgClient->sendMessage($domain, array(
	'from'	=> 'Excited User <mailgun@app.shbankonline.com>',
	'to'	=> 'Baz <ahambasolomon800@gmail.com>',
	'subject' => 'Hello',
	'text'	=> 'Testing some Mailgun awesomness!'
));
?>