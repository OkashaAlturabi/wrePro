<?php 
    error_reporting(0);

    session_start(); 
    include_once("check_session.php");
    include_once("shared_data.php"); 
?>
        
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>WRE - Dashboard</title>
        <?php
            include_once("css.php");                       
        ?>	               
</head>
<body>                 
        <?php
              include_once("header.php");                          
        ?>    
        <br/>     
        <br/> 
        <br/>                        
        <?php
              include_once("cpmenu.php");                               
        ?> 		             
        <div style="clear:both;"></div>             
        <?php
              include_once("footer.php");                               
        ?>  
</body>
</html>