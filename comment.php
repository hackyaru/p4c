<?php
	$conn = mysqli_connect("localhost","root","1234","page");
	$query = "insert into comment values ('".$_GET['board']."', ".$_GET['no'].", '".$_POST['content']."', '".$_COOKIE['id']."');";
	$result =mysqli_query($conn, $query);
	echo "<script>alert('댓글 작성이 완료되었습니다.');</script>";
	echo "<script>location.href='".$_GET['board'].".php';</script>";
	
?>