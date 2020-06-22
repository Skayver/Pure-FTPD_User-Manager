<?php

	$LFile = strtolower($LANG).".php";

	/* If the language doesn't exist we use english */
	if (!file_exists("language/".$LFile))
	{
		$LFile = "english.php";
	}

	/* Read the language file */
	require("language/".$LFile);

?>
