<?php
	$con = mysqli_connect("localhost", "idox23", "minjeong23", "idox23");
	mysqli_query($con,'SET NAMES utf8');

	if (!$con) {
		die("���ῡ ���� �Ͽ����ϴ�.".mysqli_connect_error());
	}

	$name = $_POST['name'];
	$categori = $_POST['categori'];
	$add_road = $_POST['add_road'];
	$add_area = $_POST['add_area'];
	$latitude = $_POST['latitude'];
	$longitude = $_POST['longitude'];
	$intro = $_POST['intro'];
	$tel = $_POST['tel'];

	// �ȵ���̵忡�� �Է¹��� ���� ���̺� �߰�
	$q = "INSERT INTO tour (name, categori, add_road, add_area, latitude, longitude, intro, tel) values ('$name', '$categori', '$add_road', '$add_area', '$latitude', '$longitude', '$intro', '$tel')";
	mysqli_query($con, $q);

	// ������ ���� SQL�� �غ�
	$statement = mysqli_prepare($con, "SELECT * FROM tour");
	mysqli_stmt_bind_param($statement, "ssssssss", $name, $categori, $add_road, $add_area, $latitude, $longitude, $intro, $tel);

	// �غ�� ��ɹ��� ����
	mysqli_stmt_execute($statement);
	mysqli_stmt_store_result($statement);

	// ��� ������ ���� �غ�� ��ɹ��� ������ ���ε�
	mysqli_stmt_bind_result($statement, $name, $categori, $add_road, $add_area, $latitude, $longitude, $intro, $tel);

	$response = array();
	$response["success"] = false;

	// �غ�� ��ɹ��� ����� ���ε� �� ������ ��������
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