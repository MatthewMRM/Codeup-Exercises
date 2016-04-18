<?php

// ask user for starting number
fwrite(STDOUT, "Give me a number to start at:\n");
$userStart = trim(fgets(STDIN));
// ask user for ending number
fwrite(STDOUT, "Where should we end?\n");
$userEnd = trim(fgets(STDIN));
// ask user for incrementing number
fwrite(STDOUT, "What should we increment by?\n");
$userIncrement = trim(fgets(STDIN));
// display numbers from start to finish using for-loop, with desired increment
echo "Our numbers are {$userStart} to {$userEnd}\n";
for ($i = $userStart; $i <= $userEnd; $i +=$userIncrement) {
    echo "{$i}\n";
    // default to 1 if no increment chosen
    if (!is_numeric($userIncrement)) {
        $i += 1;
    }
}
// error msg if not numberic or blank
