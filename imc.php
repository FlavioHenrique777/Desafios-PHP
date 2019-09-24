<?php 
		$peso = ("70");
		$altura = ("176");
		
		$conta1 = $altura * $altura;
        $conta2 = $peso/$conta1;
        $resultado = $conta2;
		
        $resultado = number_format($conta2);
		
		if(isset($resultado) && $resultado != '0'){;	
			echo "Seu IMC é:";
			echo "$resultado.";
		}else{
			echo '<h1>Por favor, utilize apenas numeros!</h1>';	
		}
    ?>
