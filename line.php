 <?php
  

function send_LINE($msg){
 $access_token = 'rywDLkPoZ5uXtyR+R0b3DwwpO2jnnEDFCqu96HnpCb0kyr/rbMMGM1RSOv2CbbWUuGQ4qDg9zll9/XQN0Xp2rkuDAn+cBVf5gkm8mTqNSh/DTrgxHKG1ZUXvyMeF5JC1K3pI4OwwaQ9r/sZEqCQqXQdB04t89/1O/w1cDnyilFU=
';

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url =  'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => 'a31703ea42601afb9664f8aa1c608db5',
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
