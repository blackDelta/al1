<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Sohail Ahmad Rajput
 * Date: 11/9/12
 * Time: 8:48 PM
 * To change this template use File | Settings | File Templates.
 */
class Advertisement
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

    public function insert($data)
    {
        $inserted_id = null;
        if (is_array($data) and count($data) > 0) {
            if ($this->db->add_to_table($this->tables['ad'], $data))
            {
                $inserted_id = $this->db->get_inserted_id();
                $this->upload_ad_images($inserted_id);
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
    function insert_image($image_name,$ad_id){

        $query = "INSERT INTO ad_images set ad_id = '".$ad_id."', image='".$image_name."'";
        if($this->db->execute_query($query,FALSE))
        {
            return true;
        }else{
            return false;
        }
    }
    function upload_ad_images($ad_id){
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
                if($this->insert_image($destination,$ad_id))
                {
                    return true;
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
