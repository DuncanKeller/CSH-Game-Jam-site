<?php
	$filename = basename($_SERVER["REQUEST_URI"], ".php") . ".json";
	$data = file_get_contents("data/" . $filename);
	$json = json_decode($data, true);

echo $json;

	echo "<p>" . $json["description"] . "</p>";
	echo "<br />";
	echo "<b>theme: </b>" . $json["theme"];
	echo "<h2>Games</h2>";
	foreach ($json["games"] as $game) {
		$name = addslashes($game["name"]);
		$author = addslashes($game["author"]);
		$description = addslashes($game["description"]);
		$website = addslashes($game["website"]);
		$dl = addslashes($year . "/games/" . $name);

		echo "<h3>" . $name . "</h3>";
		echo "<img src=\"" . $name . ".png\"" . " />". "<br />";
		echo "<b>Author: </b>" . $author . "<br />";
		echo "<b>Description: </b>" . $description . "<br />";
		echo "<b>Website: </b><a href=" . $website . ">" . "link" . "</a>". "<br />";
		echo "<b>Download/Play: </b><a href=" . $dl . ">" . "link" . "</a>". "<br />";
	}
?>
