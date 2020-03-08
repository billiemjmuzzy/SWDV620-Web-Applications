<?php
if (isset($_POST['submit'])) {
    $qty = isset($_POST['qty']);
    $cup = isset($_POST['cup']);
    $tbsp = isset($_POST['tbsp']);
    $tsp = isset($_POST['tsp']);

    switch ($_POST['from-unit']) {
        case 'cup':
            if ($_POST['to-unit'] == 'tbsp') {
                echo '<div class="convert">In ' . $qty . ' cup(s) there are ' . $qty * 16 . ' tablespoons.</div>';
            } elseif (($_POST['to-unit'] == 'tsp')) {
                echo '<div class="convert">In ' . $qty . ' cup(s) there are ' . $qty * 48 . ' teaspoons.</div>';
            } else {
                echo '';
            }
            break;
        case 'tbsp':
            if ($_POST['to-unit'] == 'cup') {
                echo '<div class="convert">In ' . $qty . ' tablespoon(s) there are ' . $qty / 16 . ' cup(s).</div>';
            } elseif (($_POST['to-unit'] == 'tsp')) {
                echo '<div class="convert">In ' . $qty . ' tablespoons(s) there are ' . $qty * 3 . ' teaspoons.</div>';
            } else {
                echo '';
            }
            break;
        case 'tsp':
            if ($_POST['to-unit'] == 'cup') {
                echo '<div class="convert">In ' . $qty . ' teaspoon(s) there are ' . $qty / 48 . ' cup(s).</div>';
            } elseif (($_POST['to-unit'] == 'tbsp')) {
                echo '<div class="convert">In ' . $qty . ' teaspoons(s) there are ' . $qty / 3 . ' tablespoons.</div>';
            } else {
                echo '';
            }
            break;

        default:
            echo '';
    }

}