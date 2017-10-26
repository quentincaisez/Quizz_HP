<?php

$compt=0;

if($_GET["hp6"]== "hppsm"){
	echo "La première réponse est juste <br>";
	$compt++;
}
else{
echo "Bon courage mdr c'est la première question et c'est faux <br> ";
}

if($_GET["position"]== "ecosse"){
	echo "La deuxième réponse est juste <br>";
	$compt++;
}
else{
echo "faux pour la 2 ème question<br>";
}

if($_GET["ecole"]== "serpentard" || $_GET["ecole"]== "serdaigle" ){ // mettre le ou
	echo "La 3 eme réponse est juste <br>";
	$compt++;
}
else{
	echo "faux pour la 3 ème question<br>";
}

if($_GET["femme"]== "ginny"){
	echo "La 4 eme réponse est juste <br>";
	$compt++;
}
else{
	echo "faux pour la 4 ème question<br>";
}

if($_GET["rea"] == "bs" && $_GET["rec"] == "ci"){
	echo "La 5 eme réponse est juste <br>";
	$compt++;
}
else if ($_GET["red"] == "ecv"){
	echo "je savais que tu étais gourmand ahah <br>";
	$compt = $compt + 0.5 ;
}
else if ($_GET["reb"] == "bm"){
	echo "Ta abuser poto ta réponse vaudra 0 ;) <br>";
}
else {
	echo "faux pour la 5 ème question<br>";
}


if($_GET["train"] == "express" ){
	echo "La 6 eme réponse est juste . Allez ta fais la moitié courage<br>";
	$compt++;
}
else {
	echo "faux pour la 6 ème question ohhhh réveil toi<br>";
}


if($_GET["annee"] == "2001" ){
	echo "La 7 eme réponse est juste bravo tu as de la culture <br>";
	$compt++;
}
if($_GET["annee"] == "2004" ){
	echo "ta cru que t'allais gagner des points aussi facilement";
}
else {
	echo "faux pour la 7 ème question va chercher sur wikipédia <br>";
}

if($_GET["basilic"] == "eg" ){
	echo "La 8 eme réponse est juste c'est bien tu as suivis le film <br>";
	$compt++;
}
else if($_GET["basilic"] == "relou" ){
	echo "non non non non ";
}
else {
	echo "faux pour la 8 ème question va chercher sur wikipédia <br>";
}

if($_GET["meurta"] == "dobby" && $_GET["meurtc"] == "hedwig"){
	echo "La 9 eme réponse est juste !!!!!!!! <br>";
	$compt++;
}
else if($_GET["meurtd"] == "her") {
	echo "NAN LA TU AS CRAQUER JE TE MET -1<br>";
	$compt--;
}
else if($_GET["meurtb"] == "poisson") {
	echo "Allez je te met 0.5 point <br>";
	$compt=$compt+0.5;
}
else{
	echo "tu as faux dommage tu ne retentera pas ta chance<br>";
}

if($_GET["cedric"] == "poufsouffle"){
	echo "La 10 eme réponse est validée !!!!<br>";
	$compt++;
}
else{
	echo "dommage je te met 0, noooon je rigole mais ta faux quand même";
}

echo "<br><br><br>tu as obtenue " . $compt . " /10<br><br><br>";
if ($compt < 4 ){
	echo "tu es vraiment nul mais je t'aime bien";
}
else if ($compt >= 4 && $compt <7 ) {
	echo "peux mieux faire ...";
}
else if ($compt >= 4 && $compt <7 ) {
	echo "peux mieux faire ...";
}
else if ($compt >= 7 && $compt <9 ) {
	echo "pas mal";
}
else{
	echo "tu es vraiment un génie !!! tu gagnes un voyage ";
}
