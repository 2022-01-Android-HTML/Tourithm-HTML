<?php
	$con = mysqli_connect("localhost", "idox23", "minjeong23", "idox23");
	mysqli_query($con,'SET NAMES utf8');

	if (!$con) {
		die("���ῡ ���� �Ͽ����ϴ�.".mysqli_connect_error());
	}

	$userID = $_POST['userID'];
	// $userPW = $_POST['userPW'];

	// Ż��� ���� ���� ����
	$q1 = "DELETE FROM user WHERE userID = '$userID'";
	mysqli_query($con, $q1);

	// ���Ἲ ���� ���� info ���̺����� ��������� ��.
	$q2 = "DELETE FROM info WHERE userID = '$userID'";
	mysqli_query($con, $q2);

	mysqli_close($con);
?>