<?php

	require '../db_config.php';
	require 'custom_function.php';
	session_start();


	//creating a complaint/issue to Department
	if(isset($_POST['btn-facultyIssue'])){
		$issue = $_POST['issue'];
		$user_id = $_SESSION['user_id'];
		$sql = "INSERT INTO faculty_issues (issue, user_id) VALUES ('$issue','$user_id')";

		if ($db->query($sql) === TRUE) {
		  header('Location: issues_create.php?msg=success');
		 
		} else {
		  echo "Error: " . $sql . "<br>" . $db->error;
		}


	}


	//recommending a grader to department
	if(isset($_GET['recommend_id'])){
		$id = $_GET['recommend_id'];

		$sql = "UPDATE ua_grader_application SET status = 1 WHERE id = '$id'";
		$db->query($sql);

		header("Location: grader_index.php?msg=success");
	}
		



?>