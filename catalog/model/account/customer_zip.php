<?php
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
