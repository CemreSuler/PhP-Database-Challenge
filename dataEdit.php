<?php	
	include('session.php');
	include('config.php');
			$new_username = mysqli_real_escape_string($db, $_POST['reset_username']);
			$new_email = mysqli_real_escape_string($db, $_POST['reset_email']);
			$new_city = mysqli_real_escape_string($db, $_POST['reset_city']);
			$new_firstname = mysqli_real_escape_string($db, $_POST['reset_firstname']);
			$new_lastname = mysqli_real_escape_string($db, $_POST['reset_lastname']);
			$new_password = mysqli_real_escape_string($db, $_POST['reset_password']);
			$new_geslacht = mysqli_real_escape_string($db, $_POST['reset_geslacht']);
			$editAdmin = isset($_REQUEST['id']) ? $_REQUEST['id'] : null;
    		if(!empty($editAdmin)) {
    			if(!empty($new_username)) {
			   $change_username = "UPDATE passenger_information SET passenger_username = '$new_username' WHERE passenger_id = '$editAdmin'";
			    	
			if (mysqli_query($db, $change_username)) {
    			
    			header('location: admin.php?edited=1');
			} else {
    			echo "Error updating record: " . mysqli_error($db);
			}
			}
			
			if(!empty($new_email)) {
			
			    $change_email = "UPDATE passenger_information SET passenger_email = '$new_email' WHERE passenger_id = '$editAdmin'";
					
			if (mysqli_query($db, $change_email)) {
    		header('location: admin.php?edited=1');
			} else {
    			echo "Error updating record: " . mysqli_error($db);
			}
				
			}
		    
		    if(!empty($new_city)) {
			    	$change_city = "UPDATE passenger_information SET passenger_city = '$new_city' WHERE passenger_id = '$editAdmin'";
			
				if (mysqli_query($db, $change_city)) {
    		header('location: admin.php?edited=1');
			} else {
    			echo "Error updating record: " . mysqli_error($db);
			}
			}
			
			
			if(!empty($new_firstname)) {
			    	$change_firstname = "UPDATE passenger_information SET passenger_firstname = '$new_firstname' WHERE passenger_id = '$editAdmin'";
				if (mysqli_query($db, $change_firstname)) {
    		header('location: admin.php?edited=1');
			} else {
    			echo "Error updating record: " . mysqli_error($db);
			}
			}
			
			if(!empty($new_lastname)) {
				
			    	$change_lastname = "UPDATE passenger_information SET passenger_lastname = '$new_lastname' WHERE passenger_id = '$editAdmin'";
				if (mysqli_query($db, $change_lastname)) {
    		header('location: admin.php?edited=1');
			} else {
    			echo "Error updating record: " . mysqli_error($db);
			}
				
			}
			
			if(!empty($new_geslacht)) {
				
			    	$change_geslacht = "UPDATE passenger_information SET passenger_gender = '$new_geslacht' WHERE passenger_id = '$editAdmin'";
				if (mysqli_query($db, $change_geslacht)) {
    		header('location: admin.php?edited=1');
			} else {
    			echo "Error updating record: " . mysqli_error($db);
			}
				
			}
			
			if(!empty($new_password)) {
				
			    	$change_password = "UPDATE passenger_information SET passenger_password = '$new_password' WHERE passenger_id = '$editAdmin'";
				if (mysqli_query($db, $change_password)) {
    			header('location: admin.php?edited=1');
			} else {
    			echo "Error updating record: " . mysqli_error($db);
			}
				
			}
			
			//the big else coming up
			
			
    		} else {
    		
    		
    		//that was the big else
    		
			if(!empty($new_username)) {
			   $change_username = "UPDATE passenger_information SET passenger_username = '$new_username' WHERE passenger_username = '$user_check'";
			    	
			if (mysqli_query($db, $change_username)) {
    			$_SESSION['login_user'] = $new_username;
    			$user_check = $_SESSION['login_user'];
    			header('location: logout.php?edited=1');
			} else {
    			echo "Error updating record: " . mysqli_error($db);
			}
			}
			
			if(!empty($new_email)) {
			
			    $change_email = "UPDATE passenger_information SET passenger_email = '$new_email' WHERE passenger_username = '$user_check'";
					
			if (mysqli_query($db, $change_email)) {
    			header("location: welcome.php?edited=2");
			} else {
    			echo "Error updating record: " . mysqli_error($db);
			}
				
			}
		    
		    if(!empty($new_city)) {
			    	$change_city = "UPDATE passenger_information SET passenger_city = '$new_city' WHERE passenger_username = '$user_check'";
			
				if (mysqli_query($db, $change_city)) {
    			header("location: welcome.php?edited=2");
			} else {
    			echo "Error updating record: " . mysqli_error($db);
			}
			}
			
			
			if(!empty($new_firstname)) {
			    	$change_firstname = "UPDATE passenger_information SET passenger_firstname = '$new_firstname' WHERE passenger_username = '$user_check'";
				if (mysqli_query($db, $change_firstname)) {
    			header("location: welcome.php?edited=2");
			} else {
    			echo "Error updating record: " . mysqli_error($db);
			}
			}
			
			if(!empty($new_lastname)) {
				
			    	$change_lastname = "UPDATE passenger_information SET passenger_lastname = '$new_lastname' WHERE passenger_username = '$user_check'";
				if (mysqli_query($db, $change_lastname)) {
    			header("location: welcome.php?edited=2");
			} else {
    			echo "Error updating record: " . mysqli_error($db);
			}
				
			}
			
			if(!empty($new_geslacht)) {
				
			    	$change_geslacht = "UPDATE passenger_information SET passenger_gender = '$new_geslacht' WHERE passenger_username = '$user_check'";
				if (mysqli_query($db, $change_geslacht)) {
    			header("location: welcome.php?edited=2");
			} else {
    			echo "Error updating record: " . mysqli_error($db);
			}
				
			}
			
			if(!empty($new_password)) {
				
			    	$change_password = "UPDATE passenger_information SET passenger_password = '$new_password' WHERE passenger_username = '$user_check'";
				if (mysqli_query($db, $change_password)) {
    			header("location: welcome.php?edited=2");
			} else {
    			echo "Error updating record: " . mysqli_error($db);
			}
				
			}
		
		
    		}
		
			
			
			?>