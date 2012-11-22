<?php
class Database
{
    var $connection;
    var $message;
    var $dbName;
    var $tables;

    function __construct($host, $db, $user, $pswd)
    {
        $this->connection = mysql_connect($host, $user, $pswd) or die("database connection error");
        mysql_select_db($db) or die("database connection error");
        $this->dbName = $db;
        $this->tables = array($this->dbName . ".ad_images", $this->dbName . ".advertisement", $this->dbName . ".categories", $this->dbName . ".user");
    }

    function __destruct()
    {
        mysql_close($this->connection);
    }

    public function add_to_table($tableName, $data, $param = array())
    {
        $query = "INSERT INTO " . $tableName . " SET ";
        foreach ($data as $key => $val) {
            $query .= $tableName . "." . $key . " = '" . $val . "', ";
        }
       $query .= "created_date=NOW(), modified_date=NOW()";
	   
        if ($this->execute_query($query)) {
            return true;
        } else {
            $this->message = "Input errors occurred";
            return false;
        }
    }

    public function execute_query($query, $return_resource = FALSE)
    {
        if (trim($query) != "") {
            if ($return_resource === FALSE) {
                if (mysql_query($query)) {
                    return true;
                } else {
                    $this->message = "Error in query";
                    return false;
                }
            } else {
                return mysql_query($query);
            }
        } else {
            $this->message = "Query is empty";
            return false;
        }
    }

    public function get_row($result)
{
        if ($result) {
            return mysql_fetch_array($result);
        } else {
            $this->message = "Query is empty";
            return false;
        }
    }

    public function fetch($result)
    {        
		if ($result) {
			return mysql_fetch_array($result);
		} else {
			$this->message = "Query is empty";
			return false;
		}
    }

    public function num_rows($query)
    {
        if (trim($query) != "") {
            $result = mysql_query($query);
            return mysql_num_rows($result);
        } else {
            $this->message = "Query is empty";
            return false;
        }
    }

    public function get_inserted_id()
    {
        return mysql_insert_id();
    }

    public function debug_query($query, $die = FALSE)
    {
        echo '<p style="color:#903; background:#FFFFF2;font-weight:bold">' . $query . '</p>';
        $die == FALSE ? "" : die;
    }

    public function create_slug($string)
    {
        $slug = preg_replace('/[^A-Za-z0-9-]+/', '-', $string);
        return $slug;
    }

    public function get_message()
    {
        return $this->message;
    }

}

$db = new Database(
    $config['db']['host'],
    $config['db']['dbName'],
    $config['db']['user'],
    $config['db']['password']);
?>