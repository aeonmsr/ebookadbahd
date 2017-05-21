<?php
date_default_timezone_set('Asia/Kolkata');
 $Down=$_GET['Down'];
$url='http://'.$_SERVER['HTTP_HOST'].'/beacon/pdf/'.$Down;
?>

<html>
 <head>
  <meta http-equiv="refresh" content="0;url=<?php echo $url; ?>">
 </head>
 <body>

 <?php

  $filePath = $Down.".txt";
	
  if (!file_exists($filePath)) {
    $file = fopen($filePath,"w");
    fwrite($file,0);
    fclose($file); 
  }
  // If file exists, read current count from it, otherwise, initialize it to 0
  $count = file_exists($filePath) ? file_get_contents($filePath) : 0;

  // Increment the count and overwrite the file, writing the new value
  file_put_contents($filePath, ++$count);


 ?> 

 </body>
</html>