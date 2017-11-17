<?php
$access_token = '7Af83hBtZ+AAdf+fxdaO09IqhGUpgqoW9LVk1Zkp3FcYFRGvICOikhUk8Qc63bmRtbuRCUbHL9qp9AxtfOVlvUnBJOxWuJ6EgqlZSxCCALCBdpHNuzJ7VjcJUVnfL3XSIB9cVV+s8wcOUOlghs6raAdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;