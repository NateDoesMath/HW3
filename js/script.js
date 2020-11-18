//Code and shit

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
            $("#Name").html(" - Name: " + data.name);
            $("#Image").attr("src", data.image);
            $("#Gender").html(" - Gender: " + data.gender);
            $("#Status").html(" - Status: " + data.status);
            $("#Species").html(" - Species: " + data.species);
            $("#Origin").html(" - Origin: " + data.origin.name);
        });