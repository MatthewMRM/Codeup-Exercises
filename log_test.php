<?php
require_once 'Log.php';
$log = new Log('cli'); // its right here. Create an instance. 
$logger = new Log(); // i really did. another new instance.

$log = new Log;

$log->info('hello');
$log->error('Womp Womp');

