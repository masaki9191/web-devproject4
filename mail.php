<?php

// $recipient = "wada@webright.co.jp";
$recipient = "williamhart9191@gmail.com";

// Subject
$subject = '【お問い合わせがありました】Nemophila Inc.';

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$company = $_POST['company'];
$message = $_POST['message'];


$text = '<p><span class="label">氏名:</span><span>'.$name.'</span></p>';
$text .= '<p><span class="label">メールアドレス:</span><span>'.$email.'</span></p>';
$text .= '<p><span class="label">電話番号:</span><span>'.$phone.'</span></p>';
$text .= '<p><span class="label">会社名:</span><span>'.$company.'</span></p>';
$text .= '<p><span class="label">お問い合わせ内容:</span></p>';
$text .= '<p>'.$message.'</p>';

// Message
$content = '
<html lang="jp">
<head>
  <meta charset="UTF-8">
  <title>Mail Send</title>
  <style>
    .label {
      color: black;
    }
  </style>
</head>
<body>
  '.$text.'
</body>
</html>
';

// To send HTML mail, the Content-type header must be set
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=iso-8859-1';

// Additional headers
$headers[] = 'To: '.$recipient;
$headers[] = 'From: '.$email;

// Mail it
mail($recipient, $subject, $content, implode("\r\n", $headers)) or die("Error!");


// Subject
$subject1 = '【お問い合わせがありました】Nemophila Inc.';

$text1 = '<p>お問い合わせ頂きありがとうございます。担当者より追ってご連絡させて頂きます。</p>';

// Message
$content1 = '
<html lang="jp">

<head>
  <meta charset="UTF-8">
  <title>Mail Send</title>
  <style>
    .label {
    }
  </style>
</head>
<body>
  '.$text1.'
</body>
</html>
';

// To send HTML mail, the Content-type header must be set
$headers1[] = 'MIME-Version: 1.0';
$headers1[] = 'Content-type: text/html; charset=iso-8859-1';

// Additional headers
$headers1[] = 'To: '.$email;
$headers1[] = 'From: '.$recipient;

// Mail it
mail($email, $subject1, $content1, implode("\r\n", $headers1)) or die("Error!");


echo "お問い合わせ完了";

?>