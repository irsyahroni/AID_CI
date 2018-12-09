<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Shipping_Admin extends CI_Controller {
	public function __construct(){
		parent::__construct();
		
		if($this->session->userdata('group') != '1'){
			$this->session->set_flashdata('error','Sorry, you are not logged in!');
			redirect('login');
		}
		
		//load model -> model_shipping
		$this->load->model('model_shipping');
	}
	
	public function index()
	{
		$data['invoices'] = $this->model_shipping->all();
		$this->load->view('backend/view_all_invoices_address', $data);
	}

    public function detail($invoice_id)
    {
        $data['invoice'] = $this->model_shipping->get_invoice_by_id($invoice_id);
        $data['address']  = $this->model_shipping->get_address_by_invoice($invoice_id);
		$this->load->view('backend/view_invoice_address_detail', $data);
    }
}
