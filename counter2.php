<?php
$file = fopen("begin_counter.txt", "r+"); // path to the text file that will store the view count

// check if a cookie has been set for this page
if (isset($_COOKIE['lets_begin'])) {
    $contents = "";
    while (!feof($file)) {
        $contents .= fread($file, 8192);
    }
    $count = intval($contents);
} else {
  // set a cookie to prevent the count from being incremented on page refreshes
  setcookie('lets_begin', true, time() + 3600 * 24 * 10 * 365); // expires after 10 years
  
  if (flock($file, LOCK_EX)) {
    $contents = "";
    while (!feof($file)) {
        $contents .= fread($file, 8192);
    }
    $count = intval($contents) + 1;
    fseek($file, 0);
    fwrite($file, $count);
    fflush($file);
    flock($file, LOCK_UN);
  } else {
    echo "Uh oh my code has a bug!";
  }
  fclose($file);

}
echo "" . $count; // display the count on the webpage

?>
