<?php
	$conn = mysqli_connect("localhost","root","1234","page");
	$query = "select * from ".$_GET['board']." where no = ".$_GET['no'].";";
	$result =mysqli_query($conn, $query);
	$row = mysqli_fetch_array($result);
	if(!isset($_COOKIE['star-'.$_GET['board'].'-'.$row['no']])) {
		$query="update ".$_GET['board']." SET star=".(string)($row['star']+1)." WHERE no=".$_GET['no'].";";
		setcookie('star-'.$_GET['board'].'-'.$row['no'],$_COOKIE['id'],$_COOKIE['id'],time() + 10800, "/");
		$result =mysqli_query($conn, $query);
		echo "<script>alert('추천이 완료되었습니다.');</script>";
	echo "<script>location.href='".$_GET['board'].".php';</script>";
	}
	echo "<script>alert('이미 추천한 게시물 입니다.');</script>";
	echo "<script>location.href='".$_GET['board'].".php';</script>";
?>