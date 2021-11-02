<?php 

/*
EXO1
ecrire un script qui initialise un tableau de couleur puis genere une table html dont le nombre de ligne est egale au nombre de couleur.
une ligne contient 2 colonnes et a la meme couleur que celle definie dans le tableau de couleur
*/ 

$couleurs=["red","darkred","blue","honeydew","steelblue","yellow","greenyellow","grey","darkgrey","green","black","darkgreen","pink","darkpurple","purple","mistyrose","cornflowerblue", "mediumaquamarine", "brown", "rosybrown", "rebeccapurple", "azure", "cornflowerblue", "deepskyblue", "goldenrod", "aquamarine", "aqua", "darkslateblue", "darkkhaki", "olivedrab","hotpink", "chartreuse", "chocolate", "ghostwhite", "khaki", "thistle", "wheat", "white", "whitesmoke", "oldlace", "olive", "olivedrab", "orange", "orangered", "orchid", "coral", "cornsilk", "dodgerblue", "forestgreen", "gold", "goldenrod", "moccasin", "lemonchiffon", "navajowhite"];

echo'<table>';
	echo'<thead>';
		echo'<tr><th> tableau de couleur </th></tr>';
	echo'<thead>';
	echo'<tbody>';
		foreach ($couleurs as $couleur)
		{
			echo(
				'<tr style="background-color:'.$couleur.';">
					<td>'.$couleur.'</td> 
				 </tr>'); 
		}
	echo'</tbody>';
echo'</table>';
?>