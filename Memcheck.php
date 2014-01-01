<?php
for($i=0;$i<10;$i++)
{
       include_static_file();
        echo "\n $i". convert(memory_get_usage(true));
}
function include_static_file()
{
	include_once("staticarray.php");
}
function convert($size)
 {
    $unit=array('b','kb','mb','gb','tb','pb');
    return @round($size/pow(1024,($i=floor(log($size,1024)))),2).' '.$unit[$i];
 }

?>
