<?php
function logMessage($logLevel, $message)
{
    // todo - complete this function
    $date = date("Y-m-d");
    $filename = "log-$date.log";
    $handle = fopen($filename, 'a');
    $today = date("Y-m-d H:i:s");
    fwrite($handle, $today . ' ' . $logLevel . ' ' . $message . PHP_EOL);
    fclose($handle);
}
function logInfo(){
logMessage('[INFO]', "This is an info message.");
}
function logError(){
logMessage('[ERROR]', "This is an error message.");
}
logInfo();
logError();