<?php
	$con = mysqli_connect("localhost", "idox23", "minjeong23", "idox23");
	mysqli_query($con,'SET NAMES utf8');

	if (!$con) {
		die("ȸ������ DB ���� ����".mysqli_connect_error());
	}

	$userID = $_POST['userID'];

	$join_sql = "SELECT userID FROM user WHERE userID = '$userID'";
	$join_result = mysqli_query($con, $join_sql);
	while($join_row = mysqli_fetch_array($join_result)){
		$userID_e = $join_row['userID'];
	}
	if($userID == $userID_e) { // ID �ߺ� �˻�
		$response["success"] = false;
	}
	else { // �ȵ���̵忡�� �Է¹��� ���� ���̺� �߰�
		$response["success"] = true;
	}

	// $response = array();

	echo json_encode($response);
	mysqli_close($con);
?>