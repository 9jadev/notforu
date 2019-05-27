<?php
require 'vendor/autoload.php';
use Mailgun\Mailgun;
# Instantiate the client.
$mgClient = new Mailgun('');
$domain = "";
# Make the call to the client.
$result = $mgClient->sendMessage($domain, array(
	'from'	=> 'Excited User <mailgun@app.shbankonline.com>',
	'to'	=> 'Baz <ahambasolomon800@gmail.com>',
	'subject' => 'Hello',
	'text'	=> 'Testing some Mailgun awesomness!'
));
?>