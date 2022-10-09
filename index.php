


<html>
<head>
	<title>로그인</title>
</head>
<body>
	<p>
		자신의 글을 남길 수 있는 게시판입니다.
	</p>
	<p>
		이용을 원하시면 로그인하시거나 회원가입을 해주세요.
	</p>
	<form method="post" action="login.php">
	<p>
	아이디: <input type="text" name="id">	
	</p>
	
	<p>
	비밀번호: <input type="text" name="pw">	
	</p>
		
	
		<input type='submit'
			   value='로그인'
			   />
	</form>
	<form action="join.php">
		<input type='submit'
			   value='회원가입'
			   />
	</form>
</body>
</html>