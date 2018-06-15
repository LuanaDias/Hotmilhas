<?php
	function equacaosegundograu($a,$b,$c){
	 	if (isset($a) && isset($b) && isset($c)){ 
	 		if ($a != "" && $b != "" && $c != ""){	 
				//Delta
				$delta = ($b*$b)-4*$a*$c;
				
				//Bhaskara
				$raiz = sqrt($delta);
				
				$x1 = (-$b+$raiz)/2*$a;
				$x2 = (-$b-$raiz)/2*$a;
				if ($delta < 0){
				     echo "Não é possível calcular as raizes pois o valor de delta é negativo";			     
				}else {   
	 			    return $array = array($x1,$x2);
				}
	         }
	     }
	}
?>
<?php
	//Testando a função
	$result = equacaosegundograu(2,7,3);
	print_r('X1 = '.$result[0]);
	print_r('<br>X2 = '.$result[1]);
?>
 
