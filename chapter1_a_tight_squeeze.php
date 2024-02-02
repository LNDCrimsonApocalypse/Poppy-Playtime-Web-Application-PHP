<?php include('includes/header.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Poppy Playtime by JNFB | Chapter 1: A Tight Squeeze</title>
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
			<font face="Courier New" color="#3c7de6">
				<b>CHAPTER 1: A TIGHT SQUEEZE</b>
			</font>
		</h2>
	</div>
	<div class="image1" align="center">
		<img src="images/Chapter1Logo.png" alt="Chapter 1" style="width:450px;height:50px;">
	</div>
	<br />
	<div class="image1" align="center">
		<img src="images/(CHAPTER 1) Huggy Wuggy.png" alt="Chapter 1" style="width:450px;height:250px;">
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

			$sql = "SELECT * FROM a_tight_squeeze";
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
				Chapter 1: "A Tight Squeeze" is the first instalment of the indie franchise: Poppy Playtime, 
				released on October 13th, 2021. The plot of the chapter revolves around an ex-employee of the 
				toy-manufacturing company: Playtime Co., returning to the old facility many years after everyone 
				within vanished.
			</b>
		</font>
	</p>
	<h3 align="center">
		<font face="Courier New" color="#3c7de6">
			<b>SYNOPSIS</b>
		</font>
	</h3>
	<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo1">VIEW SYNOPSIS</button>
	<div id="demo1" class="collapse">
		<p align="center">
			<font face="Courier New">
				<b>
					"As an ex-employee of Playtime Co., you finally return to the factory many years after 
					everybody within disappeared."
				</b>
			</font>
		</p>
	</div>
	<h3 align="center">
		<font face="Courier New" color="#3c7de6">
			<b>PLOT</b>
		</font>
	</h3>
	<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo">VIEW PLOT</button>
	<div id="demo" class="collapse">
		<p align="center">
			<font face="Courier New">
				<b>
					The chapter begins when The Player receives an anonymous letter inviting them back to the 
					factory to find the company's staff, with an image of a poppy, representing the location 
					they must find. A Yellow VHS Tape is also included with the message.
				</b>
			</font>
		</p>
		<div class="image1" align="center">
			<img src="images/Letter.png" alt="Letter" style="width:200px;height:100px;">
		</div>
		<p align="center">
			<font face="Courier New">
				<b>
					After watching the VHS tape, the note is displayed and the player is loaded into the abandoned 
					factory. After solving the code to unlock the door (green, pink, yellow, red, either in that 
					order or in reverse order), they are able to access a storage room that holds a GrabPack 
					and another VHS tape. Once The Player takes the GrabPack (which only has one arm for the 
					moment), they use it to enter the main wing area, where they are greeted by a giant statue of 
					Huggy Wuggy.
				</b>
			</font>
		</p>
		<br />
		<p align="center">
			<font face="Courier New">
				<b>
					On the left of the figure is a door that is protected by the GrabPack sensor. However, 
					upon placing the GrabPack on the sensor, the power will burn out, and The Player will need 
					to collect a key and unlock the door to the power room. After reconnecting the wires using the 
					GrabPack and turning the power back on, along with the lights, they will need to move to 
					another room. At this stage, Huggy will have moved from his plaque to another area.
				</b>
			</font>
		</p>
		<br />
		<p align="center">
			<font face="Courier New">
				<b>
					The Player is now able to enter the Warehouse, where they have to find 4 power cells to 
					activate the crane and collect the GrabPack's second hand. Then, The Player will need to 
					enter the conveyor belt that transfers toy parts to the Make-A-Friend machine, and fix the 
					power to enable the conveyor belt to move. Once they arrive, they will need to turn on the 
					power upstairs, and make their own Cat-Bee. The Player then places their toy in the scanning 
					device to unlock the door, but instead of leaving, Huggy Wuggy will emerge and chase them 
					around the room until they enter the ventilation system next to the Make-A-Friend machine, 
					and will have to run away from Huggy Wuggy, who is following them, trying to hug them to 
					death. Once The Player leaves the vent, the exit will be closed shut behind them, and they 
					will have to pull down a box from above them that will break the bridge to stop Huggy Wuggy 
					from reaching them.
				</b>
			</font>
		</p>
		<br />
		<p align="center">
			<font face="Courier New">
				<b>
					Finally, The Player will then walk along the metal gratings until they pick up the black 
					VHS tape and use it in its corresponding tape player on the right, first, or move to the 
					door with the poppy painted around it, on the left. After entering the door, The Player will 
					go down some stairs until they reach a door with red and black lights moving around, similar 
					to those of a poppy flower, where Poppy Playtime is situated. After opening the door, the 
					lights will flicker as Poppy's eyes open, and the chapter ends.
				</b>
			</font>
		</p>
	</div>
	<h3 align="center">
		<font face="Courier New" color="#3c7de6">
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
			<a target="_blank" href="images/Main Room.png">
				<img src="images/Main Room.png" alt="Main Room" width="200" height="150">
			</a>
			<div class="desc">
				<font face="Courier New">
					<b>Main Room</b>
				</font>
			</div>
		</div>
	</div>
	<div class="responsive">
		<div class="gallery">
			<a target="_blank" href="images/Playtime Area.png">
				<img src="images/Playtime Area.png" alt="Playtime Area" width="200" height="150">
			</a>
			<div class="desc">
				<font face="Courier New">
					<b>Playtime Area</b>
				</font>
			</div>
		</div>
	</div>
	<div class="responsive">
		<div class="gallery">
			<a target="_blank" href="images/Hallway.png">
				<img src="images/Hallway.png" alt="Hallway" width="200" height="150">
			</a>
			<div class="desc">
				<font face="Courier New">
					<b>Hallway</b>
				</font>
			</div>
		</div>
	</div>
	<div class="responsive">
		<div class="gallery">
			<a target="_blank" href="images/Security Entrance.png">
				<img src="images/Security Entrance.png" alt="Security Entrance" width="200" height="150">
			</a>
			<div class="desc">
				<font face="Courier New">
					<b>Security Entrance</b>
				</font>
			</div>
		</div>
	</div>
	<div class="responsive">
		<div class="gallery">
			<a target="_blank" href="images/Gift Shop.png">
				<img src="images/Gift Shop.png" alt="Gift Shop" width="200" height="150">
			</a>
			<div class="desc">
				<font face="Courier New">
					<b>Gift Shop</b>
				</font>
			</div>
		</div>
	</div>
	<div class="responsive">
		<div class="gallery">
			<a target="_blank" href="images/Warehouse.png">
				<img src="images/Warehouse.png" alt="Warehouse" width="200" height="150">
			</a>
			<div class="desc">
				<font face="Courier New">
					<b>Warehouse</b>
				</font>
			</div>
		</div>
	</div>
	<div class="responsive">
		<div class="gallery">
			<a target="_blank" href="images/Ventilation.png">
				<img src="images/Ventilation.png" alt="Ventilation" width="200" height="150">
			</a>
			<div class="desc">
				<font face="Courier New">
					<b>Ventilation</b>
				</font>
			</div>
		</div>
	</div>
	<div class="responsive">
		<div class="gallery">
			<a target="_blank" href="images/Make-A-Friend.png">
				<img src="images/Make-A-Friend.png" alt="Make-A-Friend" width="200" height="150">
			</a>
			<div class="desc">
				<font face="Courier New">
					<b>Make-A-Friend</b>
				</font>
			</div>
		</div>
	</div>
	<div class="responsive">
		<div class="gallery">
			<a target="_blank" href="images/Huggy Wuggy Chase.png">
				<img src="images/Huggy Wuggy Chase.png" alt="Huggy Wuggy Chase" width="200" height="150">
			</a>
			<div class="desc">
				<font face="Courier New">
					<b>Huggy Wuggy Chase</b>
				</font>
			</div>
		</div>
	</div>
	<div class="responsive">
		<div class="gallery">
			<a target="_blank" href="images/Poppy Room Outside.png">
				<img src="images/Poppy Room Outside.png" alt="Poppy Room Outside" width="200" height="150">
			</a>
			<div class="desc">
				<font face="Courier New">
					<b>Poppy Room Outside</b>
				</font>
			</div>
		</div>
	</div>
	<div class="responsive">
		<div class="gallery">
			<a target="_blank" href="images/Poppy Room Inside Part 1.png">
				<img src="images/Poppy Room Inside Part 1.png" alt="Poppy Room Inside Part 1" width="200" height="150">
			</a>
			<div class="desc">
				<font face="Courier New">
					<b>Poppy Room Inside Part 1</b>
				</font>
			</div>
		</div>
	</div>
	<div class="responsive">
		<div class="gallery">
			<a target="_blank" href="images/Poppy Room Inside.png">
				<img src="images/Poppy Room Inside.png" alt="Poppy Room Inside Part 2" width="200" height="150">
			</a>
			<div class="desc">
				<font face="Courier New">
					<b>Poppy Room Inside Part 2</b>
				</font>
			</div>
		</div>
	</div>
	<h4 align="center">
		<font face="Courier New">
			<b>STEAM IMAGES</b>
		</font>
	</h4>
	<div class="responsive">
		<div class="gallery">
			<a target="_blank" href="images/Chapter 1_SI1.jpg">
				<img src="images/Chapter 1_SI1.jpg" alt="Chapter 1 Steam Image 1" width="200" height="150">
			</a>
			<div class="desc">
				<font face="Courier New">
					<b>Chapter 1 Steam Image 1</b>
				</font>
			</div>
		</div>
	</div>
	<div class="responsive">
		<div class="gallery">
			<a target="_blank" href="images/Chapter 1_SI2.jpg">
				<img src="images/Chapter 1_SI2.jpg" alt="Chapter 1 Steam Image 2" width="200" height="150">
			</a>
			<div class="desc">
				<font face="Courier New">
					<b>Chapter 1 Steam Image 2</b>
				</font>
			</div>
		</div>
	</div>
	<div class="responsive">
		<div class="gallery">
			<a target="_blank" href="images/Chapter 1_SI3.jpg">
				<img src="images/Chapter 1_SI3.jpg" alt="Chapter 1 Steam Image 3" width="200" height="150">
			</a>
			<div class="desc">
				<font face="Courier New">
					<b>Chapter 1 Steam Image 3</b>
				</font>
			</div>
		</div>
	</div>
	<div class="responsive">
		<div class="gallery">
			<a target="_blank" href="images/Chapter 1_SI4.jpg">
				<img src="images/Chapter 1_SI4.jpg" alt="Chapter 1 Steam Image 4" width="200" height="150">
			</a>
			<div class="desc">
				<font face="Courier New">
					<b>Chapter 1 Steam Image 4</b>
				</font>
			</div>
		</div>
	</div>
	<h4 align="center">
		<font face="Courier New">
			<b>GAMEPLAY TRAILER</b>
		</font>
	</h4>
	<div class="video-container">
		<iframe width="1000" height="500" src="https://www.youtube.com/embed/xMQm8ubM-Cw?si=uLBk_Fxoa0cc62kD" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
	</div>
	<br />
	<h4 align="center">
		<font face="Courier New">
			<b>FULL GAMEPLAY</b>
		</font>
	</h4>
	<div class="video-container">
		<iframe width="1000" height="500" src="https://www.youtube.com/embed/8tcmDND2oA0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	</div>
	<br />
</body>
</html>
<?php include('includes/footer.php'); ?>