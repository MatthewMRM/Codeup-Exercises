<?php
class Log {
    public function __construct($prefix='log') {
        $date = date("Y-m-d");
        $this->filename = "$prefix-$date.log";
        $this->handle = fopen($this->filename, 'a');
    }
    public function __destruct() {
        fclose($this->handle);
    }
    public $filename;
    public $handle;
    public function logMessage($logLevel, $message){
        $today = date("Y-m-d H:i:s");
        fwrite($this->handle, $today . ' ' . $logLevel . ' ' . $message . PHP_EOL);
    }
    public function info($message){
        $this->logMessage('[INFO]', $message);
    }
    public function error($message){
        $this->logMessage('[ERROR]', $message);
    }
}







