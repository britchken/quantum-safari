<?php
$file = fopen("counter.txt", "r+"); // path to the text file that will store the view count
echo " xxxx ";
// check if a cookie has been set for this page
if (isset($_COOKIE['page_viewed'])) {
    $contents = "";
    while (!feof($file)) {
        $contents .= fread($file, 8192);
    }
    $count = intval($contents);
  echo " ... ";
} else {
  echo " aaaa ";
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
  } else {
    echo "Uh oh my code has a bug!";
  }
  fclose($file);

}

echo " " . $count; // display the count on the webpage
?>
