<?php
$access_token = '6glFwNzCJWIywIhdtMq1kvJMWv7umWrB18oDUgVKQ6hCkLc1PAaEO/WSl+gc/NEbuGQ4qDg9zll9/XQN0Xp2rkuDAn+cBVf5gkm8mTqNSh9LKgKqnyzRSJj5LJMv9JpVZU0hLRanSLl1XFpuwKXRPQdB04t89/1O/w1cDnyilFU=
';


$url = 'https://api.line.me/v4/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
