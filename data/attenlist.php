<?php
//include db configuration file
include_once("../config.php");
if(isset($_POST["recordToDelete"]) && strlen($_POST["recordToDelete"]) > 0 && is_numeric($_POST["recordToDelete"]))
{	
	$idToDelete = filter_var($_POST["recordToDelete"],FILTER_SANITIZE_NUMBER_INT); 
	
	$sql = "UPDATE add_delete_black SET atten=0 WHERE id='".$idToDelete."'";
	
	// Insert sanitize string in record
	if(mysql_query($sql)){
		  mysql_close($connecDB); //close db connection

	}else{
		
		//header('HTTP/1.1 500 '.mysql_error()); //display sql errors.. must not output sql errors in live mode.
		header('操作失败，请稍后重试!');
		echo $idToDelete; 
		exit();
	}

		
  }
?>
