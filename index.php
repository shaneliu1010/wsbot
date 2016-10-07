$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient('<channel access token>');
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => '<channel secret>']);
$response = $bot->leaveRoom('<roomId>');
echo $response->getHTTPStatus() . ' ' . $response->getBody();
