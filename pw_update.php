<?php
	$con = mysqli_connect("localhost", "idox23", "minjeong23", "idox23");
	mysqli_query($con,'SET NAMES utf8');

	if (!$con) {
		die("���ῡ ���� �Ͽ����ϴ�.".mysqli_connect_error());
	}

	$userID = $_POST['userID'];
	$hashedPassword = password_hash($_POST['userPW'], PASSWORD_DEFAULT);

	// �ȵ���̵忡�� �Է¹��� ���� ���̺� �߰�
	$q = "UPDATE user SET userPW = '$hashedPassword' WHERE userID = '$userID'";
	mysqli_query($con, $q);

	mysqli_close($con);
?>