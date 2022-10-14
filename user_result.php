<?php
	$con = mysqli_connect("localhost", "idox23", "minjeong23", "idox23");
	mysqli_query($con,'SET NAMES utf8');
	if (!$con) {
		die("���ῡ ���� �Ͽ����ϴ�.".mysqli_connect_error());
	}

	// ������ ���� SQL�� �غ�
	$statement = mysqli_prepare($con, "SELECT i.profile, u.userID, u.name, u.dept, u.tel, u.birth, i.intro FROM user u JOIN info i ON u.userID = i.userID");
	mysqli_stmt_bind_param($statement, "ssssss", $profile, $userID, $name, $dept, $tel, $birth, $intro);

	// �غ�� ��ɹ��� ����
	mysqli_stmt_execute($statement);
	mysqli_stmt_store_result($statement);

	// ��� ������ ���� �غ�� ��ɹ��� ������ ���ε�
	mysqli_stmt_bind_result($statement, $profile, $userID, $name, $dept, $tel, $birth, $intro);

	$result_array = array();
	// �غ�� ��ɹ��� ����� ���ε� �� ������ ��������
	while(mysqli_stmt_fetch($statement)) {
		$row_array = array(
			"profile" => $profile,
			"userid" => $userID,
			"name" => $name,
			"dept" => $dept,
			"tel" => $tel,
			"birth" => $birth,
			"intro" => $intro
		);
	
		array_push($result_array, $row_array);	
	}

	$arr = array(
		"results" => $result_array
	);

	echo json_encode($arr);
	mysqli_close($con);
?>