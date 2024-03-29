<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Sohail Ahmad Rajput
 * Date: 11/9/12
 * Time: 8:48 PM
 * To change this template use File | Settings | File Templates.
 */
include("image.class.php");

class Advertisement extends Image_Uploader
{
    var $message;
    var $tables = array('ad' => "advertisement", 'vender' => "vender", 'model' => "model");
    var $db;
    var $stats = array();
    function __construct($db)
    {
        $this->db = $db;
    }

    public function get_message()
    {
        return $this->message;
    }

    public function set_message($message)
    {
        $this->message = $message;
    }
    public function make_image_list(){
        $pics = array();
        for($i=0; $i<count($_FILES['attachment']['name']); $i++)
        {
            $pics[] = array(
            'name' => $_FILES['attachment']['name'][$i],
            'tmp_name' => $_FILES['attachment']['tmp_name'][$i],
            'file_type' => $_FILES['attachment']['file_type'][$i],
            'error' => $_FILES['attachment']['error'][$i],
            'size' => $_FILES['attachment']['size'][$i],
            );
        }
        return $pics;
    }
    public function insert($data)
    {
        $images = $this->make_image_list();
        $path = 'advertisements/';
        $image_ids = array();

        foreach($images as $pic){
            parent::upload_file($pic,$path);
            $name_path = $this->uploaded_filename_with_full_path;
            $ext = end(explode(".",$name_path));
            if($this->db->execute_query("insert into images set name_path = '".$name_path."',thumb_type='xlarge',created_date=Now(),modified_date=now()",false)){
                $image_ids[] = $this->db->get_inserted_id();
            }
            $name_path_med = str_replace(".".$ext,"_medium.".$ext,$name_path);
            $thumb1 = parent::make_thumb($name_path,$name_path_med,220,146);
            if($this->db->execute_query("insert into images set name_path = '".$name_path_med."',thumb_type='medium',created_date=Now(),modified_date=now()",false)){
                $image_ids[] = $this->db->get_inserted_id();
            }
            $name_path_small = str_replace(".".$ext,"_small.".$ext,$name_path);
            $thumb2 = parent::make_thumb($name_path,$name_path_small,60,40);
            if($this->db->execute_query("insert into images set name_path = '".$name_path_small."',thumb_type='small',created_date=Now(),modified_date=now()",false)){
                $image_ids[] = $this->db->get_inserted_id();
            }
            $name_path_large = str_replace(".".$ext,"_large.".$ext,$name_path);
            $thumb3 = parent::make_thumb($name_path,$name_path_large,375,230);

            if($this->db->execute_query("insert into images set name_path = '".$name_path_large."',thumb_type='large',created_date=Now(),modified_date=now()",false)){
                $image_ids[] = $this->db->get_inserted_id();
            }
        }

        $inserted_id = null;
        if (is_array($data) and count($data) > 0) {
            if ($this->db->add_to_table($this->tables['ad'], $data))
            {
                $inserted_id = $this->db->get_inserted_id();
                for($i=0; $i<count($image_ids); $i++){
                    $q = "insert into ad_images set image_id = '".$image_ids[$i]."', ad_id='".$inserted_id."'";
                    $this->db->execute_query($q,false);
                }
                return true;
            } else {
                $this->message = $this->db->get_message();
                return false;
            }
        } else {
            $message = "error! Empty input sent";
            $this->set_message($message);
            return false;
        }
    }
    function render_make_options()
    {

        $query = "select * from vender order by name";
        $vender_res = $this->db->execute_query($query, true);
	    while ($vender_row = $this->db->fetch($vender_res))
        {
            ?>
            <option value="<?php echo $vender_row['id']?>"><?php echo ucwords($vender_row['name']); ?></option>
            <?php
        }
    }

    public function get_vendor($id)
    {
        if($id != "" &&  $id > 0)
        {
            $query = "select name from vender where id ='".$id."'";
            $row = $this->db->get_row($query);
            return $row['name'];
        }
        else
        {
            return false;
        }
    }
    public function get_model($id)
    {
        if($id != "" &&  $id > 0)
        {
            $query = "select name from model where id ='".$id."'";
            $row = $this->db->get_row($query);
            return $row['name'];
        }
        else
        {
            return false;
        }
    }
}