<?php 

/*
EXO3
ecrire un scripte qui initialise un tableau d'entier puis genere une table html dont le nombre de ligne est egale au nobre d'element du tableau.
le nombre de colonne de chaque ligne correspond a la valeur se trouvant dans le tableau d'entier

$entier=[5,2,1,5,2,45,5,1]
 ligne1->5colonnes
 ligne2->2colonnes
 ligne3->1colonnes
 ainsi de suite
*/

$entier=[1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60,61,62,63,64,65,66];
echo '<table>';
foreach ($entier as $val) 
{
    echo "<tr>";
        for ($i = 0; $i < $val; $i++)
        {
            echo'<td>'.$val.'</td>';
        }
    echo "</tr>";
}
echo "</table>";

 ?>
 <style type="text/css">
     table,tr,td
     {
        border: 1px solid black;
     }
     tr,td
     {
        border-collapse: collapse;
     }
 </style>