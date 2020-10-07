<html>
	<head>
		<title>Oddjob - Experimental</title>
	</head>
	<body>
		<h1>Experimental</h1>
				
		<p>This is what's available:</p>
				
		<?php
	$dir = "../../dist/oddjob/";
	
	$files = array();
	
	// Open a known directory, and proceed to read its contents
	if (is_dir($dir)) {
		if ($dh = opendir($dir)) {
			while (($file = readdir($dh)) !== false) {
				if (filetype("$dir$file") == "file") {
					$files[] = $file;
				}
			}
			closedir($dh);
		}
	}
	
	rsort($files);
	
	echo "<ul>\n";
	foreach ($files as $file) {
		echo "<li><a href=\"$dir$file\"/>$file</a></li>\n";
	}
	echo "</ul>\n";
	
	??>
		
	</body>
</html>
