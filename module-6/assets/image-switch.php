<?php

switch ($_POST['doodles']) {
    case 'BalletDoodle':
        echo '<div class="display"><img src="img/BalletDoodle.png" alt="Ballet Doodle" /></div>';
        break;
    case 'CoffeeDoodle':
        echo '<img src="img/CoffeeDoodle.png" alt="Coffee Doodle" />';
        break;
    case 'DancingDoodle':
        echo '<img src="img/DancingDoodle.png" alt="Dancing Doodle" />';
        break;
    case 'DogJumpDoodle':
        echo '<img src="img/DogJumpDoodle.png" alt="Dog Jump Doodle" />';
        break;
    case 'DoggieDoodle':
        echo '<img src="img/DoggieDoodle.png" alt="Doggie Doodle" />';
        break;
    case 'DumpingDoodle':
        echo '<img src="img/DumpingDoodle.png" alt="Dumping Doodle" />';
        break;
    case 'FloatDoodle':
        echo '<img src="img/FloatDoodle.png" alt="Float Doodle" />';
        break;
    case 'GroovyDoodle':
        echo '<img src="img/GroovyDoodle.png" alt="Groovy Doodle" />';
        break;
    case 'GroovySittingDoodle':
        echo '<img src="img/GroovySittingDoodle.png" alt="Groovy Sitting Doodle" />';
        break;
    case 'ZombieDoodle':
        echo '<img src="img/ZombieDoodle.png" alt="Zombie Doodle" />';
}