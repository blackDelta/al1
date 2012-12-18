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
            $name_path = parent::$uploaded_filename_with_full_path;
            $thumb1 = parent::make_thumb($new_path,$post['thumb'],190,150);
            if($this->db->execute_query("insert into images set name_path = '".$name_path."',created_date=Now(),modified_date=now()",false)){
                $image_ids[] = $this->db->get_inserted_id();
            }
        }
        $inserted_id = null;

        if (is_array($data) and count($data) > 0) {
            if ($this->db->add_to_table($this->tables['ad'], $data))
            {
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

    function insert_image($image_name){

        $query = "INSERT INTO images set name_path='".$image_name."', created_date=NOW(), modified_date=NOW()";
        if($this->db->execute_query($query,FALSE))
        {
            return $this->db->get_inserted_id();
        }else{
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

/*
 *    function upload_ad_images($ad_id){
        if(count($_FILES['attachment']) > 1){
            for($i=0; $i<count($_FILES['attachment']['name']); $i++){
                $new_name = time()."_".$ad_id;
                $dest = "advertisements/";
                $this->upload_image($dest,$_FILES['attachment']['tmp_name'][$i],$_FILES['attachment']['name'][$i],$ad_id);
            }
        }
    }

    function upload_image($destination,$tmp_name,$new_name,$ad_id)
    {
        $exts = array("jpg","png","jpeg","gif");
        $ext = strtolower(end(explode(".",$new_name)));
        if(in_array($ext,$exts))
        {
            $destination .= $new_name;
            if(move_uploaded_file($tmp_name,$destination))
            {
                $img_id= $this->insert_image($destination);
                if($img_id > 0)
                {
                    $ad_img_query = "insert into ad_images set ad_id='".$ad_id."', image_id = '".$img_id."', image_type='medium', created_date=NOW(), modified_date=NOW()";
                    if($this->db->execute_query($ad_img_query))
                    {
                        return true;
                    }
                    else
                    {
                        $this->set_message("Warning! some files not uploaded");
                        return false;
                    }
                }
            }
            else
            {
                $this->set_message("file not uploaded");
                return false;
            }
        }
        else
        {
            $this->set_message("unknown file format");
            return false;
        }
    }
 */