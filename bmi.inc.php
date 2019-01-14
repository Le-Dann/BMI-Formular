<?php
class BMI
{
//Eigenschaften
private $grosse;
private $gewicht;
private $geschlecht;

//Konstruktor
function __construct($gr,$ge,$ges)
{
    $this->grosse = $gr;
    $this->gewicht = $ge;
    $this->geschlecht = $ges;
}

//Funktion berechnet den BMI nach der Eingabe des Benutzers
public function calc()
{
 $bmin =    $this->gewicht * 10000/($this->grosse * $this->grosse); //BMI Berechnung
 $bmi= number_format($bmin,0); //Formatiert das BMI Wert als ganzzahlig
 if ($bmi > 30) 
 {
     return "$bmi Ihre Übergewicht ist nicht behandlungsdürftig";
 }
 else{
 if ($this->geschlecht === "M")
 {
     if($bmi<20)
     {
        return "$bmi Untergewicht";
     }
     elseif($bmi< 25)
     {
        return "$bmi Normalgewicht";
     }
     else
     {
         return "$bmi Übergewicht";
     }
 }
 else
 {
     if($bmi<19)
     {
        return "$bmi Untergewicht";
     }
     elseif($bmi< 24)
     {
        return "$bmi Normalgewicht";
     }
     else
     {
         return "$bmi Übergewicht";
     }
 }
 }
}
}


?>