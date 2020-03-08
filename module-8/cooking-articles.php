<!DOCTYPE html>
<html>

<head>
    <title>NoshNow Articles</title>

    <!-- Meta tags -->
    <meta name="keywords" content="articles,tips, recipe, food, nutrition, dinner, breakfast, lunch" />
    <meta name="description" content="Read articles about food on NoshNow" />
    <meta name="robots" content="index, nofollow" />

    <!-- Styles -->
    <link rel="stylesheet" href="css/main.css" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Rock+Salt&display=swap" rel="stylesheet">

</head>

<body onload="fetchTopTen(subInput);">
    <?php include "includes/header.php";?>
    <main>
        <section>
            <h2 class="article-top">Top Ten Reddit Articles on Cooking</h2>

            <div id="result" class="articles">

            </div>
        </section>
    </main>
    <?php include "includes/footer.php";?>
</body>
<!-- scripts -->
<script type="text/javascript" src="scripts/cooking-articles.js"></script>
<script src="https://kit.fontawesome.com/410f2d26c9.js" crossorigin="anonymous"></script>

</html>