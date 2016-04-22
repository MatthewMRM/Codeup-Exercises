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
    
// notes- innerArray- is your copy array for other call to actions
// parseNumber is the function to call upon $innerArray[1] to grab content ($string) to then munipulate.
//$contactsArray is assigning the index and the value 'name' to the $innerArray appropriate section. 
// = is assigning and == is comparing 
//    
    
    fclose($handle);
    return $contactsArray;

}
function parseNumber($string){
$phoneNum = substr($string, 0, 3) . '-' . substr($string, 3, 3) . '-' . substr($string, 6);

// parseNumber is the function that incoporates the $innerArray [1] $string (content) to work on.
//$phoneNum is the variable name that assoicate witht the fucntions of adding dashes within your $string.
//$substr gives you placement within variable and the starting and ending position. 
// concatnating is the process of finding position and pluging in your content etc.

return $phoneNum;
}
print_r(parseContacts('contacts.txt'));



