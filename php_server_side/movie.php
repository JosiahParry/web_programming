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
					/*print_r(implode($overview_items));
					print_r(explode(":", $overview_items[0]));
	*/
	/*				$var = explode(":", $overview_items);*/

					foreach ($overview_items as $key => $data) {
						$overview_items[$key] = explode(",", $data);
						$index = 1;
					}

					foreach ($overview_items as $key => $data) {
						$overview_items[$key] = explode(":", implode($data));
						$index = 0;
					}

					foreach ($overview_items as $item){
						echo "<p> implode($item) </p>";
				}
					print_r($overview_items);


						?>
				<dl>
					<dt>STARRING</dt>
					<dd>Patrick Stewart <br /> Mako <br /> Sarah Michelle Gellar <br /> Kevin Smith</dd>

					<dt>DIRECTOR</dt>
					<dd>Kevin Munroe</dd>

					<dt>RATING</dt>
					<dd>PG</dd>

					<dt>THEATRICAL RELEASE</dt>
					<dd>Mar 23, 2007</dd>

					<dt>MOVIE SYNOPSIS</dt>
					<dd>After the defeat of their old arch nemesis, The Shredder, the Turtles have grown apart as a family.</dd>

					<dt>MPAA RATING</dt>
					<dd>PG, for animated action violence, some scary cartoon images and mild language</dd>

					<dt>RELEASE COMPANY</dt>
					<dd>Warner Bros.</dd>

					<dt>RUNTIME</dt>
					<dd>90 mins</dd>

					<dt>GENRE</dt>
					<dd>Action/Adventure, Comedies, Childrens, Martial Arts, Superheroes, Ninjas, Animated Characters</dd>

					<dt>BOX OFFICE</dt>
					<dd>$54,132,596</dd>

					<dt>LINKS</dt>
					<dd>
						<ul>
							<li><a href="http://www.ninjaturtles.com/">The Official TMNT Site</a></li>
							<li><a href="http://www.rottentomatoes.com/m/teenage_mutant_ninja_turtles/">RT Review</a></li>
							<li><a href="http://www.rottentomatoes.com/">RT Home</a></li>
						</ul>
					</dd>
				</dl>
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

				<div class="reviews-column">

					<?php
						$len = count(glob("moviefiles/$movie/review*.txt"));
						for ($i = 1; $i <= 10; $i++) {
							$review_full = file("moviefiles/$movie/review{$i}.txt");
							list($review, $rev_rating, $author, $org) = $review_full;
							echo "<p>";
								if ($rev_rating = "ROTTEN"){
									echo "<img src='hw3-completed/fresh.gif' alt='Rotten' />";
								} elseif ($rev_rating = "FRESH"){
									echo "<img src='hw3-completed/fresh.gif' alt='FRESH' />";
								}
							echo "
								<q>$review</q></p>
								<p>$author <br />
								<em>$org</em>
								</p>";


						}
					?>
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
