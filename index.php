<?php

## PHP - Les dates
## Pour tous les exercices, vous pouvez utiliser le site http://php.net
## N'hesitez pas à faire des pages avec du HTML/CSS

## Exercice 1 Afficher la date courante en respectant la forme jj/mm/aaaa (ex : 16/05/2016)
$timestamp = time();
$date = getdate();
echo "<br>exercice 1<br><br>";
echo "Afficher la date courante en respectant la forme jj/mm/aaaa<br>";
$today = date("d/m/Y");
echo $today."<br>";

## Exercice 2 Afficher la date courante en respectant la forme jj-mm-aa (ex : 16-05-16)

echo "<br>exercice 2<br><br>";
echo "Afficher la date courante en respectant la forme jj-mm-aa<br>";
$today1 = date("d-m-y");
echo $today1."<br>";

## Exercice 3 Afficher la date courante avec le jour de la semaine et le mois en toutes lettres (ex : mardi 2 août 2016)
## Bonus : Le faire en français.

echo "<br>exercice 3<br><br>";
echo "Afficher la date courante avec le jour de la semaine et le mois en toutes lettres (ex : mardi 2 août 2016)<br>";
$today2 = date("D w M Y");
echo $today2."<br>";
$date1 = date('Y-m-d');
setlocale(LC_TIME, ["fr","fra","fr_FR"]);
echo strftime("%A %d %B %G", strtotime($date1))."<br>";

## Exercice 4 Afficher le timestamp du jour.
## Afficher le timestamp du mardi 2 août 2016 à 15h00.

echo "<br>exercice 4<br><br>";
echo "Afficher le timestamp du jour.<br>";
echo "le timestamp d'aujourd'huis est $timestamp <br>";
echo "Afficher le timestamp du mardi 2 août 2016 à 15h00.<br>";
$timestamp = mktime(15,00,00,8,2,2016);
echo "le timestamp du mardi 2 août 2016 à 15h00 etait : $timestamp<br>";

##Exercice 5 Afficher le nombre de jours qui séparent la date du jour avec le 16 mai 2016.

echo "<br>exercice 5<br><br>";
echo "Afficher le nombre de jours qui séparent la date du jour avec le 16 mai 2016.<br>";
$newDate = new DateTime("2016-05-16");
$today3 = new DateTime("2021-01-28");
$interval = $newDate->diff($today3);
echo $interval->format("%d jours, %m mois et %Y année(s) ca fait donc : %a<br>");

##Exercice 6 Afficher le nombre de jours dans le mois de février de l'année 2016.

echo "<br>exercice 6<br><br>";
echo "Afficher le nombre de jours dans le mois de février de l'année 2016.<br>";
$numberDay = cal_days_in_month(CAL_GREGORIAN, 2, 2016);
echo "nombre de jours en fevrier 2016 : $numberDay<br>";

##Exercice 7 Afficher la date du jour + 20 jours.

echo "<br>exercice 7<br><br>";
echo "Afficher la date du jour + 20 jours.<br>";
echo "date du jour : $today<br>";
$dateTime = $today;
$dateTime->add(new DateInterval("P20D"));
echo $dateTime->format("d-m-Y")."<br>";


##Exercice 8 Afficher la date du jour - 22 jours

echo "<br>exercice 8<br><br>";
echo "Afficher la date du jour - 22 jours<br>";

## TP Faire un formulaire avec deux listes déroulantes.
## La première sert à choisir le mois, et le deuxième permet d'avoir l'année.
# MEGA BONUS ( surligné et caractère gras :-)  ) : En fonction des choix, afficher un calendrier ( voir libs JS ou autres )


