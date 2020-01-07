<?php
class ModelAccountCustomerDocument extends Model
{
	public function getCustomerByDocument($cnpj)
	{

		$this->load->helper('utils');

		$cnpj = (float) onlyNumbers($cnpj);

		$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "customer_document` WHERE cnpj = {$cnpj}");

		return $query->row;
	}

	public function addCustomerDocument($customer_id, $cnpj)
	{

		$this->load->helper('utils');

		$cnpj = (float) onlyNumbers($cnpj);

		$this->db->query("INSERT INTO `" . DB_PREFIX . "customer_document` SET customer_id = '" . (int) $customer_id . "', cnpj = " . $cnpj . "");
	}
}
