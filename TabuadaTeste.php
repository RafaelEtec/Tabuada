<?php  

	echo " <br><hr> <h1> Feito por Rafael Ferreira Goulart </h1> <hr><br> ";

	//Feito após a entrega do Tabuada.php

	function Tab($cod){
		echo "<hr><h2>Tabuada do " .$cod;
	}
	function Ini($num){
		echo $num. " x ";
	}

	$cod = 1;
	$num = 0;
	while ($cod <= 10) {
		$num++;
		echo Tab($cod++);
		echo " <h3> ";
		for ($x=0; $x <= 10 ; $x++) { 

			echo Ini($num) .$x. " = " .$x*$num. "<br/> ";
	}		
	}

?>