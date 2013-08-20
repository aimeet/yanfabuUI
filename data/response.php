<?php
//include db configuration file
include_once("../config.php");
if(isset($_POST["company"]) && strlen($_POST["company"]) > 0) 
{	
    $company = htmlspecialchars(trim($_POST['company']));
	$vitae   = htmlspecialchars(trim($_POST['vitae']));
	$addClient = "INSERT INTO add_delete_vitae(company,vitae) VALUES ('$company','$vitae')";
	if( mysql_query($addClient) ){
		   $my_id = mysql_insert_id(); //Get ID of last inserted row from MySQL
		   echo '<li id="item_'.$my_id.'"><a href="#" class="del-link" data-dismiss="alert" title="撤销" id="del-'.$my_id.'">×</a>';
		   echo '<h4><a href="#" class="name-link" title="'.$company.'">'.$company.'</a><span>'.$vitae.'</span></h4>';
           echo '</li>';
		   mysql_close($connecDB); 
		}else{
		//header('HTTP/1.1 500 '.mysql_error()); //display sql errors.. must not output sql errors in live mode.
		header('HTTP/1.1 500 Looks like mysql error, could not insert record!');
		exit();
	}
}

elseif(isset($_POST["recordToDelete"]) && strlen($_POST["recordToDelete"])>0 && is_numeric($_POST["recordToDelete"]))
{	
	$idToDelete = filter_var($_POST["recordToDelete"],FILTER_SANITIZE_NUMBER_INT); 
	
	if(!mysql_query("DELETE FROM add_delete_vitae WHERE id=".$idToDelete))
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