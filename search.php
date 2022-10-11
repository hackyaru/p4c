<html>
<head>
	<title>검색결과</title>
	검색결과
</head>
<body>
	<table border="1" width="1000" height="100">
		<tr height="100">
			<th width="100">글번호</th>
			<th width="600">제목</th>
			<th width="100">작성자</th>
			<th width="100">추천수</th>
			<th width="100">조회수</th>
		</tr>
		<?php
		$conn = mysqli_connect("localhost","root","1234","page");
		if($_POST['board']=='boardall') {
			$query = "select * from board1, board2 ";
		}
		else if($_POST['board']=='board1') {
			$query = "select * from board1 ";
		}
		else{
			$query = "select * from board2 ";
		}
		if($_POST['type']=='title') {
			$query= $query."where title like '%".$_POST['text']."%';";
		}
		else if($_POST['type']=='content') {
			$query= $query."where content like '%".$_POST['text']."%';";
		}
		else {
			$query= $query."where title like '%".$_POST['text']."%' or content like '%".$_POST['text']."%';";
		}
		$result =mysqli_query($conn, $query);
		while($row = mysqli_fetch_array($result)) {
			print "<tr height='50'> <th>".$row['no']."</th><th><A href='write.php?board=board1&no=".$row['no']."'>".$row['title']."</A></th><th>".$row['id']."</th><th>".$row['star']."</th><th>".$row['view']."</th></tr>";
		}
		?>
	</table>
	<p>
	</p>
	<p>
	</p>
	<form method="post" action="search.php">
	<select name="board">
    <option value="board1">게시판1</option>
    <option value="board2">게시판2</option>
    <option value="boardall">전체</option>
	</select>
	<select name="type">
    <option value="title">제목</option>
    <option value="body">내용</option>
    <option value="textall">전체</option>
	</select>
	
	<input type="text" name="text">	
	
		<input type='submit'
			   value='검색'
			   />
	</form>
</body>
</html>