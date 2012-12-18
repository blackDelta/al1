<?php

class Image_Uploader
{


    var $msg = "";

    var $err_msg = "";


    var $prefix = "thumb-";

    var $fix_aspect = "both";

    var $thumb_width = 100;

    var $thumb_height = 100;


    var $fix_size_upload = false;

    var $fix_size_image_width = 100;

    var $fix_size_image_height = 100;


    var $wrt_smaller_side = false;

    var $smaller_side_size = 100;


    var $wrt_bigger_side = false;

    var $bigger_side_size = 100;


    var $uploaded_file_name = "";

    var $uploaded_filename_with_full_path = "";


    var $thumb_path_with_filename = "";


    var $allowed_extensions = array("jpg", "jpeg", "png", "gif", "x-png", "JPG", "JPEG", "GIF", "X-PNG", "flv");

    var $image_extensions = array("jpg", "jpeg", "png", "gif", "x-png", "JPG", "JPEG", "GIF", "X-PNG");


    function upload_file($tmp_file, $dest)
    {

        if (in_array($this->file_extension($tmp_file['name']), $this->allowed_extensions)) {
            $dest_path_with_filename = $dest . $tmp_file['name'];

            /*This code is written for windows */ //an option can be informing that file with same name already exist insted to deleting file

            //@unlink($new_path);

            if (@move_uploaded_file($tmp_file['tmp_name'], $dest_path_with_filename)) {
                $this->uploaded_filename_with_full_path = $dest_path_with_filename;
                return true;


            } else {

                $this->err_msg = "Cannot upload file '" . $dest_path_with_filename . "'. Check Directory Permissions or Directory Path or the file is corrupt";

                return false;

            }


        } else {

            $allowed_file_types_str = implode(",", $this->allowed_extensions);

            $this->err_msg = "Only " . $allowed_file_types_str . " extensions are allowed for the files to be uploaded." . $tmp_file['name'] . " has wrong extension.";

            return false;

        }

    }


    function upload_file_renamed($tmp_file, $dest, $file_name)
    {


        if ($this->upload_file($tmp_file, $dest)) {

            $file_name = $file_name . "." . $this->file_extension($tmp_file['name']);

            $new_filename_with_path = $dest . $file_name;


            if ($this->fix_size_upload) {

                $image_dimensions = getimagesize($this->uploaded_filename_with_full_path);

                if ($image_dimensions[0] != $this->fix_size_image_width or $image_dimensions[1] != $this->fix_size_image_height) {

                    @unlink($this->uploaded_filename_with_full_path);

                    $this->err_msg = $tmp_file['name'] . " has width = " . $image_dimensions[0] . " and height = " . $image_dimensions[1] . ". Allowed size is (" . $this->fix_size_image_width . " X " . $this->fix_size_image_height . ").";

                    return false;

                }

            }


            /*This code is written for windows */

            if ($this->uploaded_filename_with_full_path != $new_filename_with_path) {

                @unlink($new_filename_with_path);

            }


            if (@rename($this->uploaded_filename_with_full_path, $new_filename_with_path)) {

                $this->uploaded_filename_with_full_path = $new_filename_with_path;

                $this->uploaded_file_name = $file_name;

                return true;


            } else {

                @unlink($this->uploaded_filename_with_full_path);

                $this->err_msg = "'" . $this->uploaded_filename_with_full_path . "' cannot renamed with name '" . $file_name . "'. Please the name of your file.";

                return false;

            }


        } else {

            return false;

        }

    }


    function upload_renamed_and_make_thumb($tmp_file, $dest, $file_name, $thumb_width = 100, $thumb_height = 100, $fix_aspect = "both", $thumb_prefix = "thumb", $thumb_dir = "")
    {

        if ($this->upload_file_renamed($tmp_file, $dest, $file_name)) {

            $file_name_with_full_path = $this->get_file_path();

            if ($this->set_thumb_settings($thumb_width, $thumb_height, $fix_aspect, $thumb_prefix)) {

                if ($this->image_resize_with_prefix($file_name_with_full_path, $thumb_dir)) {

                    return true;

                } else {

                    return false;

                }

            } else {

                return false;

            }

        } else {

            return false;

        }

    }


