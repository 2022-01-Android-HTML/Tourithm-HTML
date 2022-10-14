<?php
	$con = mysqli_connect("localhost", "idox23", "minjeong23", "idox23");
	mysqli_query($con,'SET NAMES utf8');
	if (!$con) {
		die("���ῡ ���� �Ͽ����ϴ�.".mysqli_connect_error());
	}

	// ������ ���� SQL�� �غ�
	// task_test ���̺� ���ڵ� ��� ���, UTF-8 ���ڵ� �ȵ�
	$statement = mysqli_prepare($con, "SELECT add_road FROM tour");
	mysqli_stmt_bind_param($statement, "s", $add_road);

	// �غ�� ��ɹ��� ����
	mysqli_stmt_execute($statement);
	mysqli_stmt_store_result($statement);

	// ��� ������ ���� �غ�� ��ɹ��� ������ ���ε�
	mysqli_stmt_bind_result($statement, $add_road);

	$result_array = array();
	// �غ�� ��ɹ��� ����� ���ε� �� ������ ��������
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