<?php
$access_token = 'ZgTrbsRBYxmyubKP1G7rhpL4bzTTXQlMvdhlLfIs9nW/YiUalHH1d/wAxlpIJGpYuGQ4qDg9zll9/XQN0Xp2rkuDAn+cBVf5gkm8mTqNSh8JYo9P6CWRuvokXwWH8R912B2aGLI1b9mfU4lgn/cEcQdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
