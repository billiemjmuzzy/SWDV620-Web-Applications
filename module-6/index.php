<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="assets/main.css" />
    <script type="text/javascript" src="assets/scripts.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower|Pacifico&display=swap" rel="stylesheet">
</head>

<body>
    <header class="container">
        <span style='font-size:70px; float: left;'>&#128540;</span>
        <h1>Fun With PHP</h1>
    </header>
    <main>
        <aside>
            <h2>PHP Switch Statement Script </h2>
            <p>Select an image option to view</p>
            <form action="" method="post" name="multiply">
                <select name="doodles">
                    <option value="">Select an Image</option>
                    <option value="BalletDoodle">Ballet Doodle</option>
                    <option value="CoffeeDoodle">Coffee Doodle</option>
                    <option value="DancingDoodle">Dancing Doodle</option>
                    <option value="DogJumpDoodle.">Dog Jump Doodle</option>
                    <option value="DoggieDoodle">Doggie Doodle</option>
                    <option value="DumpingDoodle">Dumping Doodle</option>
                    <option value="FloatDoodle">Float Doodle </option>
                    <option value="GroovyDoodle">Groovy Doodle</option>
                    <option value="GroovySittingDoodle">Groovy Sitting Doodle</option>
                    <option value="ZombieDoodle">Zombie Doodle</option>
                </select>
                <button type="submit"><span>View Image</span></button>
            </form>
            <div class="display"> <?php include 'assets/image-switch.php';?></div>
        </aside>
        <section>
            <h2>PHP script using arithmetic operators.</h2>
            <form action="" method="post" name="multiplyForm" onsubmit="return formValidation()">
                <legend>Multiply Two Numbers</legend>
                Enter first number:
                <input type=" number" name="num1" /><br><br>
                Enter second number:
                <input type=" number" name="num2" /><br><br>
                <button type="submit" name="submit" value="Submit"><span>Multiply</span></button>
                <?php include 'assets/arithmetic-operators.php';?>

            </form>
            <p class="error"></p>
        </section>
        <section>
            <h2>Script that displays an image and uses the switch statement and a for loop.</h2>
            <?php include 'assets/for-switch.php';?>
        </section>
    </main>
    <footer>Fun With PHP</footer>
</body>


</html>