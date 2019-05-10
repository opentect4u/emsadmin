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
        
        $select = array(
            "m.org_name", "m.org_phno", "s.state org_state", "m.org_id"
        );
        $where = array(
            "m.org_state = s.id" => NULL
        );
        $data['org'] = $this->Admin->f_get_particulars('md_organisation m, mm_states s', $select, $where, 0);

        $this->load->view('registration/dashboard', $data);

    }

    public function f_organisation_add(){

        if($_SERVER['REQUEST_METHOD'] == 'POST'){

            $max_code = $this->Admin->f_get_particulars('md_organisation', array('(MAX(org_id) + 1) org_id'), NULL, 1);

            $data_array = array(
                "org_id" => ($max_code->org_id)? $max_code->org_id : 1,
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

            //User Details
            unset($data_array);

            $data_array = array (

                "org_id" => ($max_code->org_id)? $max_code->org_id : 1,
                "emp_code" => $this->input->post('email'),
                "user_name" =>  $this->input->post('org_name'),
                "user_id" =>  $this->input->post('email'),
                "password" => '$2y$10$QmkLE5f23lNrdFQbQ7yULO6X0hCstQq5s./jwQ7pj3Omue.V4P856',
                "org_status" => ($this->input->post('org_status') == 'A')? 1:0,
                "user_status" =>  'A',
                "created_by"  => $this->session->userdata('loggedin')->user_name,
                "created_dt" => date('Y-m-D h:i:s')
    
            );

            $this->Admin->f_insert('md_users', $data_array);

            //Setting Messages
            $message    =   array( 
                    
                'message'   => 'Successfully added!',
                
                'status'    => 'success'
                
            );

            $this->session->set_flashdata('msg', $message);

            redirect('admin/organisation');

        }
        else {

            $data['url'] = 'add';
            $data['data'] = (object) array(
                "org_id" => NULL,
                "org_name" => NULL,
                "start_dt" => NULL,
                "org_state" => NULL,
                "org_email" => NULL,
                "org_phno" => NULL,
                "org_website" => NULL,
                "org_addr" => NULL,
                "cnct_person" => NULL,
                "designation" => NULL,
                "no_of_user" => NULL,
                "org_status" => NULL,
                "one_time_amt" => NULL,
                "monthly_amt" => NULL
            );

            $data['states'] = $this->Admin->f_get_particulars('mm_states', NULL, NULL, 0);
    
            $this->load->view('registration/form', $data);
            
        }

    }

    public function f_organisation_edit(){

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
                "modified_by" => (isset($this->session->userdata('loggedin')->uesr_name))? 'sss':'sss',
                "modified_dt" => date('Y-m-d h:i:s')
            );

            $where = array(
                'org_id' => $this->input->post('id')
            );

            $this->Admin->f_edit("md_organisation", $data_array, $where);

            //User Details
            unset($data_array);

            $data_array = array (

                "org_status" => ($this->input->post('org_status') == 'A')? 1:0,
                "modified_by"  => $this->session->userdata('loggedin')->user_name,
                "modified_dt" => date('Y-m-D h:i:s')
    
            );

            $this->Admin->f_edit('md_users', $data_array, $where);

            //Setting Messages
            $message    =   array( 
                    
                'message'   => 'Successfully updated!',
                
                'status'    => 'success'
                
            );

            $this->session->set_flashdata('msg', $message);

            redirect('admin/organisation');

        }
        else {

            $data['url'] = 'edit';
            $data['data'] = $this->Admin->f_get_particulars('md_organisation', NULL, array('org_id' => $this->input->get('id')), 1);

            $data['states'] = $this->Admin->f_get_particulars('mm_states', NULL, NULL, 0);
    
            $this->load->view('registration/form', $data);
            
        }

    }
}