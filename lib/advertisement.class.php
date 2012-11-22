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
                //die("here");
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
    /*
    function create_thumbnail($source, $destination, $width, $height)
    {
        $img_info = pathinfo($source);
        if (strtolower($img_info['extension']) == 'jpg' || strtolower($img_info['extension']) == 'jpeg')
            $source_image = imagecreatefromjpeg($source);
        else if (strtolower($img_info['extension']) == 'png')
            $source_image = imagecreatefrompng($source);
        else if (strtolower($img_info['extension']) == 'gif')
            $source_image = imagecreatefromgif($source);
        else {
            $this->error_msg = "Invalid File Format. Only jpg,png,gif images are allowed";
            return false;
        }

        $src_width = imagesx($source_image);
        $src_height = imagesy($source_image);

        $virtual_image = imagecreatetruecolor($this->thumb_width, $this->thumb_height);

        imagecopyresampled($virtual_image, $source_image, 0, 0, 0, 0, $width, $height, $src_width, $src_height);

        if (strtolower($img_info['extension']) == 'jpg' || strtolower($img_info['extension']) == 'jpeg')
            imagejpeg($virtual_image, $destination . $thumb_name, 90);
        else if (strtolower($img_info['extension']) == 'png')
            imagepng($virtual_image, $destination . $thumb_name);
        else if (strtolower($img_info['extension']) == 'gif')
            imagegif($virtual_image, $destination . $thumb_name);
        return true;
    }*/
}
