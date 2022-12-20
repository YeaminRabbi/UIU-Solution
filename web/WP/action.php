<?php 
	
 	require 'db_config.php';

 	if(isset($_POST['btn-register_user']))
 	{
 		$name = $_POST['name'];
 		$email = $_POST['email'];
 		$password = $_POST['password'];

 		$sql = "INSERT INTO users (name, email, password) VALUES ('$name','$email','$password')";

		if ($db->query($sql) === TRUE) {
		  header('Location: login.php?msg=inserted');
		 
		} else {
		  echo "Error: " . $sql . "<br>" . $db->error;
		}


 	}


	//user login
	if(isset($_POST['btn-login_user']))
	{
		$email = $_POST['email'];
		$password = $_POST['password'];

		$sql = "Select count(*),id,name from users where email='$email' and password='$password';";
		$result = mysqli_query($db,$sql);
		$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
		
	
		if($row['count(*)']=="1")
		{
			
			
			session_start();
			$_SESSION['user']="VERIFIED";
			$_SESSION['user_id']=$row['id'];
			$_SESSION['user_name']=$row['name'];
			
			header("Location: index.php?login=success");
			
		}
		else
		{
			header("Location: register.php?login=error");
		}


	}


	 function fetch_all_data_usingDB($db,$sql){
			
			$result = mysqli_query($db,$sql);
		    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
		    mysqli_free_result($result);
		    return $row;
		}

?>