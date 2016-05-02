
<?php
class Log 
{
	 public $filename;
	 public $handle;
	
	
	
	}
	public function logMessage($logLevel, $message) 
	{
		$currentDate = date("Y-m-d");
		
	    $this->filename =   "log-{$currentDate}.log";
	    $handle = fopen($this->filename, 'a' );
	    
	    $currentDateTime = date('Y-m-d h:i:s=T');

	    fwrite($handle, PHP_EOL . $currentDateTime . " " . "[" . $logLevel . "[" . " " . $message);
	    fclose($handle);
	}
	
	public function info($logMessage){

	}   

	public function error() {


	} 
	   
}