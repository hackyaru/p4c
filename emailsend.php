<?php
	$key = rand(100000,999999);
	mail($_POST['email'],"인증 메일 발송",(string)$key,"From: lanius12@naver.com\r\n");
	echo "<p>보내드린 6자리 숫자를 똑같이 입력해 주세요</p>";
	echo "
	<form method='post' action='joinsave.php?id='".$_GET['id']."&pw=".$_GET['pw']."&email=".$_POST['email']."&key=".(string)$key."'>
	<p>
	코드: <input type='text' name='code'>	
	</p>
		
	
		<input type='submit'
			   value='확인'
			   />
	</form>"

?>
