<?php
//number in pounds we want to convert to kilograms
$pounds = 140;
//floating point value for the pound to kilogram conversion
$lb_to_kg = 0.453592;
//use the variables above to calculate pounds multipled by the kilogram conversion
$kilograms = $pounds * $lb_to_kg;
//display the pounds to kilograms
echo "Weight: ";
echo $pounds;
echo " lb = ";
echo $kilograms;
echo " kg";
//numbers in miles we want to convert to kilometers
$miles = 2.5;
//floatin point value for the mile to kilometer conversion
$mile_to_km = 1.60934;
//use the variables above to calculate miles multiplied by the kilometer conversion
$kilometers = $miles * $mile_to_km;
//use the variable above to calculate miles multiplied by the kilometer conversion
echo "Distance: ";
echo $miles;
echo " miles = ";
echo $kilometers;
echo " km";
?>