<?php

$files = glob('*.{txt}', GLOB_BRACE);

$sql = "";

foreach($files as $file) {
  $contents = file_get_contents($file);
  $youtube_id = str_replace(".txt", "", $file);

  $sql = $sql.'UPDATE mv_video SET transcript="'.$contents.'" WHERE youtube="'.$youtube_id.'";';

  file_put_contents("update.sql", $sql);

}

?>
