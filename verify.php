<?php
$access_token = 'gik7ZYsrDT1WIpL5rJw8Brz7eit78XnDVCSKkQbZUUlMW3pw3lk2tEajvMNOKCzouGQ4qDg9zll9/XQN0Xp2rkuDAn+cBVf5gkm8mTqNSh+BtWqL6OqwgUxOZFHcmX+D7FM/iogqxQ2IGv5v14taJAdB04t89/1O/w1cDnyilFU=
';


$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
