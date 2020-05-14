<div id="header">  		                        
    <div id="header-status">
        <div class="container_12">
            <div class="grid_8">
                 
    	     <div id="header-title"><img src="images/logo.png" alt="edit" width="70" height="70" />  WRE Report System CPanel</div>

            </div>
            <div class="grid_4">
                <a href="../controllers/logout.php" id="logout"> <img width="16" height="16" src="images/exit.png" />Logout </a> 
                <a href="updateuser.php?id=<?=$_SESSION["UserCode"];?>" id="logout"><img width="16" height="16" src="images/user.png" />
                <?php 
                    session_start();         
                    if ( $_SESSION['RoleCode'] == "1" )  	 	    
    	               echo 'Administrator: '.$_SESSION["Name"];
                    if ( $_SESSION['RoleCode'] == "2" )  	 	    
    	               echo 'User: '.$_SESSION["Name"];
                ?>
            &nbsp;</a>
            </div>
        </div>
        <div style="clear:both;"></div>
    </div>    
</div> 