<?php
//**************************************
//     Page load dropdown results     //
//**************************************
function getTierOne()
{
	$result = mysql_query("SELECT DISTINCT tier_one FROM two_drops") 
	or die(mysql_error());

	  while($tier = mysql_fetch_array( $result )) 
  
		{
		   echo '<option value="'.$tier['tier_one'].'">'.$tier['tier_one'].'</option>';
		}

}

//**************************************
//     First selection results     //
//**************************************
if($_GET['func'] == "drop_1" && isset($_GET['func'])) { 
   drop_1($_GET['drop_var']); 
}

function drop_1($drop_var)
{  
    include_once('../config.php');
	$result = mysql_query("SELECT * FROM two_drops WHERE tier_one='$drop_var'") 
	or die(mysql_error());
	
	echo '<select name="tier_two" class="sel-c-sort">
	      <option value=" " disabled="disabled" selected="selected">Choose one</option>';

		   while($drop_2 = mysql_fetch_array( $result )) 
			{
			  echo '<option value="'.$drop_2['tier_two'].'">'.$drop_2['tier_two'].'</option>';
			}
	
	echo '</select> ';
}
?>