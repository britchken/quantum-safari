<?php
$file = fopen("counter.txt", "r+"); // path to the text file that will store the view count

// check if a cookie has been set for this page
if (!isset($_COOKIE['page_viewed'])) {
  $count = intval(file_get_contents($file)); // read the current count from the file
} else {
  
  // set a cookie to prevent the count from being incremented on page refreshes
  setcookie('page_viewed', true, time() + 3600 * 24); // expires after 24 hours
  
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
    ftruncate($file, ftell($file));
  } else {
      // loop until the lock is acquired
      while (flock($file, LOCK_EX)) {
          // sleep for a short period of time before trying again
          usleep(10);
      }
      $contents = "";
      while (!feof($file)) {
          $contents .= fread($file, 8192);
      }
      $count = intval($contents) + 1;
      fseek($file, 0);
      fwrite($file, $count);
      fflush($file);
      flock($file, LOCK_UN);
      ftruncate($file, ftell($file));
  }
  fclose($file);

}

echo " " . $count; // display the count on the webpage
?>
