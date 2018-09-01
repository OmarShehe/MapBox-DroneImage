<?php
$my_file = 'file.txt';
$handle = fopen($my_file, 'a') or die('Cannot open file:  '.$my_file);
$new_data = "\n".'New data line 2';
echo fwrite($handle, $new_data);
