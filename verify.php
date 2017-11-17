<?php
$access_token = '7 / qpSZUNzmtpx41OF4RDGQ2kv49nx + m + tELyltpKPBB / QLJRyTo7Lgifx4di9gLJtbuRCUbHL9qp9AxtfOVlvUnBJOxWuJ6EgqlZSxCCALDM1tMrLzFR0ME5R / 6UbMCzHvQneubkCAaFLMukNKltJAdB04t89 / 1O / w1cDnyilFU =';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;