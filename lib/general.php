<?php
class General
{
    /**
     * @var string contain the type of message
     */
    var $db;

    /**
     * @var string contain the message
     */
    var $message = "";

    /**
     * Constructor
     */
    public function __construct($db)
    {
        $this->db = $db;
    }

    /**
     * sets the message and its type
     * @param $message message
     */
    public function set_message($message)
    {
        $this->message = $message;
    }

    /**
     * get the message previously set
     */
    public function get_message()
    {
        return $this->message;
    }

    public function render_cities()
    {
        $result = $this->db->execute_query("SELECT * FROM cities ORDER BY name ASC",true);
        if($result)
        {
            while($row = $this->db->fetch($result))
            {
            ?>
                <option value="<?php echo $row['name'] ?>"><?php echo $row['name']; ?></option>
            <?php
                echo "\r\n";
            }
        }
    }

    public function show_currency($num)
    {
        return number_format($num,0,'.'.',');
    }
}

?>