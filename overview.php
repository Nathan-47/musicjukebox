<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "music";

// This below is to create connection
$dbc = mysqli_connect($servername, $username, $password, $dbname);

// This below is to Check connection
if ($dbc->connect_error) {
die("Database connection failed: " . $dbc->connect_error);
}
?>

<?php

// In the code below reads the ID that has been selected from the main page and import the information onto this page. An example is with my databse the 'artist' logic has the ID number of 1 therefore when logic is chosen by the user at the top of the url bar it will have this pages name and the ID number of 1. 
if(isset($_GET['ID'])); 
$sql = "SELECT * FROM songlist";
$result = mysqli_query($dbc, $sql) or die("Bad Create: $sql");

// Using this allows it to be much easier to create a playlist using one page rather than having to make multiple. 
$id = $_GET['ID'];

// The code below selects everything from the database and with the 'WHERE trackID=id' means that when different ID numbers are selected they are to be shown on different pages but if there is no ID number showing on the URL then the page wont load thus not existing.  
$sql = "SELECT * FROM songlist WHERE trackID='$id'";
$result = mysqli_query($dbc, $sql) or die("Bad sql: $sql");
$row = mysqli_fetch_assoc($result);

?>


<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<link href="css/style.css" type="text/css" rel="stylesheet">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="https://fonts.googleapis.com/css?family=Saira+Semi+Condensed" rel="stylesheet">
</head>


<!-- Navbar Code-->
<div class="w3-top">
<div class="w3-bar w3-black w3-wide w3-padding w3-card">
<a href="#" class="w3-bar-item w3-button"><font face="Saira Semi Condensed"</font><b>URBAN</b> Trackz</a>

<!-- Float links to the right. Hide them on small screens -->
<div class="w3-right w3-hide-small">
<a href="http://localhost/" class="w3-bar-item w3-button">Home</a>  
</div>
</div>
</div>

<!-- Page content -->
<div class="w3-content w3-padding" style="max-width:1564px">

<!-- Title of Main Page -->
<div class="w3-container w3-padding-32">
<h3 class="w3-border-bottom w3-border-black w3-padding-16"><center><font face="Saira Semi Condensed"</font>TRENDING TRACKZ</h3>
</div>

<div class="container">
<!-- Name of artist-->
<center><h2><font face="Saira Semi Condensed"</font><?php echo $row['artist'] ?></h2>

<br>  

<!--Album Thumbnail-->
<img src='<?php echo $row['image'];?>' img style="border:5px solid black" width="420px" height="400px"> 

<br>
<!-- Song Name-->
<h3><font face="Saira Semi Condensed"</font><?php echo $row['track'] ?></h3>

<!-- Album Name-->
<h3><font face="Saira Semi Condensed"</font><?php  echo $row['albumTitle'] ?></h3>
</div>

<br>


<body>

<center>
<audio controls>
<!-- MP3 song-->
<source src = '<?php echo $row['link'];?>'>
</audio>
  
<br>
 

<!-- Title Code Section -->
<div class="w3-container w3-padding-32">
<h3 class="w3-border-bottom w3-border-black w3-padding-16"></h3>
</div>

	  
 <p class ="padding"></p>

	
<!--Footer Code-->
<footer class="w3-center w3-black w3-padding-64 w3-opacity w3-hover-opacity-off">
<a href="http://localhost/" class="w3-button w3-#f4f6f6"><i class="fa fa-arrow-up w3-margin-right"></i>Back to Top</a>
</footer>

</body>
</html>