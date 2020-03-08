<!DOCTYPE html>
<html>

<head>
    <title>NoshNow Search Recipes</title>

    <!-- Meta tags -->
    <meta name="keywords" content="recipe, food, nutrition, dinner, breakfast, lunch" />
    <meta name="description" content="Find out what to have for your next meal with NoshNow" />
    <meta name="robots" content="index, nofollow" />

    <!-- Styles -->
    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="css/card.css" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Rock+Salt&display=swap" rel="stylesheet">
</head>

<body>
    <?php include "includes/header.php";?>
    <main>
        <section>

            <form class="search" id="search-form" onsubmit="searchFood(event)">
                <input type="text" placeholder="Search.." name="food" id="food">
                <button onclick="getFood();"><i class="fa fa-search"></i></button>
            </form>
            </div>
            <div class="card-container">
                <div class="card u-clearfix">
                    <div class="card-body">
                        <!-- <span class="card-number card-circle subtle">01</span> -->
                        <span class="card-author subtle">
                            <div id="author">Search Recipes</div>
                        </span>
                        <h3 class="card-title" id="label">Please Search Food</h3>
                        <!-- <span class="card-description subtle">These last few weeks I have been working hard on a new
                            brunch recipe for you all.</span> -->
                        <div class="card-read">
                            <p id="url"></p>
                        </div>
                        <!-- <span class="card-tag card-circle subtle">C</span> -->
                    </div>
                    <p id="image"></p>

                </div>
                <div class="card-shadow"></div>
            </div>
        </section>
    </main>
    <?php include "includes/footer.php";?>
</body>
<!-- Scripts -->
<script src="https://kit.fontawesome.com/410f2d26c9.js" crossorigin="anonymous"></script>
<script src="https://developer.edamam.com/attribution/badge.js"></script>
<script type="text/javascript" src="scripts/display-recipe.js"></script>

</html>