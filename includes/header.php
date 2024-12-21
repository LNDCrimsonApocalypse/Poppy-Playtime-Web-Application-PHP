<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style>
    body {
		padding: 0px;
		background-color: white;
		color: black;
		font-size: 14px;
	}
	.dark-mode {
		background-color: #383e47;
		color: white;
	}
</style>
<body>
    <nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<font face="Courier New">
					<b><a class="navbar-brand" href="home.php">Welcome to Poppy Playtime Website by JNFB</a></b>
				</font>
			</div>
			<ul class="nav navbar-nav">
				<li><a href="home.php">Home</a></li>
				<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Chapters <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="chapter1_a_tight_squeeze.php">Chapter 1: A Tight Squeeze</a></li>
						<li><a href="chapter2_fly_in_a_web.php">Chapter 2: Fly in a Web</a></li>
						<li><a href="chapter3_deep_sleep.php">Chapter 3: Deep Sleep</a></li>
						<li><a href="#">Chapter 4</a></li>
						<li><a href="project_playtime.php">Project: Playtime</a></li>
					</ul>
				</li>
				<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Characters <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="char_poppy_playtime.php">Poppy Playtime</a></li>
						<li><a href="char_huggy_wuggy.php">Huggy Wuggy</a></li>
						<li><a href="char_mommy_long_legs.php">Mommy Long Legs</a></li>
						<li><a href="char_bunzo_bunny.php">Bunzo Bunny</a></li>
						<li><a href="char_mini_huggies.php">Mini Huggies</a></li>
						<li><a href="char_pj_pug_a_pillar.php">PJ Pug-a-pillar</a></li>
						<li><a href="char_catnap.php">CatNap</a></li>
						<li><a href="char_dogday.php">DogDay</a></li>
						<li><a href="char_bobby_bearhug.php">Bobby BearHug</a></li>
						<li><a href="char_pickypiggy.php">PickyPiggy</a></li>
						<li><a href="char_kickinchicken.php">KickinChicken</a></li>
						<li><a href="char_craftycorn.php">CraftyCorn</a></li>
						<li><a href="char_bubba_bubbaphant.php">Bubba Bubbaphant</a></li>
						<li><a href="char_hoppy_hopscotch.php">Hoppy Hopscotch</a></li>
						<li><a href="#">Miss Delight</a></li>
					</ul>
				</li>
				<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Chapter 1 Locations <span class="caret"></span></a> 
					<ul class="dropdown-menu">
						<li><a href="#">Playtime Co.</a></li>
					</ul>
				</li>
				<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Chapter 2 Locations <span class="caret"></span></a> 
					<ul class="dropdown-menu">
						<li><a href="#">Elliot Ludwig's Office</a></li>
						<li><a href="#">Game Station</a></li>
					</ul>
				</li>
				<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Chapter 3 Locations <span class="caret"></span></a> 
					<ul class="dropdown-menu">
						<li><a href="#">Playcare</a></li>
						<li><a href="#">Home Sweet Home</a></li>
					</ul>
				</li>
				<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Project: Playtime Locations <span class="caret"></span></a> 
					<ul class="dropdown-menu">
						<li><a href="#">Theater (Phase 1)</a></li>
						<li><a href="#">Playtime Factory (Phase 1)</a></li>
						<li><a href="#">Destroy-a-Toy (Phase 2)</a></li>
						<li><a href="#">Misfit Pit (Phase 3)</a></li>
					</ul>
				</li>
				<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">VHS <span class="caret"></span></a> 
					<ul class="dropdown-menu">
						<li><a href="#">Poppy Playtime VHS</a></li>
						<li><a href="#">Mommy Long Legs Commercial</a></li>
						<li><a href="#">CatNap Recall</a></li>
					</ul>
				</li>
				<li><a href="patch_notes_and_updates.php">Patch Notes and Updates</a></li>
				<button onclick="myFunction()">SWITCH MODE</button>
			</ul>
		</div>
	</nav>
    <script>
		function myFunction() {
  			var element = document.body;
 			element.classList.toggle("dark-mode");

			 var isDarkMode = element.classList.contains("dark-mode");
    		localStorage.setItem("darkMode", isDarkMode);
		}
		document.addEventListener("DOMContentLoaded", function() {
			var isDarkMode = localStorage.getItem("darkMode") === "true";
			var element = document.body;

			if (isDarkMode) {
				element.classList.add("dark-mode");
			}
		});
	</script>
</body>
</html>