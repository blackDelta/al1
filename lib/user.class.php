<?php
	class Users{
		var $db;
		private $msg;
		function __construct($db){
			$this->db=$db;
		}
		function get_row($id){
			$result=$this->db->query("select * from user where id=$id");
			$row=$this->db->fetch_array($result);
			return $row;
		}
		function get_user_name($id){
			$query="select * from user where id='$id'";
			$row=$this->db->get_row($this->db->execute_query($query,true));
			return $row['first_name']. " ".$row['last_name'];
		}
		function remove($id){
			$result=$this->db->query("delete from user where id=$id");
			return $result;
		}
		
		function update_login($id,$status){
			$result =$this->db->query("update user set login = '".$status."' where id = ".$id);
			return $result;
		}
		function email_exist($email){
			$row=$this->db->get_row($this->db->execute_query("select * from user where email = '".$email."'",true));
			if($row){
				return true;
			}
			else{
				return false;
			}
		}
		function username_exist($username){
			$row=$this->db->get_row($this->db->execute_query("select * from user where username= '".$username."'",true));
			if($row){
				return true;
			}
			else{
				return false;
			}
		}
		function change_password($id,$password){
			$result=$this->db->query("update user set password='$password' where id=$id");
			if($result)
			{
				return true;
			}
		}
		function send_contactus_email($name,$email,$phone,$message){
			if($email!=""){
				$subject="Learfreight - Contact Us";
				$headers = 'From: noReply@learfreight.com' . "\r\n" .
				'Reply-To: admin@learfreight.com' . "\r\n" .
				'X-Mailer: PHP/' . phpversion();
				$msg = "Name: ".$name."\r\n";
				$msg.="Phone: ".$phone."\r\n";
				$msg .= $message;
				if(@mail($email,$subject,$msg,"")){
					return true;
				}else{
					return false;
				}
			}
		}
		function update_last_login($id){
			$t=time();
			$this->db->query("update user set last_login=$t , logins=logins+1 where id=$id");
		}
		function get_userid($username){
			$result = $this->db->query("select * from user where username = '$username' ");
			$row = $this->db->fetch_array($result);
			return $row['serial'];
		}

        function quick_register($name,$username,$email,$password){
            $query = "INSERT INTO user set
			    name = '".$name."',
                username = '".$username."',
                email = '".$email."',
                password = '".$password."'";
            if($this->db->execute_query($query))
            {
                return $this->db->get_inserted_id();
            }
            else
            {
                $this->set_message("Error occured while inserting record");
                return false;
            }
        }

		function register_user(){
			
			$query = "INSERT INTO user set
			    id = '',
			    NAME = '',
                username = '',
                email
                PASSWORD
                location
                address
                phone
                business_name
                business_desc
                business_phone
                business_address
                picture
                picture_thumb
                TYPE
                STATUS
                created_date
                modified_date
			";
			if($this->db->query($query)){
				return true;
			}else{
				return false;
			}
		}
		function updated_email_already_exists($email,$id){
			$result=$this->db->query("select * from user where email='$email' and id<>$id");
			$no=$this->db->num_rows($result);
			if($no>0){
				return true;
			}
			else{
				return false;
			}
		}
		function change_lock($id){
			$row=$this->get_row($id);
			if($row['locked']=='yes')
			{
				$this->db->query("update user set locked='no' where id=$id");
			}
			else{
				$this->db->query("update user set locked='yes' where id=$id");
			}
		}
		function get_row_by_email($email){
			$result=$this->db->query("select * from user where email='$email'");
			$row=$this->db->fetch_array($result);
			return $row;
		}
		function get_message(){
			return $this->msg;
		}
		function get_user_rating($userid){
			$row=$this->db->get_row($this->db->execute_query("select avg(rating) as average from user_rating where userid=$userid",true));
			if ($row['average'])
				return $row['average'];
			else
				return 0;
		}
		function get_user_reviews($userid){
			$row=$this->db->get_row($this->db->execute_query("select count(*) as reviews from user_rating where userid=$userid",true));
			if ($row['reviews'])
				return $row['reviews'];
			else
				return 0;
		}
		function is_read_only($userid,$user_id){
			if($userid == $user_id)
					return "true";

			$result=$this->db->query("select * from user_rating where userid=$userid and user_id=$user_id ");
			if ($this->db->count_rows($result)>0){
					return "true";
			}
			else{
					return "false";
			}
		}
		function get_discount($usership_type_id){
			$query="select yearly_discount from usership_types where id=$usership_type_id";
			$row=$this->db->fetch_array_by_query($query);
			return $row['yearly_discount'];
		}
		
	}
	$user=new Users($db);
