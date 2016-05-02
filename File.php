<?php
class File

{
	public $handle;
	public function __contruct($filename)
	{
		$this ->handle = fopen($filename, 'a');

	}
	public function append($text)
	{
		fwrite($this ->handle, $text);

	}
	public function close()
	{
		fclose($this->handle);
	}
}