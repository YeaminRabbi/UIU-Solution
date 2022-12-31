<?php

	require '../db_config.php';
	require 'custom_function.php';
	session_start();

	//requestiong for requsition
	if(isset($_POST['btn_requsition_form_submission'])){

		$user_id = $_POST['user_id'];
		$item = $_POST['item'];
		$quantity = $_POST['quantity'];
		$details = $_POST['details'] ?? '';

		$sql = "INSERT INTO requisition_order_list (item,quantity,details, user_id) VALUES ('$item','$quantity', '$details', '$user_id')";

		if ($db->query($sql) === TRUE) {
		  header('Location: req_form.php?msg=success');
		 
		} else {
		  echo "Error: " . $sql . "<br>" . $db->error;
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
		

//User profile Edit or Update
if(isset($_POST['btn-ProfileUpdate']))
{
	$user_id = $_POST['user_id'];
	$name = $_POST['name'];
	$contact = $_POST['contact'];
	$password = $_POST['password'];



	$sql = "UPDATE `user` SET name = '$name' , contact = '$contact',password = '$password' WHERE id='$user_id'";

	$db->query($sql);


	
		if(isset($_FILES['upload']['name']))
		{
			$files = array_filter($_FILES['upload']['name']); //Use something similar before processing files.
			// Count the number of uploaded files in array
			$total_count = count($_FILES['upload']['name']);
			
			// Loop through every file
			for( $i=0 ; $i < $total_count ; $i++ ) {
			   //The temp file path is obtained
			   $tmpFilePath = $_FILES['upload']['tmp_name'][$i];
			   //A file path needs to be present
			   if ($tmpFilePath != ""){
			      //Setup our new file path
			      $newFilePath = "../images/" .'User_'. $_FILES['upload']['name'][$i];
			      //File is uploaded to temp dir
			      if(move_uploaded_file($tmpFilePath, $newFilePath)) {
			     		$sql1 = "UPDATE `user` SET image = '$newFilePath' WHERE id='$user_id'";
						$db->query($sql1);

			      }
			   }
			}
		}

	header("Location: profile.php?update=on");


}


?>