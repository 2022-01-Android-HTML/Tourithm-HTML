<?php
	$con = mysqli_connect("localhost", "idox23", "minjeong23", "idox23");
	mysqli_query($con,'SET NAMES utf8');

	include "./password.php";

	$hashedPassword = password_hash($_POST['userPW'], PASSWORD_DEFAULT);
	//echo $hashedPassword;

	if (!$con) {
		die("ȸ������ DB ���� ����".mysqli_connect_error());
	}

	$userID = $_POST['userID'];
	$name = $_POST['name'];
	$tel = $_POST['tel'];
	$profile = $_POST['profile'];

	$join_sql = "SELECT userID FROM user WHERE userID = '$userID'";
	$join_result = mysqli_query($con, $join_sql);
	while($join_row = mysqli_fetch_array($join_result)){
		$userID_e = $join_row['userID'];
	}
	if($userID == $userID_e) { // ID �ߺ� �˻�
		$response["success"] = false;
	}
	else { // �ȵ���̵忡�� �Է¹��� ���� ���̺� �߰�
		$sql = "INSERT INTO user (userID, userPW, name, tel) values ('$userID', '$hashedPassword', '$name', '$tel')";
		mysqli_query($con, $sql);
		$sql2 = "INSERT INTO info (userID, profile) values ('$userID', '$profile')";
		mysqli_query($con, $sql2);

		$response["success"] = true;
	}

	// $response = array();

	echo json_encode($response);
	mysqli_close($con);
?>