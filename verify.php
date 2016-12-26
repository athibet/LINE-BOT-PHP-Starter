<?php
$access_token = 'obwzJ+60MB6J8siuu6e5FvljfyZSV3rwdDW2IcJMZyKTW5uaOEoZqpwGcHdzCULfhYPgEQJ7e8Uqitb06R2TBJQ5tTAMj/AaNx9XhzGiHqFcgv0v7xL7PfU9vue0Miky8yUi+zucb+0FNvDkdCdDcwdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
