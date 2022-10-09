<?php
	$conn = mysqli_connect("localhost","root","1234","page");
	$query = "select * from users where id = '".$_POST['id']."';";
	$result =mysqli_query($conn, $query);
	$row = mysqli_fetch_array($result);
	if(! $row) {
		echo "<script>alert('아이디가 없습니다. 회원가입을 먼저 진행해주세요.');</script>";
		echo "<script>location.href='index.php';</script>";
	} else {
		if($row['pw'] == $_POST['pw']) {
			echo "<script>location.href='board1.php';</script>";
			setcookie('id',$_POST['id'],time() + 10800, "/");
		} else {
			echo "<script>alert('비밀번호가 틀렸습니다.');</script>";
			echo "<script>location.href='index.php';</script>";
		}
	}
?>