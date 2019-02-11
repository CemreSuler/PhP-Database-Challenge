<?php
   session_start();
   	   $edited = isset($_REQUEST['edited']) ? $_REQUEST['edited'] : null;
   	   $logout = isset($_REQUEST['logout']) ? $_REQUEST['logout'] : null;
    		if($edited == 1) {
    			if(session_destroy()) {
             header("Location: login.php?edited=1");
            }
    		}
    		if($logout == 1) {
    			if(session_destroy()) {
             header("Location: login.php?logout=1");
            }
    		}
         
?>