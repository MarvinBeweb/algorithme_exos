<?php
//Le perroquet : repete le mot/phrase que vous tapez.
//beweb

$quitter = false;
$oui = "o"."\n";
$non = "n"."\n";
$reponse = "";
$flag = false;
//
while ($quitter == false) {
	echo("Bienvenue chez le perroquet du capitaine: "."\r"."\n");
	echo("Entrer une phrase ou un mot: "."\r"."\n");
	$reponse = fgets(STDOUT);
	echo "$reponse";
	$flag = true;

	while ($flag == true){
		echo("Voulez vous quitter o/n ? "."\r"."\n");
		$reponse = fgets(STDOUT);
		if ($reponse == $oui) {
			$quitter = true;
			$flag = false;
		}elseif ($non == $reponse){
			$flag = false;
		}else{
			echo("Moi y a na pas comprendre ce que toi vouloir dire"."\r"."\n");
		}
	}
}
?>
