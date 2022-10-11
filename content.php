<?php
	$conn = mysqli_connect("localhost","root","1234","page");
	$query = "select * from ".$_GET['board']." where no = ".$_GET['no'].";";
	$result =mysqli_query($conn, $query);
	$row = mysqli_fetch_array($result);
	if(!isset($_COOKIE['view-'.$_GET['board'].'-'.$row['no']])) {
		$query="update ".$_GET['board']." SET view=".(string)($row['view']+1)." WHERE no=".$_GET['no'].";";
		mysqli_query($conn, $query);
		setcookie('view-'.$_GET['board'].'-'.$row['no'],$_COOKIE['id'],time() + 3600, "/");
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
	";
	if(!empty($row['file'])) {
		readfile("upload/".$row['file']);
	}
	echo"
	<p>
	</p>
	작성자: ".$row['id']."
	<p>
	</p>
	<p>
	</p>
	댓글
	<p>
	</p>
	<p>";
			
	$query = "select * from comment where board='".$_GET['board']."' and no = ".$_GET['no'].";";
echo $query;

	$result =mysqli_query($conn, $query);
	while($row = mysqli_fetch_array($result)) {
			echo "<p>".$row['text']."       ".$row['id']."</p>";
	}

echo"
	<form method='post' action='star.php?board=".$_GET['board']."&no=".$_GET['no']."'>
	
		<input type='submit'
			   value='추천'
			   />
	</form>
	<form method='post' action='comment.php?board=".$_GET['board']."&no=".$_GET['no']."'>
	<input type='text' name='content'>
	
		<input type='submit'
			   value='댓글쓰기'
			   />
	</form>
</body>
</html>";
	?>

