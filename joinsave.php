<?php
	if($_GET['key'] == $_POST['code']) {
		$conn = mysqli_connect("localhost","root","1234","page");
		$query = "insert into users values (".$_GET['id'].", ".$_GET['pw'].", ".$_GET['email'].")";
		$result =mysqli_query($conn, $query);
		echo "<script>alert('회원가입에 성공했습니다. 로그인 해주세요.');</script>";
		echo "<script>location.href='index.php';</script>";
	}
	else{
		echo "<script>alert('회원가입에 실패했습니다. 처음부터 다시 해주세요.');</script>";
		echo "<script>location.href='index.php';</script>"; 
	}
	
?>