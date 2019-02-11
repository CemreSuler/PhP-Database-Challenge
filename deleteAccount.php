<?php	
	include('session.php');
	include('config.php');
	
	
	$deleteAccount = "DELETE FROM passenger_information WHERE passenger_username = '$user_check'";
    $deleteAdmin = isset($_REQUEST['id']) ? $_REQUEST['id'] : null;
    	
    if(!empty($deleteAdmin)) {
    $deladm = "DELETE FROM passenger_information WHERE passenger_id = '$deleteAdmin'";
    mysqli_query($db, $deladm);
         header("location: admin.php?deleted=1");
    } else {		
        if (mysqli_query($db, $deleteAccount)) {
            header("location: login.php?deleted=1");
        } else {
             echo "Error deleting record: " . mysqli_error($db);
        }
    }
        
	?>