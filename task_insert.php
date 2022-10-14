<?php
	$con = mysqli_connect("localhost", "idox23", "minjeong23", "idox23");
	mysqli_query($con,'SET NAMES utf8');

	if (!$con) {
		die("���ῡ ���� �Ͽ����ϴ�.".mysqli_connect_error());
	}

	$category = $_POST['category'];
	$details = $_POST['details'];
	$info = $_POST['info'];
	$location = $_POST['location'];
	$point = $_POST['point'];
	$period = $_POST['period'];
	$userid = $_POST['userid'];
	$accepted = $_POST['accepted'];

	// �ȵ���̵忡�� �Է¹��� ���� ���̺� �߰�
	$q = "INSERT INTO task (category, details, info, location, point, period, userid, accepted) values ('$category', '$details', '$info', '$location', '$point', '$period', '$userid', '$accepted')";
	mysqli_query($con, $q);

	// ������ ���� SQL�� �غ�
	$statement = mysqli_prepare($con, "SELECT * FROM task");
	mysqli_stmt_bind_param($statement, "ssssssss", $category, $details, $info, $location, $point, $period, $userid, $accepted);

	// �غ�� ��ɹ��� ����
	mysqli_stmt_execute($statement);
	mysqli_stmt_store_result($statement);

	// ��� ������ ���� �غ�� ��ɹ��� ������ ���ε�
	mysqli_stmt_bind_result($statement, $category, $details, $info, $location, $point, $period, $userid, $accepted);

	$response = array();
	$response["success"] = false;

	// �غ�� ��ɹ��� ����� ���ε� �� ������ ��������
	while(mysqli_stmt_fetch($statement)) {
		$response["success"] = true;
		$response["category"] = $category;
		$response["details"] = $details;
		$response["info"] = $info;
		$response["location"] = $location;
		$response["point"] = $point;
		$response["period"] = $period;
		$response["userid"] = $userid;
		$response["accepted"] = $accepted;
	}

	echo json_encode($response);
	mysqli_close($con);
?>