<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia&effect=neon|outline|emboss|shadow-multiple">
    <link href="style.css" rel="stylesheet">
	<title>project wi</title>
	</head>
<body>
	<div class="container">
		<div class="banner">
			<div class="nav">
				<b>Wedding Invitation</b>
				<div class="menu">
					<a href="#">Home</a>
					<a href="#us">Us</a>
					<a href="#venue">Venue</a>
                    <a href="#images">Photos</a>
					<a href="#events">Events</a>
                    <a href="#msgs">Msgs</a>
				</div>
			</div>
			<div class="text">
				<h1 >Rama & Sitha</h1>
				<span class="date">On 7th November, 2019</span>
			</div>
		</div>
		<div class="section">
			<div class="us">
				<h2><a name="us">We found love and we’re ready to celebrate it!</a></h2>
				
				<div class="us1">
					<img src="Images/groom.jpg" id="box1">
					<h2>Rama</h2>
				</div>
                
				<div class="us1">
					<img src="Images/bride.jpg" id="box2">
					<h2>Sita</h2>
				</div>
				<center><p>With joyful hearts and blessings from above,<br>
					we, <b>Rama</b> & <b>Sita</b>,
					invite you to witness our union in love and commitment.
					Join us as we celebrate this sacred moment together.
				</p></center>
			</div>
			<div class="venue">
				<h2><a name="venue">Venue</a></h2>
				<img src="https://i.ibb.co/wZk2sTj/wed-venue.jpg">
				<center><p>A beautiful venue for a beautiful love story.<br> Every love story is beautiful, but ours begins in this special place. A venue filled with love, where our hearts unite as one.</p>
				<h4>ADDRESS::</h4><address>The Garden Hall 123 Blossom Lane
					Springfield, IL 62701</address></center>
			</div>

			<div class="photos">
			 	<h2><a name="images">Gallery</a></h2>
				<div class="gallery">
					
						
						<span><img src="Images/eg5.jpg"></span>
						
						<span><img src="Images/eg8.jpg"></span>
						<span><img src="Images/eg9.jpg"></span>
					
						<span><img src="Images/bride.jpg"></span>
						<span><img src="Images/groom.jpg"></span>				
						
					
				</div>
				
			</div>

		    <div class="events" id="events">
				<h2>Events</h2>
				<center>
				<div class="elist">
					<button id="haldi" >Haldi</button>
					<button id="mehandi">Mehandi</button>
					<button id="sangeet">Sangeet</button>
					<button id="marriage">Marriage</button>
				</div></center>
				<center>
					<img class="imgs" id="imgs" src="Images/bgi1.jpg"></center>
			
				<center><div class="text" id="text">A wedding is a beautiful journey of love and joy, celebrated through vibrant events that mark the union of two souls.</div></center>
				<br>
				<br><div id="textContent"></div>
			</div>
           
			
			<div class="msgs" id="msgs">
				<h2>Please give your Blessings and your Suggestions</h2><br>
	   <center> <div class="form">
					<form action="submit.php" method="POST" name="form">
						<label>Enter your Name:</label>
						<input type="text" name="name" id="name" placeholder="   Enter your Name" required><br>
						<br>
						<label>Enter Your Suggestions:</label>
						<textarea id="msg" placeholder="	" name="wishes"></textarea>
						<br>
						<br>
						<input type="submit" id="btn" name="submit">
					</form>
				</div></center>
			</div>
			
		</div>
	</div>
	<?php
	include ("connection.php");
	?>

	<script>
 	     document.getElementById("haldi").addEventListener("click", function() {
            
            document.getElementById("imgs").src = "Images/haldi.jpg";
            document.getElementById("text").textContent = "Save the Date:17th jan 2023";
			 document.getElementById("textContent").textContent = "A night of music and laughter to celebrate love, family, and togetherness.Sangeet: where the rhythm of love meets the beats of celebration.Dancing together, hearts in harmony, souls singing with joy";
			document.getElementById("textContent").style.fontSize='30px';
		});

		document.getElementById("mehandi").addEventListener("click", function() {
           
            document.getElementById("imgs").src = "Images/mehandi.jpg";
             document.getElementById("text").textContent = "Save the Date:18th jan 2023";
            document.getElementById("textContent").textContent = "The Sangeet is a vibrant celebration filled with music, dance, and joy. It’s a time for families and friends to come together, celebrate love, and share in the happiness of the upcoming marriage.";
			document.getElementById("textContent").style.fontSize='40px';
		});

		
		document.getElementById("sangeet").addEventListener("click", function() {
          
            document.getElementById("imgs").src = "Images/sangeet.jpg";
            
            document.getElementById("text").textContent = "Save the Date:20th jan 2023"
            document.getElementById("textContent").textContent = "Two souls but a single thought, two hearts that beat as one.A wedding is not the end of a journey but the beginning of a lifelong adventure together.In every ritual, a promise; in every step, a journey towards eternity.";
			document.getElementById("textContent").style.fontSize='40px';
		});


		document.getElementById("marriage").addEventListener("click", function() {
          
		  document.getElementById("imgs").src = "Images/bgi3.jpg";
		  
		  document.getElementById("text").textContent = "Save the Date:20th jan 2023"
		  document.getElementById("textContent").textContent = "Two souls but a single thought, two hearts that beat as one.A wedding is not the end of a journey but the beginning of a lifelong adventure together.In every ritual, a promise; in every step, a journey towards eternity.";
		  document.getElementById("textContent").style.fontSize='40px';
		});
    </script>	
	

</body>
</html>