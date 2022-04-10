<?php
if (isset($_POST['1'])==1&&isset($_POST['2']) == 1) {
    if ($_POST['prosto'] == 'dodawanie') {
        echo $_POST['1'] + $_POST['2'] . "\n";
    } else if ($_POST['prosto'] == 'odejmowanie') {
        echo $_POST['1'] - $_POST['2'] . "\n";

    } else if ($_POST['prosto'] == 'mnożenie') {
        echo $_POST['1'] * $_POST['2'] . "\n";

    } else if ($_POST['prosto'] == 'dzielenie') {
        echo $_POST['1'] / $_POST['2'] . "\n";

    }
}


