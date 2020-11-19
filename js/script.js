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
            $("#Name").html(data.name);
            $("#Image").attr("src", data.image);
            $("#Gender").html(data.gender);
            $("#Status").html(data.status);
            $("#Species").html(data.species);
            $("#Origin").html(data.origin.name);
        });