<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Shipping_User extends CI_Controller {
	public function __construct(){
		parent::__construct();
		
		//load model -> model_shipping
		$this->load->model('model_shipping');
		
	}
	
	public function index()
	{
		$data['shipping'] = $this->model_shipping->all();
		$this->load->view('backend/view_all_invoices_address', $data);
	}
	
	public function create(){
		//form validation sebelum mengeksekusi QUERY INSERT
		$this->form_validation->set_rules('recipient_name', 'Recipient Name', 'required');
		$this->form_validation->set_rules('phone_number', 'Phone Number', 'required');
		$this->form_validation->set_rules('street_address', 'Street Adress', 'required');
		$this->form_validation->set_rules('city', 'City or Region', 'required');
		$this->form_validation->set_rules('postal_code', 'Postal Code', 'required');
		//$this->form_validation->set_rules('userfile', 'Product Image', 'required');

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('form_shipping_address');
		} else 
		{	
			// eksekusi query INSERT
			$data_shipping =	array(
				'recipient_name'	=> set_value('recipient_name'),
				'phone_number'		=> set_value('phone_number'),
				'street_address'	=> set_value('street_address'),
				'city'				=> set_value('city'),
				'postal_code'		=> set_value('postal_code'),
			);
			$this->model_shipping->create($data_shipping);
		
			redirect('order/success');
		}			
		
	}
}