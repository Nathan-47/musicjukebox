<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "music";               

// This below is to create connection
$dbc= mysqli_connect($servername, $username, $password, $dbname);

// This below is to Check connection
if ($dbc->connect_error) {
    die("Database connection failed: " . $dbc->connect_error);
}
?>


<!DOCTYPE html>
<html>
<head>
<title>Music Jukebox</title>
</head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<link href="css/style.css" type="text/css" rel="stylesheet">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="https://fonts.googleapis.com/css?family=Saira+Semi+Condensed" rel="stylesheet">


<!-- Navabar Code -->
<div class="w3-top">
<div class="w3-bar w3-black w3-wide w3-padding w3-card">
<a href="#" class="w3-button"><font face="Saira Semi Condensed"></font><b>URBAN</b>Trackz</a>

<!-- Float links to the right. Hide them on small screens -->
<div class="w3-right w3-hide-small">
<a href="#" class="w3-bar-item w3-button">Home</a>  
</div>
</div>
</div>

<!-- Header -->
<header class="w3-display-container w3-content w3-wide" style="max-width:1500px;">
<img class="image" src="http://cdn.playbuzz.com/cdn/6ce8bb31-a777-453f-8a9d-8f4cadaf1665/82733c4d-7e87-475a-ba78-10881e615652.jpg" alt="" width="1500" height="800">
<div class="w3-display-middle w3-margin-top w3-center">
<h1 class="w3-xxlarge w3-text-black"><span class="w3-padding w3-black w3-opacity-min"><font face="Saira Semi Condensed"></font><b>URBAN</b></span><span class="w3-hide-small w3-text-black">Trackz</span></h1>
</div>
</header>

<!-- Page content -->
<div class="w3-content w3-padding" style="max-width:1564px">

<!-- Title Of Main Page -->
<div class="w3-container w3-padding-32">
<h3 class="w3-border-bottom w3-border-black w3-text-black w3-padding-16"><center><font face="Saira Semi Condensed"</font>TRENDING TRACKZ</h3>

<br>

<!--Welcoming paragrapgh-->            
<center><p> Welcome to URBAN Trackz a website that gives you the a plethra of all hip hop tracks from the past and present. In this section you can find the trending trackz that have been played alot through the time. There are 14 trackz to choose from the likes of legends such as Dr Dre and Mobb Deep to new comers such as Logic, Jaden Smith, Lil Uzi vert and more. Make sure when choosing a song to listen to click on the artist name so that the song will play. 
</p>

<br>

<p>
Below are the pictures of each of the artists that are in the playlsit below so make sure to check them out, see if you like what you hear and even become a fan of an artist that you might not have given a chance. 
</p>

<br>
<br>
<br>
<br>
		
<!--Images of the artists-->

<img class="image" src="pictures/tyler-twitter.jpg" width="180" height="180" img style="border:5px solid black" hspace="20">
<img class="image" src="pictures/logic-twitter.jpg" width="180" height="180" img style="border:5px solid black" hspace="20">
<img class="image" src="pictures/liluzivert-twitter.jpg" width="180" height="180" img style="border:5px solid black" hspace="20">
<img class="image" src="pictures/isaiahrashad-twitter.jpg" width="180" height="180" img style="border:5px solid black" hspace="20"> 
<img class="image" src="pictures/higherbrothers-twitter.jpg" width="180" height="180" img style="border:5px solid black" hspace="20">  

<br>
<br>

<img class="image" src="pictures/jadensmith-twitter.jpg" width="180" height="180" img style="border:5px solid black" hspace="20">   
<img class="image" src="pictures/drdre-twitter.jpg" width="180" height="180" img style="border:5px solid black" hspace="20"> 
<img class="image" src="pictures/drake-twitter.jpg" width="180" height="180" img style="border:5px solid black" hspace="20">     

<br>
<br>

<img class="image" src="pictures/mobbdeep-twitter.jpg" width="180" height="180" img style="border:5px solid black" hspace="20"> 
<img class="image" src="pictures/geazy-twitter.jpg" width="180" height="180" img style="border:5px solid black" hspace="20"> 
<img class="image" src="pictures/absoul-twitter.jpg" width="180" height="180" img style="border:5px solid black" hspace="20"> 
<img class="image" src="pictures/suicideboys-twitter.jpg" width="180" height="180" img style="border:5px solid black" hspace="20"> 
<img class="image" src="pictures/lildicky-twitter.jpg" width="180" height="180" img style="border:5px solid black" hspace="20"> 

<br>
<br>
<br>


<!--Line that seperates from the images and the table-->
<div class="w3-container w3-padding-32">
<h3 class="w3-border-bottom w3-border-black w3-padding-16"></h3>
</div>

<!--Headers that identify between the different columns song/track/album --> <p>Artist&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Song&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Album</p>
</div>
</body>
</html>
 
<?php

echo "<br>";
// Selects all columns from the songlist table in my SQL databse
$result = mysqli_query($dbc,"SELECT * FROM songlist");


// This retreives the artist name from database and puts it on index page
while ($row = mysqli_fetch_assoc($result)){

// Code for my table	
echo "<center><table>";

// The code below is in a table header that has a mix of html and php. The "a href" is used to link the ID of the page back to my external page that shows the artist, album name, album cover and the song that is extracted from my database. To get the information needed from the databse i needed to select my primary key ID which is trackID in my SQL databse which would then automatically set as seperate page ID's which varies on how many columns are within the database. Using $row selects any row from my database but to extract the actual information i need to wrap the real row name in braces. In this case 'artist' was chosen, this now retrieves the row named artist containing all rapper names and using echo lays them out onto the page. 
echo "<td><a href= 'overview.php? ID={$row['trackID']}'>{$row['artist']}</a></td>";

echo "<td>{$row['track']}</td>";

echo "<td>{$row['albumTitle']}</td>";

}
echo "</table>";

?>

<br>
<br>

<html>
<!-- Footer Code-->
<footer class="w3-center w3-black w3-padding-64">
<a href="http://localhost" class="w3-button w3-#f4f6f6"><i class="fa fa-arrow-up"></i>Back to Top</a>
</footer>
</html>