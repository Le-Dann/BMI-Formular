<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>BMI</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <h1>BMI</h1>
    <h2>BMI-Body Mass Index</h2>
    <form action="bmicalc.php" method="POST">
       <p> <input name="gewicht" type="number" id="gewicht" min="10">Gewicht[kg]</p>
       <p><input name="grosse" id="grosse" type="number" min="10">Grosse[cm]</p>
       <p style="margin-left: 7.25%"><select   id="geschlecht"  name="geschlecht" >
                <option selected>M</option>
                <option>W</option>
        </select> Geschlecht[M,W]</p>
       <p><input type="submit" value="Berechnen"><input type="reset" value="Neu"></p>
    </form>
</body>
</html>