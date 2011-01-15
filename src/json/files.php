<?php

// list all files in the files directory
foreach(glob("../files/*.json") as $filename){
  $name = preg_split("/\//",$filename);
  $name = preg_split("/\.json/", $name[2]);
  echo "<div class='file'>" .  $name[0] . "</div>";
}