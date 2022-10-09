<?php
	$conn = mysqli_connect("localhost","root","1234","page");
	$query = "select * from users where id = '".$_POST['id']."';";
	$result =mysqli_query($conn, $query);
	$row = mysqli_fetch_array($result);
	if($row) {
		echo "<script>alert('아이디가 이미 있습니다. 다른 아이디로 진행해주세요.');</script>";
		echo "<script>location.href='join.php';</script>";
	} else {
		echo "<script>location.href='email.php?id=".$_POST['id']."&pw=".$_POST['pw']."';</script>";
	}
?>