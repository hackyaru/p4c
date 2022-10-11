<html>
<head>
	<title>글쓰기</title>
</head>
<body>
	<p>
		글쓰기
	</p>
	<?php
	$file="none";
		echo "<form method='post' action='writesave.php?board=".$_GET['board']."'>
	
	
	<p>
	제목: <input type='text' name='title'>	
	</p>
	<p>
	내용
	</p>
	<p>
	<input type='text' name='content' style='width:300px;height:200px;font-size:12px;'>	
	</p>
	<p>
	<input type='file' name='file'>
	</p>
		
	
		<input type='submit'
			   value='글쓰기'
			   />
	</form>"
	?>
</body>
</html>