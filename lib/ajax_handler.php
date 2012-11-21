<?php
include("../boot.php");
include("db.class.php");
if(isset($_REQUEST['action']))
{
	if($_REQUEST['action'] == 'get_models')
	{
		$model_id = $_REQUEST['vendor_id'];
		$query = "select * from model where vender_id='".$model_id."' order by name";
		$models_res = $db->execute_query($query,true);
		?>
        <option value="">Select Model</option>
        <?php
		while($models_row = $db->fetch($models_res))
		{
	?>
		 <option value="<?php echo $models_row['id']?>"><?php echo $models_row['name']?></option>
	<?php		
		}
	}
}
?>