<?php
	$con = mysqli_connect("localhost", "idox23", "minjeong23", "idox23");
	mysqli_query($con,'SET NAMES utf8');

	if (!$con) {
		die("���ῡ ���� �Ͽ����ϴ�.".mysqli_connect_error());
	}

	$userID = $_POST['userID'];
	$intro = $_POST['intro'];

	// �ȵ���̵忡�� �Է¹��� ���� ���̺� �߰�
	$q = "UPDATE info SET intro = '$intro' WHERE userID = '$userID'";
	mysqli_query($con, $q);

	// ������ ���� SQL�� �غ�
	$statement = mysqli_prepare($con, "SELECT userID, intro FROM info");
	mysqli_stmt_bind_param($statement, "ss", $userID, $intro);

	// �غ�� ��ɹ��� ����
	mysqli_stmt_execute($statement);
	mysqli_stmt_store_result($statement);

	// ��� ������ ���� �غ�� ��ɹ��� ������ ���ε�
	mysqli_stmt_bind_result($statement, $userID, $intro);

	$response = array();
	$response["success"] = false;

	// �غ�� ��ɹ��� ����� ���ε� �� ������ ��������
	while(mysqli_stmt_fetch($statement)) {
		$response["success"] = true;
		$response["userID"] = $userID;
		$response["intro"] = $intro;
	}

	echo json_encode($response);
	mysqli_close($con);
?>