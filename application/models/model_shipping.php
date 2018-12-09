<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_Shipping extends CI_Model {

	public function all(){
		//query semua record di table shipping_address
		$hasil = $this->db->get('shipping_address');
		if($hasil->num_rows() > 0){
			return $hasil->result();
		} else {
			return array();
		}
	}
	
	public function find($id){
		//Query mencari record berdasarkan ID-nya
		$hasil = $this->db->where('id', $id)
						  ->limit(1)
						  ->get('shipping_address');
		if($hasil->num_rows() > 0){
			return $hasil->row();
		} else {
			return array();
		}
	}
	
	public function create($data_shipping){
		//Query INSERT INTO
		$this->db->insert('shipping_address', $data_shipping);
	}

	public function update($id, $data_shipping){
		//Query UPDATE FROM ... WHERE id=...
		$this->db->where('id', $id)
				 ->update('shipping_address', $data_shipping);
	}
	
	public function delete($id){
		//Query DELETE ... WHERE id=...
		$this->db->where('id', $id)
				 ->delete('shipping_address');
	}

	 public function get_invoice_by_id($invoice_id)
    {
        $hasil = $this->db->where('id',$invoice_id)->limit(1)->get('invoices');
        if($hasil->num_rows() > 0){
            return $hasil->row();
        } else {
            return false;
        }
    }

    public function get_address_by_invoice($invoice_id)
    {
        $hasil = $this->db->where('invoice_id',$invoice_id)->get('orders');
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else {
            return false;
        }
    }
}