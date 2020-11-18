<!DOCTYPE html>
<html>

<head>
	<title> Rick and Morty Search</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<link rel="stylesheet" href="styles.css">
</head>

<body>
	<div class="container">
    <div id="info">
    	<h1 class="text-center">Rick and Morty Character Search</h1>
        <p class="text-center">Enter an ID to search for character information, 1-627.
    </div>
    <input id ="ID" type="number" class="form-control" name="ID" placeholder="Enter character ID #">
    <div class="row">
        <div class="col text-center">
            <button id="submit" class="btn btn-primary">Search</button>
        </div>
    </div>
    <div class="row">
        <div class="col-3 mx-auto text-center">
            <img src="" class="img-fluid" id="Image"><br>
            <span id="Name"></span><br>
            <span id="Gender"></span><br>
            <span id="Status"></span><br>
            <span id="Species"></span><br>
            <span id="Origin"></span><br>
        </div>
    </div>
    </div>
    
    <script>
            $("#submit").on("click", async function() {
            if($("#ID").val().length == 0 || $("#ID").val() > 627) {
                alert("You didnt enter a valid number, try again!");
                die();
            } 
            let charID = $("#ID").val();
            let url = `https://rickandmortyapi.com/api/character/${charID}`;
            let response = await fetch(url);
            let data = await response.json();
            console.log(data);
            $("#Name").html("Name: " + data.name);
            $("#Image").attr("src", data.image);
            $("#Gender").html("Gender: " + data.gender);
            $("#Status").html("Status: " + data.status);
            $("#Species").html("Species: " + data.species);
            $("#Origin").html("Origin: " + data.origin.name);
        });
    </script>
    
    <footer class="text-left">
        <p>I require a baby yoda in my life- Nate Beal CST 336
    </footer>
</body>

</html>