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
					}

					foreach ($overview_items as $key => $data) {
						$overview_items[$key] = explode(":", implode($data));
					}

					print_r($overview_items);

					echo "$overview_items[0]";

						?>
				</p>

				<div class="reviews-column">

					<?php

							$review_full = file("moviefiles/$movie/review1.txt");
							list($review, $rev_rating, $author, $org)

							<p> echo "$review"</p>


					?>


					<p>
						<img src="rotten.gif" alt="Rotten" />
						<q>Ditching the cheeky, self-aware wink that helped to excuse the concept's inherent corniness, the movie attempts to look polished and 'cool,' but the been-there animation can't compete with the then-cutting-edge puppetry of the 1990 live-action movie.</q>
					</p>
					<p>
						<img src="critic.gif" alt="Critic" />
						Peter Debruge <br />
						<em>Variety</em>
					</p>

					<p>
						<img src="fresh.gif" alt="Fresh" />
						<q>TMNT is a fun, action-filled adventure that will satisfy longtime fans and generate a legion of new ones.</q>
					</p>
					<p>
						<img src="critic.gif" alt="Critic" />
						Todd Gilchrist <br />
						<em>IGN Movies</em>
					</p>

					<p>
						<img src="rotten.gif" alt="Rotten" />
						<q>It stinks!</q>
					</p>
					<p>
						<img src="critic.gif" alt="Critic" />
						Jay Sherman (unemployed)
					</p>

					<p>
						<img src="rotten.gif" alt="Rotten" />
						<q>The rubber suits are gone and they've been redone with fancy computer technology, but that hasn't stopped them from becoming dull.</q>
					</p>
					<p>
						<img src="critic.gif" alt="Critic" />
						Joshua Tyler <br />
						<em>CinemaBlend.com</em>
					</p>

					<p>
						<img src="rotten.gif" alt="Rotten" />
						<q>The turtles are truly heroes to our youth. They are
						half-shelled role models</q>
					</p>
					<p>
						<img src="critic.gif" alt="Critic" />
						Dontaello<br />
						<em>Inventor Weekly</em>
					</p>
				</div>

				<div class="reviews-column">
					<p>
						<img src="rotten.gif" alt="Rotten" />
						<q>The turtles themselves may look prettier, but are no smarter; torn irreparably from their countercultural roots, our superheroes on the half shell have been firmly co-opted by the industry their creators once sought to spoof.</q>
					</p>
					<p>
						<img src="critic.gif" alt="Critic" />
						Jeannette Catsoulis <br />
						<em>New York Times</em>
					</p>

					<p>
						<img src="rotten.gif" alt="Rotten" />
						<q>Impersonally animated and arbitrarily plotted, the story appears to have been made up as the filmmakers went along.</q>
					</p>
					<p>
						<img src="critic.gif" alt="Critic" />
						Ed Gonzalez <br />
						<em>Slant Magazine</em>
					</p>

					<p>
						<img src="fresh.gif" alt="Fresh" />
						<q>The striking use of image and motion allows each sequence to leave an impression. It's an accomplished restart to this franchise.</q>
					</p>
					<p>
						<img src="critic.gif" alt="Critic" />
						Mark Palermo <br />
						<em>Coast (Halifax, Nova Scotia)</em>
					</p>

					<p>
						<img src="rotten.gif" alt="Rotten" />
						<q>The script feels like it was computer generated. This mechanical presentation lacks the cheesy charm of the three live action films.</q>
					</p>
					<p>
						<img src="critic.gif" alt="Critic" />
						Steve Rhodes <br />
						<em>Internet Reviews</em>
					</p>

					<p>
						<img src="rotten.gif" alt="Rotten" />
						<q>These turtles are rad dude!</q>
					</p>
					<p>
						<img src="critic.gif" alt="Critic" />
						Michelangelo <br />
						<em>Tubular Magazine</em>
					</p>
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
