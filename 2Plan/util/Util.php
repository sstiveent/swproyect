<?php
class Util
{
	
	function __construct()
	{
	}


	public function compararFechas($primera, $segunda)
	{
		$valoresPrimera = explode ("-", $primera);   
		$valoresSegunda = explode ("-", $segunda); 

		$diaPrimera    = $valoresPrimera[2];  
		$mesPrimera  = $valoresPrimera[1];  
		$anyoPrimera   = $valoresPrimera[0]; 

		$diaSegunda   = $valoresSegunda[2];  
		$mesSegunda = $valoresSegunda[1];  
		$anyoSegunda  = $valoresSegunda[0];

		$diasPrimeraJuliano = gregoriantojd($mesPrimera, $diaPrimera, $anyoPrimera);  
		$diasSegundaJuliano = gregoriantojd($mesSegunda, $diaSegunda, $anyoSegunda);     

		if(!checkdate($mesPrimera, $diaPrimera, $anyoPrimera)){
    // "La fecha ".$primera." no es v&aacute;lida";
			return 0;
		}elseif(!checkdate($mesSegunda, $diaSegunda, $anyoSegunda)){
    // "La fecha ".$segunda." no es v&aacute;lida";
			return 0;
		}else{
			return  $diasPrimeraJuliano - $diasSegundaJuliano;
		} 

	}
}
?>