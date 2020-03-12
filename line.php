<?php

function send_LINE($msg){
 $access_token = 'ZsjooYaFc1A8q/6SxuUfyRR1Lm5/24rZGtMp/CjtF//WV3G00ggLmm+zM8jbOGbNnaj+o9Te50l4TumGndTTQ8k/7VgRftZAPAGZLcVhln8GRSPDwBx0XPzqXkVTi+9VSouiF8yao+tKNiy+jh71QQdB04t89/1O/w1cDnyilFU=';    //PUT LINE token ID at "Channel access token (long-lived)" 
 $messages = [
        'type' => 'text',
        'text' => $msg
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [
        'to' => 'U4af321e7128675c8ab43de6c7a2efa6c',         //PUT LINE ID at "Your user ID"
        'messages' => [$messages],
      ];
      $post = json_encode($data);
      $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
      $result = curl_exec($ch);
      curl_close($ch);

      echo $result . "\r\n"; 
}

?>
