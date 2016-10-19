<!DOCTYPE html>
<html>
<?php
	$movie = $_GET['film'];
	$info = file("moviefiles/$movie/info.txt");
	list($title, $year, $rating) = $info;
?>

	<head>
		<title>Rancid Tomatoes</title>
		<link rel="icon" href="rotten.gif" />
		<meta charset="utf-8" />
		<link href="movie.css" type="text/css" rel="stylesheet" />
	</head>

	<body>
		<div id="image-banner">
			<img src="hw3-completed/banner.png" alt="Rancid Tomatoes" />
		</div>

		<h1>
			<?php echo $title . '('.trim($year).')'; ?> </h1>

		<div id="content">
			<div id="overview">
				<div>
					<img src=<?php  echo "moviefiles/$movie/overview.png"?>
							 alt="general overview" />
				</div>

				<p>
					<?php
					$overview = file("moviefiles/$movie/overview.txt");
					$overview_items = explode(PHP_EOL, implode($overview));

					foreach ($overview_items as $key => $data) {
						$overview_items[$key] = explode(",", $data);
					}

					foreach ($overview_items as $key => $data) {
						$overview_items[$key] = explode(":", implode($data));

					}
					?>

				<dl> <?php
					foreach ($overview_items as $arr) {
						echo "<dt>$arr[0]</dt>
						<dd>$arr[1]</dt>";
					}
?> </dl>



			</div>

			<div id="reviews">
				<div id="reviews-header">
					<?php
								if ($rating >= "60") {
									echo "<img src='freshbig.png'
										alt='Fresh'/>";
									} else {
									echo "<img src='rottenbig.png'
										alt='Rotten'/>";
									}
					 			?>
					<?php echo "$rating%"?>
				</div>
				</p>

		<!--	<div class="reviews-column"> -->

					<?php
						$len = count(glob("moviefiles/$movie/review*.txt"));
						$revs = glob("moviefiles/$movie/review*.txt");

						/*foreach ($revs as $rev) {
							$rev1 = file($rev, FILE_IGNORE_NEW_LINES);
							list($review, $rev_rating, $author, $org) = $rev1;
							echo "<p>";
								if ($rev_rating == "ROTTEN") {
									echo "<img src='hw3-completed/rotten.gif' alt='Rotten' />";
								} else {
									echo "<img src='hw3-completed/fresh.gif' alt='Fresh' />";
								}
							echo "<q>$review</q></p>
										<p>$author <br />
										<em>$org</em>
										</p>";
						} */
					?>
				<!--</div>-->

				<div class="reviews-column">
					<?php for($i = 0; $i <= floor($len/2); $i++) {


						$rev1 = file($revs[$i], FILE_IGNORE_NEW_LINES);
						list($review, $rev_rating, $author, $org) = $rev1;
						echo "<p>";
							if ($rev_rating == "ROTTEN") {
								echo "<img src='hw3-completed/rotten.gif' alt='Rotten' />";
							} else {
								echo "<img src='hw3-completed/fresh.gif' alt='Fresh' />";
							}
						echo "<q>$review</q></p>
									<p>$author <br />
									<em>$org</em>
									</p>";
					} ?>
				</div>

				<div class="reviews-column">
					<?php for($i = floor(($len/2) + 1); $i <= $len -1; $i++) {


						$rev1 = file($revs[$i], FILE_IGNORE_NEW_LINES);
						list($review, $rev_rating, $author, $org) = $rev1;
						echo "<p>";
							if ($rev_rating == "ROTTEN") {
								echo "<img src='hw3-completed/rotten.gif' alt='Rotten' />";
							} else {
								echo "<img src='hw3-completed/fresh.gif' alt='Fresh' />";
							}
						echo "<q>$review</q></p>
									<p>$author <br />
									<em>$org</em>
									</p>";
					} ?>
				</div>


			</div>

			<p id="content-footer">(1-10) of 88</p>
		</div>

		<div id="validators">
			<a href="https://webster.cs.washington.edu/validate-html.php"><img src="http://webster.cs.washington.edu/w3c-html.png" alt="Valid HTML5" /></a> <br />
			<a href="https://webster.cs.washington.edu/validate-css.php"><img src="http://webster.cs.washington.edu/w3c-css.png" alt="Valid CSS" /></a>
		</div>
	</body>
</html>
