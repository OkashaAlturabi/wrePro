<?php    
    session_start();
	require_once("../config/config.php");
	
    $sql = "select * from users where UserName = '".$_POST["username"]."' and password ='".md5($_POST["password"])."'";
    $result = $mysqli->query($sql);          
 
	if ($result->num_rows == 0)  
	{
		$_SESSION["loginError"] = 'ON';        
        echo '<script > document.location="../index.php";  </script>';  	  	   
	}
	else
	{
		$row = $result->fetch_assoc();
        
        $sql = "update users set LastLoginDateTime=NOW() whete Code=".$row["Code"];
        $mysqli->query($sql);   
        $mysqli->close();
        
		$_SESSION["CPlogin"] = 'ON';
        $_SESSION['UserCode'] = $row["Code"];
		$_SESSION["RoleCode"] = $row['RoleCode'];
        $_SESSION["UserName"] = $row['UserName'];
        $_SESSION["Name"]     = $row['Name'];
        
        echo '<script > document.location="../pages/home.php";  </script>';		
	}	    			   	
 ?>