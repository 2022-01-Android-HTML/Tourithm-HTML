<?php
	$con = mysqli_connect("localhost", "idox23", "minjeong23", "idox23");
	mysqli_query($con,'SET NAMES utf8');
	if (!$con) {
		die("연결에 실패 하였습니다.".mysqli_connect_error());
	}

	// 실행을 위해 SQL문 준비
	// task_test 테이블 레코드 모두 출력, UTF-8 인코딩 안됨
	$statement = mysqli_prepare($con, "SELECT add_road FROM tour");
	mysqli_stmt_bind_param($statement, "s", $add_road);

	// 준비된 명령문을 실행
	mysqli_stmt_execute($statement);
	mysqli_stmt_store_result($statement);

	// 결과 저장을 위해 준비된 명령문에 변수를 바인드
	mysqli_stmt_bind_result($statement, $add_road);

	$result_array = array();
	// 준비된 명령문의 결과를 바인딩 된 변수로 가져오기
	while(mysqli_stmt_fetch($statement)) {
		$row_array = array(
			"add_road" => $add_road
		);
	
		array_push($result_array, $row_array);	
	}

	$arr = array(
		"results" => $result_array
	);

	echo json_encode($arr);
	mysqli_close($con);
?>