    function image_resize_with_prefix($file_path, $thumb_dir = "")
    {


        if (!file_exists($file_path)) {

            $this->err_msg = "'" . $file_path . "' file for thumb does not exit.";

            return false;

        }


        if (!in_array($this->file_extension($file_path), $this->image_extensions)) {

            $this->err_msg = "'" . $file_path . "' is not an image file therefore Thumb cannot be created.";

            return false;

        }


        $image = $this->image_create_from($file_path);


        if (is_resource($image)) {

            $image_width = imagesx($image);

            $image_height = imagesy($image);


            if ($this->wrt_smaller_side) {

                if ($image_width < $image_height) {

                    $this->thumb_width = $this->smaller_side_size;

                    $this->fix_aspect = "width";


                } else {

                    $this->thumb_height = $this->smaller_side_size;

                    $this->fix_aspect = "height";

                }

            } else if ($this->wrt_bigger_side) {

                if ($image_width > $image_height) {

                    $this->thumb_width = $this->bigger_side_size;

                    $this->fix_aspect = "width";


                } else {

                    $this->thumb_height = $this->bigger_side_size;

                    $this->fix_aspect = "height";

                }

            }


            if ($this->fix_aspect == "height") {

                $thumb_height = $this->thumb_height;

                $thumb_width = $image_width / ($image_height / $thumb_height);


            } else if ($this->fix_aspect == "width") {

                $thumb_width = $this->thumb_width;

                $thumb_height = $image_height / ($image_width / $thumb_width);


            } else if ($this->fix_aspect == "both") {

                $thumb_width = $this->thumb_width;

                $thumb_height = $this->thumb_height;


            }


            $thumb = imagecreatetruecolor($thumb_width, $thumb_height);

            if (imagecopyresampled($thumb, $image, 0, 0, 0, 0, $thumb_width, $thumb_height, $image_width, $image_height)) {


                $basename = $this->file_basename($file_path);


                if ($thumb_dir != "")

                    $thumb_filename_with_full_path = $thumb_dir . $this->prefix . $basename;

                else

                    $thumb_filename_with_full_path = dirname($file_path) . "/" . $this->prefix . $basename;


                /*This code is written for windows */

                @unlink($thumb_filename_with_full_path);


                if (@imagejpeg($thumb, $thumb_filename_with_full_path)) {

                    $this->thumb_path_with_filename = $thumb_filename_with_full_path;

                    return true;


                } else {

                    $this->err_msg = "'" . $thumb_filename_with_full_path . "' Cannot save on disk. Check directory permisons of Thumb path.";

                    return false;

                }


            } else {

                $this->err_msg = "Cannot copy resized image";

                return false;

            }


        } else {

            $this->err_msg = $file_path . " is not a valid image resource. Either it is not an image file or image is corrupted";

            return false;

        }

    }


    function set_thumb_settings($thumb_width = 100, $thumb_height = 100, $fix_aspect = "both", $thumb_prefix = "thumb")
    {


        if ($this->check_string($thumb_prefix, 20)) {

            $this->prefix = $thumb_prefix . "-";

        } else {

            $this->err_msg = $thumb_prefix . " Thumb prefix contains invaid charactors. ";

            return false;

        }


        if ($fix_aspect == "width" or $fix_aspect == "height" or $fix_aspect == "both") {

            $this->fix_aspect = $fix_aspect;


            $thumb_width = intval(abs($thumb_width));

            if ($thumb_width > 16 and $thumb_width < 500) {

                $this->thumb_width = $thumb_width;


                $thumb_height = intval(abs($thumb_height));

                if ($thumb_height > 16 and $thumb_height < 500) {

                    $this->thumb_height = $thumb_height;

                    return true;


                } else {

                    $this->err_msg = "Trying to set an incorrect value for thumb height '" . $thumb_height . "'";

                    return false;

                }

            } else {

                $this->err_msg = "Trying to set an incorrect value for thumb width '" . $thumb_width . "'";

                return false;

            }

        } else {

            $this->err_msg = "fix_aspect only accecpty one of these values  both, width or height ";

            return false;

        }

    }


    function set_to_upload_fix_size_image($image_width, $image_height)
    {

        $this->fix_size_upload = true;

        $this->fix_size_image_width = $image_width;

        $this->fix_size_image_height = $image_height;

    }


