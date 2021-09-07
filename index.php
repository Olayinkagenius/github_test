<?php
echo "Hello World, Writing file";
$file = fopen('./file.html',"w");
fwrite($file, "Hello World");
?>
