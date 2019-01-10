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
include "helpers.inc.php";
include "bmi.inc.php";
$errors = [];

 $gewicht = postAndTrim('gewicht');
 $grosse = postAndTrim('grosse');
 $geschlecht = post('geschlecht');

 if($gewicht == "")
 {
     $errors[] = "Bitte geben Sie Ihre Gewicht ein";
 }
 
 if($grosse == "")
 {
     $errors[] = "Bitte geben Sie Ihre Grosse ein";
 }

 if (count($errors) === 0)
{
     $myBMI = new BMI($grosse,$gewicht,$geschlecht);

     echo "Ihr BMI: ";
     echo $myBMI->calc()."<br><br>";
     echo"<a href=\"BMIFormular.php\">Zurück</a>";
}
else
{
    foreach($errors as $error)
    {
        echo $error."<br>";
    }
}

?>
</body>
</html>
