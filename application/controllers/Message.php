<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Message extends MY_Controller {
    public function __construct()
    {
        parent::__construct();
    }

    public function contract_messages()
    {
        $access = $this->access('contract_messages');
        if($access!=1)
        {
            redirect(base_url('dashboard'));
        }
        $this->data['rec'] =  $this->__pagination_data('dashboard/contract-messages/','contract_messages',$this->data, 50,4);
        $this->page('contract_messages',$this->data);
    }
    public function inbox()
    {
        $access = $this->access('inbox');
        if($access!=1)
        {
            redirect(base_url('dashboard'));
        }
        $this->data['rec'] = $this->__pagination_data('dashboard/inbox/','msgs',$this->data, 50,3);
        $this->page('inbox',$this->data);
    }
}