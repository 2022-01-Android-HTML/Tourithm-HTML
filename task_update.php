<?php
	$con = mysqli_connect("localhost", "idox23", "minjeong23", "idox23");
	mysqli_query($con,'SET NAMES utf8');

	if (!$con) {
		die("���ῡ ���� �Ͽ����ϴ�.".mysqli_connect_error());
	}

	$accepted = $_POST['accepted'];
	$info = $_POST['info'];
	$location = $_POST['location'];
	$point = $_POST['point'];
	$userid = $_POST['userid'];

	// �ȵ���̵忡�� �Է¹��� ���� ���̺� �߰�
	$q = "UPDATE task SET accepted = '$accepted' WHERE info = '$info' AND location = '$location'";
	mysqli_query($con, $q);

	// ������ ���� SQL�� �غ�
	$statement = mysqli_prepare($con, "SELECT info, userid, accepted FROM task");
	mysqli_stmt_bind_param($statement, "sss", $info, $userid, $accepted);

	// �غ�� ��ɹ��� ����
	mysqli_stmt_execute($statement);
	mysqli_stmt_store_result($statement);

	// ��� ������ ���� �غ�� ��ɹ��� ������ ���ε�
	mysqli_stmt_bind_result($statement, $info, $userid, $accepted);

	$response = array();
	$response["success"] = false;

	// �غ�� ��ɹ��� ����� ���ε� �� ������ ��������
	while(mysqli_stmt_fetch($statement)) {
		$response["success"] = true;
		$response["info"] = $info;
		$response["userid"] = $userid;
		$response["accepted"] = $accepted;
	}

	echo json_encode($response);
	mysqli_close($con);
?>