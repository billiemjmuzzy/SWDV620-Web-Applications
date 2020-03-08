const SEARCH_APP_ID = "" //enter app_id
const SEARCH_APP_KEY = "" // enter ap_key

function searchFood(event) {
    event.preventDefault();
    var food = document.getElementById("food");

    fetch(

            "https://api.edamam.com/search?q=" + food.value +
            "&app_id=" + SEARCH_APP_ID +
            "&app_key=" + SEARCH_APP_KEY

        )
        .then(function (response) {
            if (!response.ok) {
                throw Error(response.statusText);
            }
            // Read the response as json.
            return response.json();
        })
        .then(function (responseAsJson) {
            // Do stuff with the JSON
            console.log(responseAsJson);
            resultAuthor = responseAsJson.hits[0].recipe.source;
            resultURL = responseAsJson.hits[0].recipe.url;
            recipeLabel = responseAsJson.hits[0].recipe.label;
            recipeImage = responseAsJson.hits[0].recipe.image;

            document.getElementById("author").innerHTML = resultAuthor;
            document.getElementById("label").innerHTML = recipeLabel;
            document.getElementById("url").innerHTML =
                '<a class="button" target="_blank" href= "' + resultURL + '"> View<i class="fad fa-external-link"></i></a>';
            document.getElementById("image").innerHTML =
                '<img  src = "' + recipeImage + '" class="card-media"/>';
        })
        .catch(function (error) {
            console.log("Looks like there was a problem: \n", error);
        });
}