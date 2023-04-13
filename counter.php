<?php
$file = "counter.txt"; // path to the text file that will store the view count

// open the file with exclusive lock
$handle = fopen($file, "c+");
if (flock($handle, LOCK_EX)) {
    $count = intval(fread($handle, filesize($file))); // get the current count from the text file
    $count++; // increment the count by 1
    ftruncate($handle, 0); // truncate the file
    fwrite($handle, $count); // write the new count back to the text file
    flock($handle, LOCK_UN); // release the lock
}
fclose($handle); // close the file

echo "Views: " . $count; // display the count on the webpage
?>

