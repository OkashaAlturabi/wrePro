<?php session_start();
   
    if ( $_SESSION['CPlogin'] != "ON" )  	 	    
	{
		echo '<script > document.location="../index.php";  </script>';  	  
	}
?>