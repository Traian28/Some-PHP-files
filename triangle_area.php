<?php

$baseaux= 0;
$alturaaux= 0;

function calcular_area_triangulo ($base , $altura){
	$resultado = ($base * $altura) / 2;
	$baseaux=$base;
	$alturaaux=$altura;
	return $resultado;
}

$res= calcular_area_triangulo (10, 10);

echo 'El area del triangulo es: '. $res;

?>