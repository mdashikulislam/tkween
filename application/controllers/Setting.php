<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Setting extends MY_Controller{
    public function __construct()
    {
        parent::__construct();
    }
    public function pdf_contract()
    {
        $this->page('pdf_contract',$this->data);
    }
    public function update_pdf_data()
    {
        $this->data['contract']=$this->input->post('contract');

        $this->db->where('id',$this->input->post('id'))->update('pdf_contract',$this->data);
        redirect(base_url('dashboard/pdf-contract/'));

    }
    public function limitations()
    {
        $access = $this->access('limitations');
        if($access!=1)
        {
            redirect(base_url('dashboard'));
        }
        $this->data['rec'] = $this->db->get('limitations')->result_array();
        $this->page('limitations',$this->data);
    }
}
