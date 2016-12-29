$quitter = false
$oui = "o"
$non = "n"
$reponse = ""
$flag = false

while $quitter == false
	print "Bienvenue chez le perroquet du capitaine \n\r"
	print "entrez une phrase ou un mot: \n\r"
	$perroquet = gets
	print $perroquet
	$flag = true

	while $flag == true
		print "Voulez vous quitter o/n ? \n\r"
		$reponse = gets.chomp

		if $oui == $reponse
			$quitter = true
			$flag = false
		elsif $non == $reponse
			$flag = false		
		else
			print "Moi y a na pas comprendre ce que toi vouloir me dire \n\r"
		end
	end
end