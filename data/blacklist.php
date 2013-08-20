<?php
//include db configuration file
include_once("../config.php");
if(isset($_POST["recordToDelete"]) && strlen($_POST["recordToDelete"])>0 && is_numeric($_POST["recordToDelete"]))
{	
	$idToDelete = filter_var($_POST["recordToDelete"],FILTER_SANITIZE_NUMBER_INT); 
	
	if(!mysql_query("DELETE FROM add_delete_black WHERE id=".$idToDelete))
	{    
		//If mysql delete query was unsuccessful, output error 
		header('Content-type:text/html;charset=utf-8, Could not delete record!');
		exit();
	}
	mysql_close($connecDB); //close db connection
}
else
{
	//Output error
	header('Content-type:text/html;charset=utf-8, Could not process request!');
    exit();
}
?>
