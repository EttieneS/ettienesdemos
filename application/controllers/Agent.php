<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Agent extends CI_Controller {
   public $agent;

   public function __construct() {
      parent::__construct();

      $this->load->library('form_validation');
      $this->load->library('session');
      $this->load->model('Agent');

      $this->agent = new Agent;
   }

   public function index()
   {
       $data['data'] = $this->itemCRUD->get_itemCRUD();

       $this->load->view('theme/header');
       $this->load->view('itemCRUD/list',$data);
       $this->load->view('theme/footer');
   }

   public function show($id)
   {
      $item = $this->agent->find_item($id);


      $this->load->view('theme/header');
      $this->load->view('agent/show',array('agent'=>$agent));
      $this->load->view('theme/footer');
   }

   public function create()
   {
      $this->load->view('theme/header');
      $this->load->view('itemCRUD/create');
      $this->load->view('theme/footer');
   }

   public function store()
   {
        $this->form_validation->set_rules('agent_name', 'Agent Name', 'required');
        $this->form_validation->set_rules('agent_surname', 'Surname', 'required');

        if ($this->form_validation->run() == FALSE){
            $this->session->set_flashdata('errors', validation_errors());
            redirect(base_url('agent/create'));
        }else{
           $this->itemCRUD->insert_item();
           redirect(base_url('agent'));
        }
    }

   public function edit($id)
   {
       $item = $this->itemCRUD->find_item($id);

       $this->load->view('theme/header');
       $this->load->view('agent/edit',array('agent'=>$agent));
       $this->load->view('theme/footer');
   }

   public function update($id)
   {
        $this->form_validation->set_rules('agent_name', 'Agent Name', 'required');
        $this->form_validation->set_rules('agent_surname', 'Agent Surname', 'required');

        if ($this->form_validation->run() == FALSE){
            $this->session->set_flashdata('errors', validation_errors());
            redirect(base_url('agent/edit/'.$id));
        }else{
          $this->itemCRUD->update_agent($id);
          redirect(base_url('agent'));
        }
   }

   public function delete($id)
   {
       $agent = $this->agent->delete_agent($id);
       redirect(base_url('agent'));
   }
}
