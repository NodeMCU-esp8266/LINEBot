<?php
$access_token = 'ZsjooYaFc1A8q/6SxuUfyRR1Lm5/24rZGtMp/CjtF//WV3G00ggLmm+zM8jbOGbNnaj+o9Te50l4TumGndTTQ8k/7VgRftZAPAGZLcVhln8GRSPDwBx0XPzqXkVTi+9VSouiF8yao+tKNiy+jh71QQdB04t89/1O/w1cDnyilFU=';    //PUT LINE token ID at "Channel access token (long-lived)"
$url = 'https://api.line.me/v1/oauth/verify';
$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);

$result = curl_exec($ch);
curl_close($ch);

echo $result;
?>
