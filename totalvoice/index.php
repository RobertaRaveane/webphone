<?php
require_once "vendor/autoload.php";

use TotalVoice\Client as TotalVoiceClient;

$client = new TotalVoiceClient('8ec107b97b491975af3831df264cca08');

$response = $client->perfil->consultaSaldo();

echo $response->getContent(); // {}