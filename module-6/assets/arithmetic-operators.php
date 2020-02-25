<?php
if (isset($_POST['submit'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $multiply = $num1 * $num2;
    echo '<div class="multiply">' . $num1 . ' multiplied by ' . $num2 . ' is ' . $multiply . '</div>';
}