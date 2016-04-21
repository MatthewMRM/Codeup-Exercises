<?php

function parseContacts($filename)
{
	$contacts = array();
	$filename = 'contacts.txt';
	$handle = fopen($filename, 'r');
	$contents = fread($handle, filesize($filename));
    $arrayOfStrings = explode(PHP_EOL, $contentString);

    // todo - read file and parse contacts
    foreach ($arrayOfStrings as $index => $contact) {
    	$innerArray = explode('|' , $contact);
    			$contactsArray[$index] ['name'] = $innerArray[0];
    			$contactsArray[$index] ['number'] = numberSplit($innerArray[1]);
    }
    fclose($handle);
    return $contactsArray;
}

function numberSplit($number)
{
	return substr($number, 0, 3) . '-' . substr($number, 6);start)
}

var_dump(parseContacts('contacts.txt'));
