
<?php
class Log 
{
	 public $filename;
	 public $handle;
	
	
	
	}
	public function logMessage($logLevel, $message) 
	{
		$time = date("H-i-s");
		
		$this->date = date("Y-m-d");
		
	    $this->filename =   "{date}.log";
	    $date = date("Y-m-d");
	    
	   $onScreen = "Todays date: {$date}  The Current Time: {$time} " . $logLevel . " " . $message . PHP_EOL;
		fwrite($this->handle,"{$onScreen}" . PHP_EOL);
	
		
	}
	public function info($message) 
	{
	$this->logMessage("INFO", $message);
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