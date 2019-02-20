 <?php
  

function send_LINE($msg){
 $access_token = 'lHshRu2fVC1Fb4DVN9WobX4qA/UP9A8gleQCowKXNJvF/Ns0sI6hLYker6wrMsWdIQKQArO5MYvxjJSUwxNQwk+ToGcABsDYuFvsGuEUusL8yEAejl0c0y1s3Vx69yOaTQBIZHz/C0810v9AtKRCpAdB04t89/1O/w1cDnyilFU='; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => 'U8778cbd46dce776a77e5abcfbf70ebc4',
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
