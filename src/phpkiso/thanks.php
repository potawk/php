<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP基礎</title>
</head>
<body>
	
<?php
$nickname = $_POST['nickname'];
$email = $_POST['email'];
$goiken = $_POST['goiken'];

$nickname = htmlspecialchars($nickname);
$email = htmlspecialchars($email);
$goiken = htmlspecialchars($goiken);

print $nickname;
print '様<br>';
print 'ご意見ありがとうございました<br>';
print '頂いたご意見『';
print $goiken;
print '』<br>';
print $email;
print 'にメールを送りましたのでご確認ください。';

$mail_sub = 'アンケート受け付けました。';
$mail_body = $nickname . "様へ\nアンケートご協力ありがとうございました。";
$mail_body = html_entity_decode($mail_body, ENT_QUOTES, "UTF-8");
$mail_head = 'From: j--po.km-82kto@nifty.com';
mb_language('Japanese');
mb_internal_encoding("UTF-8");
mb_send_mail($email, $mail_sub, $mail_body, $mail_head);
?>

</body>
</html>
