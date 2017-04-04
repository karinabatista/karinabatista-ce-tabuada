<!DOCTYPE html>
	<head lang="pt-br">
		<meta charset='utf-8'>
		<title>Tabuada</title>
	</head>
	<body>
		<?php 
			$numUm = $_POST['numUm'];
			$numDois = $_POST['numDois'];
			$multUm = $_POST['multUm'];
			$multDois = $_POST['multDois'];
			
      
      $tabuada = 0; 
      $repeticao = 0;
      while ($repeticao<=$multDois) {
        while ($tabuada <= $numUm) {   
          echo "<br>Tabuada do $tabuada <br>";   
          $multiplicador = 0;   
          while($multiplicador<=$numDois)
        {
           $result = $tabuada * $multiplicador;   
        echo "$tabuada x $multiplicador = $result<br>";   
        $multiplicador++;
        }  
         $tabuada++; 
       }
        $repeticao++;
      }
       
			
			/*$inicio = $numUm;
			//$fim = $numDois;
			$i = $multUm;
			$multiplicador = $multDois;
		
			/*for ($i < $fim; $i++) {
				
				for ($inicio < $multiplicador; i++){
					$resultado = $i*$multiplicador;
					echo "$i X $multiplicador = $resultado<br>";
				}
				
			}
			
			FUNCIONANDO
			
			while ($i < $multUm) {
				while ($multDois > $multiplicador){
					$resultado = $multUm * $multiplicador;
					echo $multUm ."X". $multiplicador ."=". $resultado."<br>";
					
					$multiplicador++;
				}
				$i++;
			}*/
		?>
	</body>

</html>