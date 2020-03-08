<!DOCTYPE html>
<html>

<head>
    <title>NoshNow</title>

    <!-- Meta tags -->
    <meta name="keywords" content="convert, measure, cup, teaspoon, tablespoon" />
    <meta name="description" content="Convert measurements with NoshNow" />
    <meta name="robots" content="index, nofollow" />

    <!-- Styles -->
    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="css/select.css" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Rock+Salt&display=swap" rel="stylesheet">

</head>

<body>
    <?php include "includes/header.php";?>
    <main>
        <section>
            <form class="convert" action="" method="post" name="convertForm" onsubmit="return formValidation()">
                <legend>Convert</legend>

                <input type="number" name="qty" placeholder="   enter quantity" />
                <div class="custom-select">
                    <select name="from-unit">
                        <option value="select">select unit to convert from</option>
                        <option value="cup" name="cup">cup</option>
                        <option value="tbsp">tablespoon</option>
                        <option value="tsp">teaspoon</option>
                    </select>
                </div>
                <div class="custom-select" style="width:100%;">
                    <select name="to-unit">
                        <option value="select">select unit to convert to</option>
                        <option value="cup" name="cup">cup</option>
                        <option value="tbsp">tablespoon</option>
                        <option value="tsp">teaspoon</option>
                    </select>
                </div>
                <button type="submit" name="submit" value="Submit"><span>Convert</span></button>
                <?php include 'includes/convert.php';?>
                <div class="convert"></div>

            </form>
        </section>
        <section>
            <table id="conversions">
                <tbody>
                    <tr>
                        <th>Unit</th>
                        <th>Equals</th>
                        <th>Also equals</th>
                    </tr>
                    <tr>
                        <td>1 teaspoon</td>
                        <td>1/3 tablespoon</td>
                        <td>1/6 fluid ounce</td>
                    </tr>
                    <tr>
                        <td>1 tablespoon</td>
                        <td>3 teaspoons</td>
                        <td>1/2 fluid ounce</td>
                    </tr>
                    <tr>
                        <td>1/8 cup</td>
                        <td>2 tablespoons</td>
                        <td>1 fluid ounce</td>
                    </tr>
                    <tr>
                        <td>1/4 cup</td>
                        <td>4 tablespoons</td>
                        <td>2 fluid ounces</td>
                    </tr>
                    <tr>
                        <td>1/3 cup</td>
                        <td>1/4 cup plus 4 teaspoons</td>
                        <td>2 3/4 fluid ounces</td>
                    </tr>
                    <tr>
                        <td>1/2 cup</td>
                        <td>8 tablespoons</td>
                        <td>4 fluid ounces</td>
                    </tr>
                    <tr>
                        <td>1 cup</td>
                        <td>1/2 pint</td>
                        <td>8 fluid ounces</td>
                    </tr>
                    <tr>
                        <td>1 pint</td>
                        <td>2 cups</td>
                        <td>16 fluid ounces</td>
                    </tr>
                    <tr>
                        <td>1 quart</td>
                        <td>4 cups</td>
                        <td>32 fluid ounces</td>
                    </tr>
                    <tr>
                        <td>1 liter</td>
                        <td>1 quart plus 1/4 cup</td>
                        <td>4 1/4 cups</td>
                    </tr>
                    <tr>
                        <td>1 gallon</td>
                        <td>4 quarts</td>
                        <td>16 cups</td>
                    </tr>
                </tbody>
            </table>
        </section>
    </main>
    <?php include "includes/footer.php";?>
</body>
<!-- Scripts -->
<script type="text/javascript" src="scripts/select.js"></script>
<script src="https://kit.fontawesome.com/410f2d26c9.js" crossorigin="anonymous"></script>

</html>