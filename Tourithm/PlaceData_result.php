<?php
	$con = mysqli_connect("localhost", "idox23", "minjeong23", "idox23");
	mysqli_query($con,'SET NAMES utf8');
	if (!$con) {
		die("���ῡ ���� �Ͽ����ϴ�.".mysqli_connect_error());
	}

	// ������ ���� SQL�� �غ�
	// task_test ���̺� ���ڵ� ��� ���, UTF-8 ���ڵ� �ȵ�
	$statement = mysqli_prepare($con, "SELECT * FROM tour");
	mysqli_stmt_bind_param($statement, "ssssssss", $name, $categori, $add_road, $add_area, $latitude, $longitude, $intro, $tel);

	// �غ�� ��ɹ��� ����
	mysqli_stmt_execute($statement);
	mysqli_stmt_store_result($statement);

	// ��� ������ ���� �غ�� ��ɹ��� ������ ���ε�
	mysqli_stmt_bind_result($statement, $name, $categori, $add_road, $add_area, $latitude, $longitude, $intro, $tel);

	$result_array = array();
	// �غ�� ��ɹ��� ����� ���ε� �� ������ ��������
	while(mysqli_stmt_fetch($statement)) {
		$row_array = array(
			"name" => $name,
			"categori" => $categori,
			"add_road" => $add_road,
			"add_area" => $add_area,
			"latitude" => $latitude,
			"longitude" => $longitude,
			"intro" => $intro,
			"tel" => $tel
		);
	
		array_push($result_array, $row_array);	
	}

	$arr = array(
		"results" => $result_array
	);

	echo json_encode($arr);
	mysqli_close($con);
?>