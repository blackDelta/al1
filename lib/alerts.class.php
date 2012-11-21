<?php
class Alerts
{
    /**
     * @var string contain the type of message
     */
    var $type = "";

    /**
     * @var string contain the message
     */
    var $message = "";

    /**
     * Constructor
     */
    public function __constrict()
    {
    }

    /**
     * sets the message and its type
     * @param $type type of message(alert, warning or error)
     * @param $message message
     */
    public function set_message($message, $type)
    {
        $this->message = $message;
        $this->type = $type;
    }

    /**
     * get the message previously set
     */
    public function get_message()
    {
        if ($this->message != "") {
            if ($this->type == "success") {
                ?>
            <div class="step-alert alert alert-success" style="display:block">
                <p><?php echo $this->message?></p>
            </div>
            <?php
            } else if ($this->type == "error") {
                ?>
            <div class="step-alert alert alert-error" style="display:block">
                <p><?php echo $this->message?></p>
            </div>
            <?php
            } else if ($this->type == "warning") {
                ?>
            <div class="step-alert alert alert-warning" style="display:block">
                <p><?php echo $this->message?></p>
            </div>
            <?php
            }
        }
    }
}

?>