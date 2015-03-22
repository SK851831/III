<?php
	$string='hello\'coolpdspdsfpfsd';
	$len=strlen($string);
	$str=str_split($string,6);
	$string=implode('<br>',$str);
	echo "$string<br>";
	echo $len."<br>";
	echo rand(0,1);

?>