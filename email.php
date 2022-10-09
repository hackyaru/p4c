


<html>
<head>
	<title>이메일 인증</title>
</head>
<body>
	<p>
		이메일 인증을 해주세요
	</p>
	<p>
	</p>
	<?php
		echo "<form method='post' action='emailsend.php?id=".$_GET['id']."%pw=".$_GET['pw']."'>
	
	<p>
	이메일: <input type="text" name="email">	
	</p>
		
	
		<input type='submit'
			   value='이메일 보내기'
			   />
	</form>"
	?>
</body>
</html>

