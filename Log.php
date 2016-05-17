
<?php
//set correct timezone
date_default_timezone_set("America/Chicago");
class Log
{
    protected $filename;
    protected $handle;
   
    public function __construct($prefix = 'log')
    {
        $currentDate = date('Y-m-d');
       
        $this->setFilename("{$prefix}-{$currentDate}.log");
        $this->handle = fopen($this->filename, 'a');
    }
    public function setFilename($filename)
    {
        if(is_string($filename) && touch($filename) && is_writable($filename)) {
            $this->filename = $filename;
        } else {
            echo "Error.";
        }
    }
    
    public function logMessage($logLevel, $message)
    {
        //setting variable for correct time/date format
        $currentDateTime = date('Y-m-d h:i:s=T');
        fwrite($this->handle, PHP_EOL . $currentDateTime . " " . "[" . $logLevel ."]" . " " . $message);
    }
    public function info($message) 
    {
        $this->logMessage('INFO', $message);
    }
    public function error($message)
    {
        $this->logMessage("ERROR", $message);
    }
    public function __destruct()
    {
        fclose($this->handle);
    }
}
?>







