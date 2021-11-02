<?php
/*
ecrire un scripte qui initialse un tableau de classe.
le scripte genere des listes html des classes par niveau

-l1a   -l2a   -l3a
-l1b   -l2b   -l=3b
*/
?>
<?php 
	$classe = 
	[ 
		'Licence 1' => [ 'IAGE1', 'GRLS1', 'Mae1', ], 
		'Licence 2' => [ 'IAGE2', 'GRLS2', 'Mae2', ], 
		'Licence 3' => [ 'IAGE3', 'GRLS3', 'Mae3', ] 
	];
echo'<ul class="">';
foreach ($classe as $key => $cla) 
{
    echo'<li class="">'.$key.'</li>'; 
	 	echo'<ul class="">' ;
		 	foreach ($cla as $cl) 
		 	{ 
		 		echo'<li class="">'.$cl.'</li>'; 
	 		}
	 	echo'</ul>'; 
	echo'</li>'; 
 } 
echo'</ul>';

?>