    function check_string($string, $limit)
    {

        $len = strlen(str_replace(" ", "", $string));

        if ($len > 0 and $len <= $limit) {

            $pattren = '/^[a-zA-Z0-9_-]+$/';

            if (preg_match($pattren, $string) == 1) {

                return true;

            } else {

                $this->err_msg = "'" . $string . "'  Contains Invalid Chars";

                return false;

            }

        } else {

            $this->err_msg = "'" . $string . "' crosses the limit of " . $limit . " chars or string is empty.";

            return false;

        }

    }


    function set_smaller_side_size($value)
    {

        $value = intval(abs($value));

        if ($value > 16 and $value < 500) {

            $this->smaller_side_size = $value;

            $this->wrt_smaller_side = true;

            return true;

        } else {

            $this->err_msg = "Trying to set an incorrect value for thumb smaller side '" . $value . "'";

            return false;

        }

    }


    function set_bigger_side_size($value)
    {

        $value = intval(abs($value));

        if ($value > 16 and $value < 500) {

            $this->bigger_side_size = $value;

            $this->wrt_bigger_side = true;

            return true;

        } else {

            $this->err_msg = "Trying to set an incorrect value for thumb bigger side '" . $value . "'";

            return false;

        }

    }


    function image_create_from($file_path)
    {

        $extension = $this->file_extension($file_path);

        switch ($extension) {

            case "jpg":

                $image = imagecreatefromjpeg($file_path);

                break;


            case "jpeg":

                $image = imagecreatefromjpeg($file_path);

                break;


            case "x-jpg":

                $image = imagecreatefromjpeg($file_path);

                break;


            case "gif":

                $image = imagecreatefromgif($file_path);

                break;


            case "png":

                $image = imagecreatefrompng($file_path);

                break;


            case "x-png":

                $image = imagecreatefrompng($file_path);

                break;


            default:

                $image = false;

                break;

        }

        return $image;

    }


    function file_extension($filename)
    {

        $parts = pathinfo($filename);

        return strtolower($parts['extension']);

    }


    function file_basename($filename)
    {

        $parts = pathinfo($filename);

        return $parts['basename'];

    }


    function get_error()
    {

        return $this->err_msg;

    }


    function set_allowed_extensions($exts_str_comma_separated)
    {

        $this->allowed_extensions = explode(",", $exts_str_comma_separated);

    }


    function get_file_path()
    {

        return $this->uploaded_filename_with_full_path;

    }


    function get_file_name()
    {

        return $this->uploaded_file_name;

    }


    function create_dir()
    {

        $path = "post_images/";


        $year = date("Y", time());

        $month = date("m", time());

        $day = date("d", time());


        $path = "../" . $path . $year;

        if (!is_dir($path)) mkdir($path, 0777);

        $path .= "/" . $month;

        if (!is_dir($path)) mkdir($path, 0777);

        $path .= "/" . $day;
        if (!is_dir($path)) mkdir($path, 0777);


        if (!is_dir($path . "/" . "thumb")) mkdir($path . "/" . "thumb", 0777);

        return $path . "/";

    }

    function make_thumb($old_path, $new_path, $maxwidth = 100, $maxheight = 100)
    {

        $img = $this->image_create_from($old_path); // imagecreatefromjpeg($old_path);

        //or imagecreatefrompng,imagecreatefromgif,etc. depending on user's uploaded file extension

        $width = imagesx($img); //get width and height of original image
        $height = imagesy($img);

        //determine which side is the longest to use in calculating length of the shorter side, since the longest will be the max size for whichever side is longest.

        if ($height > $width) {

            $ratio = $maxheight / $height;

            $newheight = $maxheight;

            $newwidth = $width * $ratio;

        } else {

            $ratio = $maxwidth / $width;

            $newwidth = $maxwidth;

            $newheight = $height * $ratio;

        }

        //create new image resource to hold the resized image

        $newimg = imagecreatetruecolor($newwidth, $newheight);
        $palsize = imagecolorstotal($img); //Get palette size for original image

        for ($i = 0; $i < $palsize; $i++) {
            $colors = imagecolorsforindex($img, $i);
            imagecolorallocate($newimg, $colors['red'], $colors['green'], $colors['blue']);
        }

        //copy original image into new image at new size.

        imagecopyresized($newimg, $img, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);


        imagejpeg($newimg, $new_path); //$output file is the path/filename where you wish to save the file.

        //Have to figure that one out yourself using whatever rules you want.  Can use imagegif() or imagepng() or whatever.

    }

}


?>