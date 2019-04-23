<?php

#count (); cuenta cantidad de elementos
#sort (); ordena lo elementos 
#rsort(); ordena al reves los elementos
#var_dump(); muestra el contenido de las variables
#print_r(); muestra el valor de las variables

function saludo ($nombre){
	echo "saludos, $nombre";
}

//saludo('Traian');

function sumar($numero1 , $numero2){
	$resultado = $numero1 + $numero2;
	return $resultado;
}

$res = sumar (10 , 30);

echo $res;

?>