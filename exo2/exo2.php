<?php
 $tableau =(3,25,1,6,23,56);
 $permut = 0;
 $i =0;
 while {
     $sorted = true;
     for ($i = 0; $i < count($tableau)-1; $i++) {
         if ($tableau[$i] > $tableau[$i + 1]) {
             $permut = $tableau[$i];
             $tableau[$i] = $tableau[$i + 1];
             $tableau[$i + 1] = $permut;
             $sorted = false;
		print_r ($tableau);
         }
     }
 }
 print_r ($tableau);
?>
