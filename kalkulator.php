<html>
<head>
<meta charset="UTF-8">
</head>
<body>
<fieldset>
    <form action = "calc.php" method="POST">
<legend>kalkulator prosty</legend>

        <input type = "number" name="1">
    <select name ="prosto">
        <option >dodawanie</option>
        <option >odejmowanie</option>
        <option>mnożenie</option>
        <option>dzielenie</option>
    </select>
    <input type = "number" name = "2"> <br>
    <input type = "submit" value="oblicz">


</form>
</fieldset>

<fieldset>
    <form action = "calc_zaw.php" method="post">
    <legend>
        kalkulator zaawansowany
    </legend>
    <input type = "text" name = "3">
    <select name ="zaawansowany">
        <option>cosinus</option>
        <option>sinus</option>
        <option>tangens</option>
        <option>bin to dec</option>
        <option>dec to bin</option>
        <option>dec to hex</option>
        <option>hex to dec</option>
    </select><br>
    <input type = "submit" value="oblicz">
    </form>
</fieldset>


</body>
</html>
