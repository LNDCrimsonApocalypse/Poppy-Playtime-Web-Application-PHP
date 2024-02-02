<?php include('includes/header.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Poppy Playtime by JNFB | Chapter 2: Fly in a Web</title>
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
			<font face="Courier New" color="#05990c">
				<b>CHAPTER 2: FLY IN A WEB</b>
			</font>
		</h2>
	</div>
	<div class="image1" align="center">
		<img src="images/Chapter2Logo.png" alt="Chapter 2" style="width:450px;height:50px;">
	</div>
	<br />
	<div class="image1" align="center">
		<img src="images/(CHAPTER 2) Mommy Long Legs.png" alt="Chapter 2" style="width:450px;height:250px;">
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

			$sql = "SELECT * FROM fly_in_a_web";
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
				Chapter 2: "Fly in a Web" is the second instalment of the indie franchise: Poppy Playtime, 
				released on May 5th, 2022. The plot of the chapter continues after the end of the previous 
				chapter: Chapter 1: "A Tight Squeeze", where the Player releases Poppy Playtime from her 
				confinement. Now the Player must find a way to escape Playtime Co.'s toy factory.
			</b>
		</font>
	</p>
	<h3 align="center">
		<font face="Courier New" color="#05990c">
			<b>SYNOPSIS</b>
		</font>
	</h3>
	<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo1">VIEW SYNOPSIS</button>
	<div id="demo1" class="collapse">
		<p align="center">
			<font face="Courier New">
				<b>
					"With Poppy now free, the situation begins to change rapidly while you search for any way to 
					escape the factory."
				</b>
			</font>
		</p>
	</div>
	<h3 align="center">
		<font face="Courier New" color="#05990c">
			<b>PLOT</b>
		</font>
	</h3>
	<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo">VIEW PLOT</button>
	<div id="demo" class="collapse">
		<p align="center">
			<font face="Courier New">
				<b>
					After the events of Chapter 1: A Tight Squeeze, The Player follows Poppy, who, in response 
					to their rescue, decides to help them escape via the Game Station located deep under the 
					facility. This plan is soon vandalized, as the chapter's main antagonist, Mommy Long Legs 
					assaults and snatches Poppy, forcing The Player to drop down to attempt to save her. Once 
					in the station, Mommy Long Legs confronts The Player, stating that in order to escape, The 
					Player must play three games that become increasingly more difficult.
				</b>
			</font>
		</p>
		<br />
		<p align="center">
			<font face="Courier New">
				<b>
					The first game is Musical Memory, a "Simon Says"-like game where The Player has to select the 
					correct buttons before Bunzo Bunny can kill them. This will gradually get faster until the 
					game malfunctions and an emergency stop is required. The Player then finds themselves in a 
					warehouse full of rejected toys, where there is a switch to unlock the door that leads back 
					to the Game Station.
				</b>
			</font>
		</p>
		<br />
		<p align="center">
			<font face="Courier New">
				<b>
					The second game is Wack-a-Wuggy, a game similar to "Whack-a-Mole", where The Player must hit 
					the Mini Huggies with their GrabPack as they're coming out of holes in the walls.
				</b>
			</font>
		</p>
		<br />
		<p align="center">
			<font face="Courier New">
				<b>
					The third game is Statues, a game similar to "Red Light. Green Light", where The Player 
					navigates a maze while being pursued by PJ Pug-a-Pillar. The Player stops when the lights 
					turn on and can move when the lights go off.
				</b>
			</font>
		</p>
		<br />
		<p align="center">
			<font face="Courier New">
				<b>
					The Player escapes the third game, which is obviously rigged (the ending is blocked by debris). 
					However, this infuriates Mommy Long Legs in the process, who starts hunting down The Player, 
					claiming that they "cheated", and that she is going to play 'one last game' with them, calling 
					it "Hide-and-Seek". After surviving Mommy's relentless chase, The Player will then trap 
					Mommy in a grinder and activate the lever, killing her. After this, a mysterious, claw-like 
					hand appears from the bottom of the partially closed door and drags Mommy's severed torso 
					into the dark, before the door to the right opens, and The Player is let back into the Game 
					Station. Navigating Bay 09 lets them find a trapped Poppy, and they proceed to free her. 
					Poppy then boards the Train while The Player inputs the Train Code correctly, and the Train 
					begins to move.
				</b>
			</font>
		</p>
		<br />
		<p align="center">
			<font face="Courier New">
				<b>
					However, Poppy, witnessing their outstanding agility and intelligence, deems that they are 
					'too perfect to lose', and changed the train's direction at the last second. Poppy then 
					states she had 'much time to think and reflect', and that together, she and The Player can 
					'set things right'. Before she can finish, the sound of a digital alarm clock cuts her off, 
					leaving her with only enough time to exclaim 'what is-?' before the audio is cut off. The 
					Train begins to accelerate at an alarming pace. The Player attempts to use the emergency stop, 
					but the Train derails and crashes, and their vision fades into darkness afterwards, but not 
					before they see a sign for Playcare. The chapter then ends.
				</b>
			</font>
		</p>
	</div>
	<h3 align="center">
		<font face="Courier New" color="#05990c">
			<b>GALLERY</b>
		</font>
	</h3>
	<h4 align="center">
		<font face="Courier New">
			<b>FROM GAMEPLAY SCREENSHOTS</b>
		</font>
	</h4>
	<div class="responsive">
		<div class="gallery">
			<a target="_blank" href="images/Elliot Ludwig Office.png">
				<img src="images/Elliot Ludwig Office.png" alt="Elliot Ludwig Office" width="200" height="150">
			</a>
			<div class="desc">
				<font face="Courier New">
					<b>Elliot Ludwig Office</b>
				</font>
			</div>
		</div>
	</div>
	<div class="responsive">
		<div class="gallery">
			<a target="_blank" href="images/Mommy Hallway.png">
				<img src="images/Mommy Hallway.png" alt="Mommy Hallway" width="200" height="150">
			</a>
			<div class="desc">
				<font face="Courier New">
					<b>Mommy Hallway</b>
				</font>
			</div>
		</div>
	</div>
	<div class="responsive">
		<div class="gallery">
			<a target="_blank" href="images/Game Station.png">
				<img src="images/Game Station.png" alt="Game Station" width="200" height="150">
			</a>
			<div class="desc">
				<font face="Courier New">
					<b>Game Station</b>
				</font>
			</div>
		</div>
	</div>
	<div class="responsive">
		<div class="gallery">
			<a target="_blank" href="images/Musical Memory.png">
				<img src="images/Musical Memory.png" alt="Musical Memory" width="200" height="150">
			</a>
			<div class="desc">
				<font face="Courier New">
					<b>Musical Memory</b>
				</font>
			</div>
		</div>
	</div>
	<div class="responsive">
		<div class="gallery">
			<a target="_blank" href="images/Rejected Room.png">
				<img src="images/Rejected Room.png" alt="Rejected Room" width="200" height="150">
			</a>
			<div class="desc">
				<font face="Courier New">
					<b>Rejected Room</b>
				</font>
			</div>
		</div>
	</div>
	<div class="responsive">
		<div class="gallery">
			<a target="_blank" href="images/Whack-a-Wuggy.png">
				<img src="images/Whack-a-Wuggy.png" alt="Whack-a-Wuggy" width="200" height="150">
			</a>
			<div class="desc">
				<font face="Courier New">
					<b>Whack-a-Wuggy</b>
				</font>
			</div>
		</div>
	</div>
	<div class="responsive">
		<div class="gallery">
			<a target="_blank" href="images/Cart Corridor.png">
				<img src="images/Cart Corridor.png" alt="Cart Corridor" width="200" height="150">
			</a>
			<div class="desc">
				<font face="Courier New">
					<b>Cart Corridor</b>
				</font>
			</div>
		</div>
	</div>
	<div class="responsive">
		<div class="gallery">
			<a target="_blank" href="images/Statues.png">
				<img src="images/Statues.png" alt="Statues" width="200" height="150">
			</a>
			<div class="desc">
				<font face="Courier New">
					<b>Statues</b>
				</font>
			</div>
		</div>
	</div>
	<div class="responsive">
		<div class="gallery">
			<a target="_blank" href="images/Water Treatment.png">
				<img src="images/Water Treatment.png" alt="Water Treatment" width="200" height="150">
			</a>
			<div class="desc">
				<font face="Courier New">
					<b>Water Treatment</b>
				</font>
			</div>
		</div>
	</div>
	<div class="responsive">
		<div class="gallery">
			<a target="_blank" href="images/Incinerator Room.png">
				<img src="images/Incinerator Room.png" alt="Incinerator Room" width="200" height="150">
			</a>
			<div class="desc">
				<font face="Courier New">
					<b>Incinerator Room</b>
				</font>
			</div>
		</div>
	</div>
	<div class="responsive">
		<div class="gallery">
			<a target="_blank" href="images/Bay 09.png">
				<img src="images/Bay 09.png" alt="Bay 09" width="200" height="150">
			</a>
			<div class="desc">
				<font face="Courier New">
					<b>Bay 09</b>
				</font>
			</div>
		</div>
	</div>
	<div class="responsive">
		<div class="gallery">
			<a target="_blank" href="images/Mommy Long Legs Chase.png">
				<img src="images/Mommy Long Legs Chase.png" alt="Mommy Long Legs Chase" width="200" height="150">
			</a>
			<div class="desc">
				<font face="Courier New">
					<b>Mommy Long Legs Chase</b>
				</font>
			</div>
		</div>
	</div>
	<h4 align="center">
		<font face="Courier New">
			<b>TEASER TRAILER</b>
		</font>
	</h4>
	<div class="video-container">
		<iframe width="1000" height="500" src="https://www.youtube.com/embed/YrzrYXcAQU4?si=OY1BIf8UIPWiujaZ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
	</div>
	<br />
	<h4 align="center">
		<font face="Courier New">
			<b>GAMEPLAY TRAILER</b>
		</font>
	</h4>
	<div class="video-container">
		<iframe width="1000" height="500" src="https://www.youtube.com/embed/XVENjm3Bjk0?si=rZOydJZ0WT0QcpOZ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
	</div>
	<br />
	<h4 align="center">
		<font face="Courier New">
			<b>FULL GAMEPLAY</b>
		</font>
	</h4>
	<div class="video-container">
		<iframe width="1000" height="500" src="https://www.youtube.com/embed/CkzeM9p70Wk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
	</div>
	<br />
	<div class="video-container">
		<iframe width="1000" height="500" src="https://www.youtube.com/embed/6j-NPPU2-0Q" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
	</div>
	<br />
</body>
</html>
<?php include('includes/footer.php'); ?>