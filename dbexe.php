<?php
include("boot.php");
include("lib/db.class.php");

if(isset($_REQUEST['action']) and $_REQUEST['action']=='run'){
	$query = $_REQUEST['command'];
	if($db->execute_query($query)){
		echo '<p style="color:green">Query executed successfully</p>';
	}else{
		echo '<p style="color:red">error in query</p>';
	}
}
?>
<form method="POST">
<input type="hidden" name="action" value="run">
<textarea cols="120" rows="30" name="command"></textarea><br>
<input type="submit" />
</form>