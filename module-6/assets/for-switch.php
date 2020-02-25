<?php
$count = 9;
$doodles = array(
    'BalletDoodle',
    'CoffeeDoodle',
    'DancingDoodle',
    'DogJumpDoodle',
    'DoggieDoodle',
    'DumpingDoodle',
    'FloatDoodle',
    'GroovyDoodle',
    'GroovySittingDoodle',
    'ZombieDoodle',
);

for ($i = 0; $i <= $count; $i++) {

    $doodle = $doodles[$i];

    switch ($doodle) {
        case 'BalletDoodle':
            $image = '<img src="img/BalletDoodle.png" alt="Ballet Doodle" />';
            $desc = 'Ballet Doodle';
            break;
        case 'CoffeeDoodle':
            $image = '<img src="img/CoffeeDoodle.png" alt="Coffee Doodle" />';
            $desc = 'Coffee Doodle';
            break;
        case 'DancingDoodle':
            $image = '<img src="img/DancingDoodle.png" alt="Dancing Doodle" />';
            $desc = 'Dancing Doodle';
            break;
        case 'DogJumpDoodle':
            $image = '<img src="img/DogJumpDoodle.png" alt="Dog Jump Doodle" />';
            $desc = 'Dog Jump Doodle';
            break;
        case 'DoggieDoodle':
            $image = '<img src="img/DoggieDoodle.png" alt="Doggie Doodle" />';
            $desc = 'Doggie Doodle';
            break;
        case 'DumpingDoodle':
            $image = '<img src="img/DumpingDoodle.png" alt="Dumping Doodle" />';
            $desc = 'Dumping Doodle';
            break;
        case 'FloatDoodle':
            $image = '<img src="img/FloatDoodle.png" alt="Float Doodle" />';
            $desc = 'Float Doodle';
            break;
        case 'GroovyDoodle':
            $image = '<img src="img/GroovyDoodle.png" alt="Groovy Doodle" />';
            $desc = 'Groovy Doodle';
            break;
        case 'GroovySittingDoodle':
            $image = '<img src="img/GroovySittingDoodle.png" alt="Groovy Sitting Doodle" />';
            $desc = 'Groovy Sitting Doodle';
            break;
        case 'ZombieDoodle':
            $image = '<img src="img/ZombieDoodle.png" alt="Zombie Doodle" />';
            $desc = 'Zombie Doodle';
            break;

    }

    echo '<div class="gallery">' . $image . '<div class="desc">' . $desc . '</div></div>';
}