<?php include('includes/header.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Poppy Playtime by JNFB | Chapter 3: Deep Sleep</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style>
	table, td {
		border:2px solid;
	}
	div.gallery {
		border: 1px solid #ccc;
	}
	div.gallery:hover {
		border: 1px solid #777;
	}
	div.gallery img {
		width: 100%;
		height: 150px;
	}
	div.desc {
		padding: 15px;
		text-align: center;
	}
	* {
		box-sizing: border-box;
	}
	.responsive {
		padding: 0 6px;
		float: left;
		width: 24.99999%;
	}
	@media only screen and (max-width: 700px) {
		.responsive {
			width: 49.99999%;
			margin: 6px 0;
		}
	}
	@media only screen and (max-width: 500px) {
		.responsive {
			width: 100%;
		}
	}
	.clearfix:after {
		content: "";
		display: table;
		clear: both;
	}
	.video-container {
		position: relative;
		padding-bottom: 56.25%;
	}
	.video-container iframe {
		position: absolute;
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
	}
</style>
<body>
    <div class="container">
		<h2 align="center">
			<font face="Courier New" color="#e03024">
				<b>CHAPTER 3: DEEP SLEEP</b>
			</font>
		</h2>
	</div>
	<div class="image1" align="center">
		<img src="images/Chapter3Logo.png" alt="Chapter 3" style="width:450px;height:50px;">
	</div>
	<br />
	<div class="image1" align="center">
		<img src="images/(CHAPTER 3) CatNap.png" alt="Chapter 3" style="width:450px;height:250px;">
	</div>
	<br />
	<table style="width:75%" align="center">
		<tr>
			
		</tr>

		<?php
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "poppyplaytime_db";

			$conn = new mysqli($servername, $username, $password, $dbname);
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			}

			$sql = "SELECT * FROM deep_sleep";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
				while ($row = $result->fetch_assoc()) {
					echo "<tr>";
					echo "<td>" . $row['input'] . "</td>";
					echo "<td>" . $row['details'] . "</td>";
					echo "</tr>";
				}
			} 
			else {
				echo "<tr><td colspan='2'>No details.</td></tr>";
			}
		  
			$conn->close();
		?>
	</table>
	<br />
	<p align="center">
		<font face="Courier New">
			<b>
				Chapter 3: "Deep Sleep" is the third installment of the indie game Poppy Playtime, set to 
				release in December 2023. The plot of the chapter is yet to be revealed.
			</b>
		</font>
	</p>
	<h3 align="center">
		<font face="Courier New" color="#e03024">
			<b>SYNOPSIS</b>
		</font>
	</h3>
	<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo1">VIEW SYNOPSIS</button>
	<div id="demo1" class="collapse">
		<p align="center">
			<font face="Courier New">
				<b>
					"In the aftermath of the train crash, you now find yourself stranded in the depths with a 
					new goal in your sights."
				</b>
			</font>
		</p>
	</div>
	<h3 align="center">
		<font face="Courier New" color="#e03024">
			<b>PLOT</b>
		</font>
	</h3>
	<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo">VIEW PLOT</button>
	<div id="demo" class="collapse">
		<p align="center">
			<font face="Courier New">
				<b>
					After the train wreck from Chapter 2: Fly in a Web, The Player is thrown down a tunnel by 
					CatNap and lands in a trash compactor. After escaping, The Player makes their way to some 
					maintenance tunnels, where a person who calls himself Ollie calls The Player via phone and 
					explains the situation. The Player returns to the Train and enters the Playcare's train 
					station. They take Elliot's Express into the Playcare, and during the ride an audio 
					recording of Elliot Ludwig explains that he created Playcare for orphan children.
				</b>
			</font>
		</p>
		<br />
		<p align="center">
			<font face="Courier New">
				<b>
					Upon arriving at the Playcare, Ollie gives The Player a key to the Gas Production Zone 
					which is used to power the building but also produces a gas called “the red smoke”. After 
					activating the console, the power goes out. Ollie gives The Player a key to Home Sweet Home. 
					The Player enters Home Sweet Home and inhales the red smoke, and they begin to hallucinate. 
					They make their way through a maze of seemingly endless corridors, while also coming upon 
					audio recordings that claim that a dead child had been found on Elliot Ludwig's estate. The 
					Player reaches the end of the corridors, where they watch a tape welcoming employees to the 
					Playtime Co. factory. The tape becomes more and more disturbing, beginning to criticise The 
					Player for returning, and at the end a distorted, twisted version of Huggy Wuggy crawls out 
					of the VCR and eats The Player. The Player wakes up in the real Home Sweet Home, and they 
					find the Gas Mask soon after.
				</b>
			</font>
		</p>
		<br />
		<p align="center">
			<font face="Courier New">
				<b>
					After activating the power inside Home Sweet Home Kissy Missy tries to kill The Player 
					until she is stopped by Poppy. A remorseful Poppy explains that The Player needs to get rid 
					of the monsters who tortured them. She explains that The Prototype will kill The Player if 
					they escape and The Prototype needs to be killed. Ollie tells the player to go to the School 
					to restore power to it. While trying to turn on the generator, The Player encounters Miss 
					Delight who tries to kill The Player. The Player soon kills Miss Delight in a gated room.
				</b>
			</font>
		</p>
		<br />
		<p align="center">
			<font face="Courier New">
				<b>
					While trying to escape, The Player encounters DogDay, who explains that CatNap wants to 
					kill the player. DogDay also explains that CatNap takes orders from The Prototype who kills 
					anyone who doesn’t listen to it. The Mini Smiling Critters infest DogDay before trying to 
					kill The Player who escapes. Ollie then sends The Player to the Counselor's Office. While 
					trying to restore power, a mysterious figure knocks The Player out in a dream state. While 
					in the dream, Poppy asks The Player rhetorical questions with various visions of shadow 
					children in the classrooms.
				</b>
			</font>
		</p>
		<br />
		<p align="center">
			<font face="Courier New">
				<b>
					After connecting the Counselor's Office to the statue, Ollie gives The Player a battery to 
					the Gas Production Zone. After being placed, the red smoke appears while Catnap chases The 
					Player into an area where The Player inserts batteries to power up the Gas Production Zone. 
					Soon after, CatNap attempts to kill the player, but gets shocked and burned by the player. 
					The Prototype kills CatNap and takes his body. Poppy later shows The Player a videotape which 
					contains CCTV footage of what happened to The Player's coworkers, an incident she calls 
					“The Hour of Joy”. The tape shows Huggy Wuggy and other mascots, under the Prototype's orders, 
					indiscriminately killing everyone who was present in the factory at the time. Poppy then 
					explains that she had been thrown into the case the Player found her in at the time, but 
					she heard everything that happened and has since been distraught by the needless slaughter 
					of so many lives, including thosse who were innocent, on that day. Therefore, she has vowed 
					to put an end to the Prototype for what he has done.
				</b>
			</font>
		</p>
		<br />
		<p align="center">
			<font face="Courier New">
				<b>
					Poppy and The Player take an elevator downwards, in which screaming is heard, with Poppy 
					fearing for Kissy.
				</b>
			</font>
		</p>
	</div>
	<h3 align="center">
		<font face="Courier New" color="#e03024">
			<b>GALLERY</b>
		</font>
	</h3>
	<h4 align="center">
		<font face="Courier New">
			<b>SMILING CRITTERS PROFILE</b>
		</font>
	</h4>
	<h5 align="center">
		<font face="Courier New">
			<b><a href="https://twitter.com/mobgamesstudios">Mob Entertainment Twitter</a></b>
		</font>
	</h5>
	<div class="responsive">
		<div class="gallery">
			<a target="_blank" href="images/Bubba Bubbaphant.jpg">
				<img src="images/Bubba Bubbaphant.jpg" alt="Bubba Bubbaphant" width="200" height="150">
			</a>
			<div class="desc">
				<font face="Courier New">
					<b>Bubba Bubbaphant</b>
				</font>
			</div>
		</div>
	</div>
	<div class="responsive">
		<div class="gallery">
			<a target="_blank" href="images/Bobby BearHug.jpg">
				<img src="images/Bobby BearHug.jpg" alt="Bobby BearHug" width="200" height="150">
			</a>
			<div class="desc">
				<font face="Courier New">
					<b>Bobby BearHug</b>
				</font>
			</div>
		</div>
	</div>
	<div class="responsive">
		<div class="gallery">
			<a target="_blank" href="images/CraftyCorn.jpg">
				<img src="images/CraftyCorn.jpg" alt="CraftyCorn" width="200" height="150">
			</a>
			<div class="desc">
				<font face="Courier New">
					<b>CraftyCorn</b>
				</font>
			</div>
		</div>
	</div>
	<div class="responsive">
		<div class="gallery">
			<a target="_blank" href="images/KickinChicken.jpg">
				<img src="images/KickinChicken.jpg" alt="KickinChicken" width="200" height="150">
			</a>
			<div class="desc">
				<font face="Courier New">
					<b>KickinChicken</b>
				</font>
			</div>
		</div>
	</div>
	<div class="responsive">
		<div class="gallery">
			<a target="_blank" href="images/DogDay.jpg">
				<img src="images/DogDay.jpg" alt="DogDay" width="200" height="150">
			</a>
			<div class="desc">
				<font face="Courier New">
					<b>DogDay</b>
				</font>
			</div>
		</div>
	</div>
	<div class="responsive">
		<div class="gallery">
			<a target="_blank" href="images/PickyPiggy.jpg">
				<img src="images/PickyPiggy.jpg" alt="PickyPiggy" width="200" height="150">
			</a>
			<div class="desc">
				<font face="Courier New">
					<b>PickyPiggy</b>
				</font>
			</div>
		</div>
	</div>
	<div class="responsive">
		<div class="gallery">
			<a target="_blank" href="images/Hoppy Hopscotch.jpg">
				<img src="images/Hoppy Hopscotch.jpg" alt="Hoppy Hopscotch" width="200" height="150">
			</a>
			<div class="desc">
				<font face="Courier New">
					<b>Hoppy Hopscotch</b>
				</font>
			</div>
		</div>
	</div>
	<div class="responsive">
		<div class="gallery">
			<a target="_blank" href="images/CatNap.jpg">
				<img src="images/CatNap.jpg" alt="CatNap" width="200" height="150">
			</a>
			<div class="desc">
				<font face="Courier New">
					<b>CatNap</b>
				</font>
			</div>
		</div>
	</div>
	<h4 align="center">
		<font face="Courier New">
			<b>GAMEPLAY SCREENSHOTS</b>
		</font>
	</h4>
	<br />
	<h4 align="center">
		<font face="Courier New">
			<b>TEASER TRAILER 1</b>
		</font>
	</h4>
	<div class="video-container">
		<iframe width="1000" height="500" src="https://www.youtube.com/embed/QXSk2obIeJc?si=gsEoTz2O92MlT1SM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
	</div>
	<br />
	<h4 align="center">
		<font face="Courier New">
			<b>TEASER TRAILER 2</b>
		</font>
	</h4>
	<div class="video-container">
		<iframe width="1000" height="500" src="https://www.youtube.com/embed/eQ35V-wxHqY?si=zO5qLMmGjzLnyA02" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
	</div>
	<br />
	<h4 align="center">
		<font face="Courier New">
			<b>GAMEPLAY TRAILER 1</b>
		</font>
	</h4>
	<div class="video-container">
		<iframe width="1000" height="500" src="https://www.youtube.com/embed/s3_k03RC668?si=1Si2ganZgAGQsRt7" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
	</div>
	<br />
	<h4 align="center">
		<font face="Courier New">
			<b>GAMEPLAY TRAILER 2</b>
		</font>
	</h4>
	<div class="video-container">
		<iframe width="1000" height="500" src="https://www.youtube.com/embed/csD8OYxl2Cs?si=DZ-A8DF-LSmlhP56" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
	</div>
	<br />
	<h4 align="center">
		<font face="Courier New">
			<b>FULL GAMEPLAY</b>
		</font>
	</h4>
	<div class="video-container">
		<iframe width="1000" height="500" src="https://www.youtube.com/embed/DPLFJA_hNrI?si=TdjmT0nhX0R6MRQy" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
	</div>
	<br />
	<div class="video-container">
		<iframe width="1000" height="500" src="https://www.youtube.com/embed/ATXcPl3WTxY?si=Ou8VobHIsuZ22j8g" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
	</div>
	<br />
	<div class="video-container">
		<iframe width="1000" height="500" src="https://www.youtube.com/embed/WFTiBKhLn8c?si=oS-fDGAPdb6eWJxk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
	</div>
	<br />
</body>
</html>
<?php include('includes/footer.php'); ?>