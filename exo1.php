<?php

/*
ecrire un scripte qui initialise un tableau d'entier et genere une valeur val.
le script verifie l'existance de la valeur val dans le tableau*/

define("MAX", 0);
define("MIN", 20);
$val=rand(MIN,MAX);

$TAB=[1,0,5,2,10,6,7,9,3];
$search=$val;

if (in_array($search, $TAB)) {
	echo "La valeur ".$search." existe dans le tableau "."<br>";
}else{
	echo "La valeur ".$search." n'existe pas dans le tableau "."<br>";
}

?>