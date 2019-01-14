<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Resultat</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
</head>
<body>
<?php
include "helpers.inc.php"; //Enthält Funktionen, die Ausgaben vereinfachen
include "bmi.inc.php"; //BMI Klasse
$errors = []; //Array von Fehlern vom Benutzer bei der Eingabe

 $gewicht = postAndTrim('gewicht'); //Ruft den Funktion postandtrim von helpers.inc.php
 $grosse = postAndTrim('grosse');
 $geschlecht = post('geschlecht');

 if($gewicht == "") 
 {
     $errors[] = "Bitte geben Sie Ihre Gewicht ein"; //Dieses error wird ausgegeben wenn kein Wert für Gewicht eingegeben wird
 }
 
 if($grosse == "")
 {
     $errors[] = "Bitte geben Sie Ihre Grosse ein";  //Dieses error wird ausgegeben wenn kein Wert für Grosse eingegeben wird
 }

 if (count($errors) === 0) // Nur wenn das Formular komplett ausgefüllt ist, wird das BMI berechnet
{
     $myBMI = new BMI($grosse,$gewicht,$geschlecht);

     echo "Ihr BMI: ";
     echo $myBMI->calc()."<br><br>";
     echo"<a href=\"BMIFormular.php\">Zurück</a>";
}
else
{
    foreach($errors as $error) //Sonst zeigt es jeder Fehler 
    {
        echo $error."<br>";
    }
}

?>
</body>
</html>
