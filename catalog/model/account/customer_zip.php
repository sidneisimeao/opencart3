<?php

/*
  @response
 * array (size=5)
  'seqcidade' => string '3632' (length=4)
  'municipio' => string 'POCOS DE CALDAS' (length=15)
  'uf' => string 'MG' (length=2)
  'cepinicial' => string '37700000' (length=8)
	'cepfinal' => string '37719999' (length=8)

	@param string cep - CEP do cliente
	Valida se o cep esta dentro das faixas cadastradas
 */
class ModelAccountCustomerZip extends Model
{
	public function validateZipCodeTracks($cep)
	{

		$this->load->helper('utils');

		$cep = onlyNumbers($cep);

		$cep = substr($cep, 0, strlen($cep) - 3);

		$query = $this->db->query("SELECT * FROM customer_zip 
		                                 WHERE SUBSTR(cepinicial, 1, length(cepinicial)-3) <= $cep
															  AND SUBSTR(cepfinal, 1, length(cepfinal)-3) >= $cep
															 ");

		return $query->row;
	}
}
