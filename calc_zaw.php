<?php
if ($_POST['zaawansowany'] == 'cosinus') {
    $var = $_POST['3'];
    echo cos($var);
} else if ($_POST['zaawansowany'] == 'sinus') {
    $var = $_POST['3'];
    echo sin($var);
} else if ($_POST['zaawansowany'] == 'tangens') {
    $var = $_POST['3'];
    echo tan($var);
} else if ($_POST['zaawansowany'] == 'bin to dec') {
    $var = $_POST['3'];
    echo bindec($var);
} else if ($_POST['zaawansowany'] == 'dec to bin') {
    $var = $_POST['3'];
    echo decbin($var);
} else if ($_POST['zaawansowany'] == 'dec to hex') {
    $var = $_POST['3'];
    echo dechex($var);
} else if ($_POST['zaawansowany'] == 'hex to dec') {
    $var = $_POST['3'];
    echo hexdec($var);
}