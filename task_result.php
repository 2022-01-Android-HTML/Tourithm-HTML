<?php
	$con = mysqli_connect("localhost", "idox23", "minjeong23", "idox23");
	mysqli_query($con,'SET NAMES utf8');
	if (!$con) {
		die("���ῡ ���� �Ͽ����ϴ�.".mysqli_connect_error());
	}

	// ������ ���� SQL�� �غ�
	// task_test ���̺� ���ڵ� ��� ���, UTF-8 ���ڵ� �ȵ�
	$statement = mysqli_prepare($con, "SELECT u.name, t.category, t.details, t.info, t.location, t.point, t.period, t.userid, t.accepted FROM task t JOIN user u ON t.userid = u.userID");
	mysqli_stmt_bind_param($statement, "sssssssss", $name, $category, $details, $info, $location, $point, $period, $userid, $accepted);

	// �غ�� ��ɹ��� ����
	mysqli_stmt_execute($statement);
	mysqli_stmt_store_result($statement);

	// ��� ������ ���� �غ�� ��ɹ��� ������ ���ε�
	mysqli_stmt_bind_result($statement, $name, $category, $details, $info, $location, $point, $period, $userid, $accepted);

	$result_array = array();
	// �غ�� ��ɹ��� ����� ���ε� �� ������ ��������
	while(mysqli_stmt_fetch($statement)) {
		$row_array = array(
			"name" => $name,
			"category" => $category,
			"details" => $details,
			"info" => $info,
			"location" => $location,
			"point" => $point,
			"period" => $period,
			"userid" => $userid,
			"accepted" => $accepted
		);
	
		array_push($result_array, $row_array);	
	}

	$arr = array(
		"results" => $result_array
	);

	echo json_encode($arr);
	mysqli_close($con);
?>