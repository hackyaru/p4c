<?php
	$conn = mysqli_connect("localhost","root","1234","page");

	
	$query = "insert into ".$_GET['board']."(title, content, id, star, view) values ('".$_POST['title']."', '".$_POST['content']."', '".$_COOKIE['id']."', 0, 0);";
	
	$result =mysqli_query($conn, $query);
	if(isset($_POST['file'])) {
		$file=$_POST['file']['tmp_name'];
		$filename=$_POST['file']['name'];
		$folder="workspace/firstContainer/upload/".basename($filename);
		move_uploaded_file($file , $folder);
		$query="update ".$_GET['board']." file = '".$filename."' where no = (select max(no) from ".$_GET['board'].");";
		$result =mysqli_query($conn, $query);
	}
	
	echo "<script>alert('게시글 작성이 완료되었습니다.');</script>";
	echo "<script>location.href='".$_GET['board'].".php';</script>";
?>