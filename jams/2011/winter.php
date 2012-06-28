<head>
	<link rel="stylesheet" type="text/css" href="../../style.css" />
</head>
<body>

	<div class = "sideBar">
		<?php include "../../sideBar.php" ?>
	</div>

	<div class = "page" >

		<div id = "headerImage" > </div>

		<div class = "content">
			<h2>2011 School Year</h2>
			<h3>Winter Game Jam</h3>
			<p>The first ever CSH Game Jam! There was no theme, and people gathered mainly in the user center to work. This Jam saw the birth and death of the CSH Game Jam metagame.</p>
			<b>theme: </b> none
			<h3>Games</h3>
			<?php
				$filename = basename($_SERVER["REQUEST_URI"], ".php") . ".json";
				$data = file_get_contents("data/" . $filename);
				$json = json_decode($data, true);

				foreach ($json["games"] as $game) {
					$year = substr($filename, 4);
					$name = addslashes($game["name"]);
					$author = addslashes($game["author"]);
					$description = addslashes($game["description"]);
					$website = addslashes($game["website"]);
					$dl = addslashes($year . "/games/" . $name);

					echo "<h3>" . $name . "</h3>";
					echo "<img src=\'" . $name . ".png\'" . " />". "<br />";
					echo "<b>Author: </b>" . $author . "<br />";
					echo "<b>Description: </b>" . $description . "<br />";
					echo "<b>Website: </b><a href=\'" . $website . "\'>" . "link" . "</a>". "<br />";
					echo "<b>Download/Play: </b><a href=\'" . $dl . "\'>" . "link" . "</a>". "<br />";
				}
			?>
		</div>

	</div>

</body>
