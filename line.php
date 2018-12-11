 <?php
  

function send_LINE($msg){
 $access_token = '6glFwNzCJWIywIhdtMq1kvJMWv7umWrB18oDUgVKQ6hCkLc1PAaEO/WSl+gc/NEbuGQ4qDg9zll9/XQN0Xp2rkuDAn+cBVf5gkm8mTqNSh9LKgKqnyzRSJj5LJMv9JpVZU0hLRanSLl1XFpuwKXRPQdB04t89/1O/w1cDnyilFU=';

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url =  'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => 'e53cd352bb5b77bfb0605c2496d2488c',
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
