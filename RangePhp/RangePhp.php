<?php
/**
* @author: Alefe Variani <alefevariani@unochapeco.edu.br>
* Utilifando Função "range" do PHP, para mostras alfabeto e sequencia de numeros 
*
* range(valorMinimo, valorMaximo, Parametro)
*
* Mais informações: http://www.php.net/manual/pt_BR/function.range.php
*/

//Mostrando Alfabeto
foreach (range('A', 'Z') as $letra){
	print $letra;
	echo "\n";
}

//Usado para numeros
foreach (range(0, 100) as $numero){
	print $numero;
	echo "\n";
}

