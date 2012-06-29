<head>
	<link rel="stylesheet" type="text/css" href="../style.css" />
</head>
<body>

	<div class = "sideBar">
		<?php include "../sideBar.php" ?>
	</div>

	<div class = "page" >

		<div id = "headerImage" > </div>

		<div class = "content">
			<h2>List of Game Jams</h2>

			<?php
				// generate links
				$year = 2011;
				while(true) {
					if(file_exists($year . "/")) {
						echo "<h2>" . $year . "</h2>";
					} else {
						break;
					}
					if(file_exists($year . "/fall.php")) {
						echo "<a href=" . $year . "/fall.php" . ">Fall Jam</a><br />";
					}
					if(file_exists($year . "/winter.php")) {
						echo "<a href=" . $year . "/winter.php" . ">Winter Jam</a><br />";
					}
					if(file_exists($year . "/spring.php")) {
						echo "<a href=" . $year . "/spring.php" . ">Spring Jam</a><br />";
					}
					if(file_exists($year . "/summer.php")) {
						echo "<a href=" . $year . "/summer.php" . ">Summer Jam</a><br />";
					}
					$year++;
				}
				
			?>
		</div>

	</div>

</body>
