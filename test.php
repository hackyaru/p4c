
 <?php


$to_id="jueun@snu.ac.kr";
$from_id="lanius12@naver.com";
$pass="a2236901@@";
$title="메일 제목";
$article="메일 내용";


require_once("class.phpmailer.php");

$smtp="smtp.naver.com";
$mail=new PHPMailer(true);
$mail->IsSMTP();


try{
$mail->Host=$smtp;
$mail->SMTPAuth=true;
$mail->Port=465;
$mail->SMTPSecure="ssl";
$mail->Username=$from_id;
$mail->Password=$pass;
$mail->CharSet = "UTF-8";
$mail->SetFrom($from_id);
$mail->AddAddress($to_id);
$mail->Subject=$title;
$mail->MsgHTML($article);
$mail->Send();
} catch (phpmailerException $e){
echo $e->errorMessage();
} catch (Exception $e){
echo $e->getMessage();
}

echo "메일이 발송되었습니다";


?>