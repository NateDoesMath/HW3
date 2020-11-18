<!DOCTYPE html>
<html>

<head>
	<title> Rick and Morty </title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	
	<link rel="stylesheet" href="styles.css">
</head>

<body>
	<div class="container">
    <div id="info">
    	<h1 class="text-center">Rick and Morty Character Finder</h1>
        <p class="text-center">Enter an ID from 1-627 to search for a character.
    </div>
    
    
    <div class="row">
        <div class="col">
            <img src="" class="img-fluid" id="Image"><br>
            <span id="Name"></span><br>
            <span id="Gender"></span><br>
            <span id="Status"></span><br>
            <span id="Species"></span><br>
            <span id="Origin"></span><br>
        </div>
    </div>
    
    <br>
    
    </div>
    
    <input id ="ID" type="number" class="form-control" name="ID" placeholder="...Search">
    
    <div class="row">
        <div class="col text-center">
            <button id="submit" class="btn btn-primary">Search</button>
        </div>
    </div>
    
    <script src="js/script.js"></script>
    
    <footer class="text-left">
        <p>I require a baby yoda in my life- Nate Beal CST 336
    </footer>
</body>

</html>