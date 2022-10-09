<?php
	$conn = mysqli_connect("localhost","root","1234","page");
	$query = "select * from ".$_GET['board']." where no = ".$_POST['no'].";";
	$result =mysqli_query($conn, $query);
	$row = mysqli_fetch_array($result);
	if(!isset($_COOKIE['view'])) {
		$query="update ".$_GET['board']." SET view=".(string)($row['view']+1)." WHERE no=".$_POST['no'].";";
		setcookie('id',$_POST['id'],time() + 3600, "/");
	}
		echo "
<html>
<head>
	<title>".$row['title']."</title>
</head>
<body>
	
	
	<p>
	제목: ".$row['title']."
	</p>
	<p>
	".$row['content']."
	</p>
	<p>
	
	<form method='post' action='writesave.php?board=".$_GET['board']."'>
	<input type='text' name='content'>
	
		<input type='submit'
			   value='댓글쓰기'
			   />
	</form>
</body>
</html>"
	?>