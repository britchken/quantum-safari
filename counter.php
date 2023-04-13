<?php
$file = "counter.txt"; // path to the text file that will store the view count

// check if a cookie has been set for this page
if (isset($_COOKIE['page_viewed'])) {
  $count = intval(file_get_contents($file)); // read the current count from the file
} else {
  // increment the count by 1
  $count = intval(file_get_contents($file)) + 1;

  // write the new count back to the file
  file_put_contents($file, $count, LOCK_EX | LOCK_NB);

  // set a cookie to prevent the count from being incremented on page refreshes
  setcookie('page_viewed', true, time() + 3600 * 24); // expires after 24 hours
}

echo " " . $count; // display the count on the webpage
?>
