<?php

function parseContacts($filename)
{
	$contacts = array();
	$filename = 'contacts.txt';
	$handle = fopen($filename, 'r');
	$contentString = trim(fread($handle, filesize($filename)));
    $arrayOfStrings = explode(PHP_EOL, $contentString);

    // todo - read file and parse contacts
    foreach ($arrayOfStrings as $index => $contact) {
    	$innerArray = explode('|' , $contact);
    	$contactsArray[$index] ['name'] = $innerArray[0];
    	$innerArray[1] = parseNumber($innerArray[1]);
    	$contactsArray[$index] ['number'] = $innerArray[1];
    }
    

    
    fclose($handle);
    return $contactsArray;

}
function parseNumber($string){
$phoneNum = substr($string, 0, 3) . '-' . substr($string, 3, 3) . '-' . substr($string, 6);

return $phoneNum;
}
print_r(parseContacts('contacts.txt'));


