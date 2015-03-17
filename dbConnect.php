<?php

	function dbConnect()
	{
		$sql = mysqli_connect('localhost' ,'login','test','iii');
		return $sql;

	}

?>