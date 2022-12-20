<?php

	require '../db_config.php';
	require 'custom_function.php';
	session_start();
	//approve subscription request
	if(isset($_GET['sub_id'])){
		$id = $_GET['sub_id'];
		$sql = "UPDATE `user` SET subscription = 2  WHERE id='$id'";

		$db->query($sql);

		header("Location: sub.php?msg=success");
	}
	//creating a job post
	if(isset($_POST['btn_jobportalFormSubmit'])){
		$title = $_POST['title'];
		$company = $_POST['company'];
		$position = $_POST['position'];
		$dept = $_POST['dept'];
		$deadline = $_POST['deadline'];
		$details = $_POST['details'];
		
		$sql = "INSERT INTO job_portal (title,company, position, dept, deadline, details) VALUES ('$title','$company', '$position', '$dept', '$deadline', '$details')";

		if ($db->query($sql) === TRUE) {
		  header('Location: job_portal_form.php?msg=success');
		 
		} else {
		  echo "Error: " . $sql . "<br>" . $db->error;
		}
	}

	//approving grader application
	if(isset($_GET['grader_permit_recommend_id'])){
		$id = $_GET['grader_permit_recommend_id'];
		$sql = "UPDATE `ua_grader_application` SET status = 2 WHERE id='$id'";

		$db->query($sql);
  
		header("Location: grader_request.php?msg=success");
	}

	//reject grader application
	if(isset($_GET['grader_reject_recommend_id'])){
		$id = $_GET['grader_reject_recommend_id'];


		// sql to delete a record
		$sql = "DELETE FROM ua_grader_application WHERE id='$id'";

		if ($db->query($sql) === TRUE) {
			header("Location: grader_request.php?msg=removed");
			die();
		} else {
		echo "Error deleting record: " . $conn->error;
		}


		
	}

	// apporving project proposal
	if(isset($_GET['proposeID'])){
		$id = $_GET['proposeID'];
		$sql = "UPDATE `project_proposal` SET status = 1 WHERE id='$id'";

		$db->query($sql);
  
		header("Location: project_proposal_application.php?update=on");


	}
	//creating a complaint/issue to Department
	if(isset($_POST['btn-ReplyfacultyIssue'])){
		$issue_id = $_POST['issue_id'];
		$reply = $_POST['reply'];
		

		$sql = "UPDATE `faculty_issues` SET reply = '$reply', status = 1 WHERE id='$issue_id'";

		$db->query($sql);
  
		header("Location: issues_index.php?update=on");


	}






?>