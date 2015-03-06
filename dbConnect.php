<?php

	function dbConnect()
	{
		$sql = mysqli_connect('localhost' ,'root','delta2345','iii');
		return $sql;

	}

?>