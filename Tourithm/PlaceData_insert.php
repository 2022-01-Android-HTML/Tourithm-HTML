<?php
	$con = mysqli_connect("localhost", "idox23", "minjeong23", "idox23");
	mysqli_query($con,'SET NAMES utf8');

	if (!$con) {
		die("연결에 실패 하였습니다.".mysqli_connect_error());
	}

	$name = $_POST['name'];
	$categori = $_POST['categori'];
	$add_road = $_POST['add_road'];
	$add_area = $_POST['add_area'];
	$latitude = $_POST['latitude'];
	$longitude = $_POST['longitude'];
	$intro = $_POST['intro'];
	$tel = $_POST['tel'];

	// 안드로이드에서 입력받은 값을 테이블에 추가
	$q = "INSERT INTO tour (name, categori, add_road, add_area, latitude, longitude, intro, tel) values ('$name', '$categori', '$add_road', '$add_area', '$latitude', '$longitude', '$intro', '$tel')";
	mysqli_query($con, $q);

	// 실행을 위해 SQL문 준비
	$statement = mysqli_prepare($con, "SELECT * FROM tour");
	mysqli_stmt_bind_param($statement, "ssssssss", $name, $categori, $add_road, $add_area, $latitude, $longitude, $intro, $tel);

	// 준비된 명령문을 실행
	mysqli_stmt_execute($statement);
	mysqli_stmt_store_result($statement);

	// 결과 저장을 위해 준비된 명령문에 변수를 바인드
	mysqli_stmt_bind_result($statement, $name, $categori, $add_road, $add_area, $latitude, $longitude, $intro, $tel);

	$response = array();
	$response["success"] = false;

	// 준비된 명령문의 결과를 바인딩 된 변수로 가져오기
	while(mysqli_stmt_fetch($statement)) {
		$response["success"] = true;
		$response["name"] = $name;
		$response["categori"] = $categori;
		$response["add_road"] = $add_road;
		$response["add_area"] = $add_area;
		$response["latitude"] = $latitude;
		$response["longitude"] = $longitude;
		$response["intro"] = $intro;
		$response["tel"] = $tel;
	}

	echo json_encode($response);
	mysqli_close($con);
?>