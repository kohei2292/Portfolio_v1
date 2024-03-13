<?php

$request_param = $_POST;

$request_datetime = date("Y/m/d/ H:i:s");


$mailto = $request_param['email'];
$to = "kocchanjr@gmail.com";
$subject = "Thank you for contacting me";

$content = "";
$content .= $request_param['name']. "様\r\n";
$content .= "Thank you for contacting me\r\n";
$content .= "=================================\r\n";
$content .= "Name　 　　　　　　" . htmlspecialchars($request_param['name'])."\r\n";
$content .= "Email　 　　" . htmlspecialchars($request_param['email'])."\r\n";
$content .= "Content　 　" . htmlspecialchars($request_param['content'])."\r\n";
$content .= "date　 　" . $request_datetime."\r\n";
$content .= "=================================\r\n";

//管理者確認用メール
$subject2 = "Contacted me";
$content2 = "";
$content2 .= "Contacted me\r\n";
$content2 .= "=================================\r\n";
$content2 .= "Name　 　　　　　" . htmlspecialchars($request_param['name'])."\r\n";
$content2 .= "Email　 　" . htmlspecialchars($request_param['email'])."\r\n";
$content2 .= "Contact　 " . htmlspecialchars($request_param['content'])."\r\n";
$content2 .= "date   " . $request_datetime."\r\n";
$content2 .= "================================="."\r\n";

mb_language("ja");
mb_internal_encoding("UTF-8");
//mail 送信
if($request_param['token'] === '1234567'){
if(mb_send_mail($to, $subject2, $content2)){
   mb_send_mail($mailto,$subject,$content);
   ?>
   <script>
       window.location = "../mainE.html";
   </script>
   <?php
} else {
   header('Content-Type: text/html; charset=UTF-8');
 echo "Failed to Email";
};
} else {
echo "Failed to Email（Token Error）";
}

?>