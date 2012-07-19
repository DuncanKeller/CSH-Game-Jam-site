<?php
	$year = $argv[1];
	$quarter = $argv[2];
	echo "creating page " . $quarter . " in dir " . $year . "\n";

	// create directories
	if(!file_exists("jams/" . $year . "/" )) {
		mkdir("jams/" . $year);
		mkdir("jams/" . $year . "/" . "data");
		mkdir("jams/" . $year . "/" . "images");
		mkdir("jams/" . $year . "/" . "games");
	}
	// create html jam page
	if(!file_exists("jams/" . $year . "/" . $quarter . ".php" )) {
		$jamFile = "jams/" . $year . "/" . $quarter . ".php";
		$fh = fopen($jamFile, 'w');
		$head = "<head><link rel=\"stylesheet\" type=\"text/css\" href=\"../../style.css\" /></head>";
		fwrite($fh, $head);
		$bodyOpen = "<body><div class = \"sideBar\"><?php include \"../../sideBar.php\" ?></div><div class = \"page\" ><div id = \"headerImage\" > </div><div class = \"content\">";
		fwrite($fh, $bodyOpen);
		$pageInfo = "<h2>" . $year . " School Year</h2><h3>" . ucfirst ucfirst($quarter) . " Game Jam</h3>";
		fwrite($fh, $pageInfo);
		$bodyClose = "<?php include \"../generateContent.php\";?></div></div></body>";
		fwrite($fh, $bodyClose);
		fclose($fh);

		// create json stub 
		$jsonTemplate = file_get_contents("example.json");
		$json = "jams/" . $year . "/data/" . $quarter . ".json";
		$jsonWriter = fopen($json, 'w');
		fwrite($jsonWriter, $jsonTemplate);
		fclose($jsonWriter);
	}

	echo "done";

?>
