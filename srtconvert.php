<?php

$file = file_get_contents($argv[1]);
$contents = explode("\n",$file);
$last_line = "";
$transcript = "";
foreach ($contents as $line){
  if (trim($line) != "" ){
    if (strpos($line, "-->") === false){
      if (is_numeric($line)){} else {
        if (strpos($line, $last_line) === false){
          $transcript = $transcript.$line."\n";
          $last_line = $line;
        }
      }
    }
  }
}
echo $transcript;
$output = str_replace(".srt",".txt",$argv[1]);
file_put_contents($output,$transcript);


 ?>
