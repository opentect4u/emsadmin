<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admins extends MX_Controller {

    public function __construct(){

        parent::__construct();
        
        //For User's Authentication
        if(!isset($this->session->userdata('loggedin')->user_id)){
            
            redirect('auths/login');

        }

        $this->load->model('Admin');

        $link['title']  = 'Admin Details';

        $link['link']   =   [

            "/assets/plugins/footable/css/footable.core.css",

            "/assets/plugins/bootstrap-select/bootstrap-select.min.css"

        ];

        
        $this->load->view('admin/header');
        
    }

    public function f_organisation(){
        
        $data['org'] = $this->Admin->f_get_particulars('md_organisation', NULL, NULL, 0);

        $this->load->view('registration/dashboard', $data);

    }

    public function f_organisation_add(){

        if($_SERVER['REQUEST_METHOD'] == 'POST'){

            $data_array = array(
                "org_name" => $this->input->post('org_name'),
                "start_dt" => $this->input->post('start_date'),
                "org_state" => $this->input->post('state'),
                "org_email" => $this->input->post('email'),
                "org_phno" => $this->input->post('phn_no'),
                "org_website" => $this->input->post('website'),
                "org_addr" => $this->input->post('address'),
                "cnct_person" => $this->input->post('contact_person'),
                "designation" => $this->input->post('designation'),
                "no_of_user" => $this->input->post('user'),
                "org_status" => ($this->input->post('org_status') == 'A')? 1:0,
                "one_time_amt" => $this->input->post('one_time_amt'),
                "monthly_amt" => $this->input->post('monthly_amt'),
                "created_by" => (isset($this->session->userdata('loggedin')->uesr_name))? 'sss':'sss',
                "created_dt" => date('Y-m-d h:i:s')
            );

            $this->Admin->f_insert("md_organisation", $data_array);

            redirect('admin/organisation');

        }
        else {

            $data['states'] = $this->Admin->f_get_particulars('mm_states', NULL, NULL, 0);
    
            $this->load->view('registration/form', $data);
            
        }

    }
}