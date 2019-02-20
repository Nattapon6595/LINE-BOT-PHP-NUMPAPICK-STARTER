<?php
$access_token = 'lHshRu2fVC1Fb4DVN9WobX4qA/UP9A8gleQCowKXNJvF/Ns0sI6hLYker6wrMsWdIQKQArO5MYvxjJSUwxNQwk+ToGcABsDYuFvsGuEUusL8yEAejl0c0y1s3Vx69yOaTQBIZHz/C0810v9AtKRCpAdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
