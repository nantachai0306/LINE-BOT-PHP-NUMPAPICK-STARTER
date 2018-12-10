<?php
$access_token = '00TEfBzGfSSxef1IChhMawaXygdhz2vuwj2ldY1wmNjdCMrbyj85DpaXIlB/9jCrA5zu5lCvPFU0SzE6wwEKyc9qcakMP5YzzMYnHsS/R4XsXTzdaQETF4XIv+6xG9x4ldfHiHRG9rlEPbrys28f+AdB04t89/1O/w1cDnyilFU=';


$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
