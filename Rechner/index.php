<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taschenrechner</title>
</head>
<body>
 
<form action="index.php" method="post"> 
    <br>
    <input name="zahl1" size=6> <br>
    <input name="zahl2" size="6"> <br>
    <select name="zeichen">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>
    <input type="submit" name="submit" value="Rechnen">
</form>

<?php
if (!empty($_POST["submit"])) {
    $zahl1 = $_POST["zahl1"];
    $zahl2 = $_POST["zahl2"];
    $zeichen = $_POST["zeichen"];

    if ($zeichen == "+") $summe = bcadd($zahl1, $zahl2);
    if ($zeichen == "-") $summe = bcsub($zahl1, $zahl2);
    if ($zeichen == "*") $summe = bcmul($zahl1, $zahl2);
    if ($zeichen == "/") $summe = bcdiv($zahl1, $zahl2);

    echo $zahl1 . $zeichen . $zahl2 . " = " . $summe;
    echo "<br> Das Ergebnis ist " . $summe;
    if (empty($zahl1) || empty($zahl2)) {
        echo "<br>Versuch es nochmal.";
    }
}
?>

   </body>
</html>
