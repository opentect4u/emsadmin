<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auths extends MX_Controller {

	public function __construct(){
        
        parent::__construct();

        $this->load->model('Auth');
        
    }

	public function index()	{
        
		if ($_SERVER['REQUEST_METHOD'] === 'POST'){

			if($pass = $this->Auth->f_get_particulars("md_users", array('password'), array("user_id" => $this->input->post('user_id')), 1)) {

			    if(password_verify($this->input->post('password'), $pass->password)){
                    
                    //User Information
                    $where  =   array(
                        
                        "user_id"                 =>  $this->input->post('user_id'),
                        
                        "user_status"             =>  'S'
                    );
                
                    $user_data = $this->Auth->f_get_particulars("md_users", $select, $where, 1);
                    
                    if(!isset($user_data)){
                        //Setting Messages
                        $message    =   array( 
                                
                            'message'   => 'Inactive User!',
                            
                            'status'    => 'danger'
                            
                        );

                        $this->session->set_flashdata('msg', $message);

                        redirect('auth/login');
                        
                    }
                    //Setting Session Value for audit_trail
                    $this->session->set_userdata('loggedin', $user_data);
                    
                    //Audit Trail value
                    $data_array     =   array(

                        "login_dt"  =>   date('Y-m-d h:m:s'),

                        "user_id"   =>   $this->input->post('user_id'),

                        "terminal_name" => $_SERVER['REMOTE_ADDR']

                    );

                    $this->Auth->f_insert("td_audit_trail", $data_array);

                    //Getting max sl_no for audit trail
                    $select         =   array(

                        "MAX(sl_no) sl_no"

                    );

                    $where      =   array(

                        "user_id"   => $this->input->post('user_id')

                    );

                    $sl_no = $this->Auth->f_get_particulars("td_audit_trail", $select, $where, 1);

                    $this->session->set_userdata('tm_audit_sl_no', $sl_no->sl_no);

                    //Setting Application Date
                    $this->session->set_userdata('sysdate', date('d-m-Y'));

                    redirect('auth/home');

                }
                else{

                    //Setting Messages
                    $message    =   array( 
                            
                        'message'   => 'Ivalid Password!',
                        
                        'status'    => 'danger'
                        
                    );

                    $this->session->set_flashdata('msg', $message);
                    
                    redirect('auth/login');
                    
                }

			}
			else{

                //Setting Messages
                $message    =   array( 
                        
                    'message'   => 'Ivalid User!',
                    
                    'status'    => 'danger'
                    
                );

                $this->session->set_flashdata('msg', $message);

                redirect('auth/login');
                
			}
        }
         
		else{

            redirect('auth/login');
            
		}

    }
    

    //Login Function
    public function f_login(){

        if($this->session->userdata('loggedin')){

            redirect('auth/home');

        }
        else{

            $this->load->view('admin/login/login');

        }    
        
    }

    //Login Function
    public function f_home(){

        if($this->session->userdata('loggedin')){

            /* $link['link']       =   array("/assets/plugins/css-chart/css-chart.css");

            $link['title']      =   'Mysore Home';

            $script['script']   =   [];

            //User Details
            $select = array("emp_code", "emp_name", "department",
                            "designation", "email", "img_path");

            $link['user_dtls']   = $this->Auth->f_get_particulars("md_employee", $select, array("emp_code" => $this->session->userdata('loggedin')->user_id), 1);

            //Leave Balance
            unset($select);
            $select = array(
                
                "trans_cd", "ml_bal", "el_bal",
                "comp_off_bal", "MAX(balance_dt) balance_dt"
            
            );

            $where  =   array(
    
                "emp_code = '".$this->session->userdata('loggedin')->user_id."' GROUP BY trans_cd, ml_bal, el_bal, comp_off_bal ORDER BY balance_dt DESC LIMIT 0,1" => NULL

            );

            $data['leave_balance'] = $this->Auth->f_get_particulars('td_leave_balance', $select, $where, 1);

            //Leave Yet to be taken
            unset($where);

            $where = array(

                "emp_code"          => $this->session->userdata('loggedin')->user_id,

                "leave_dt > '".date('Y-m-d')."'" => NULL,

                "status"            => 'A'
            );

            $data['pending'] = $this->Auth->f_get_particulars('td_leave_dates', array("count(1) count"), $where, 1);

            //Rejected Leave
            unset($where);

            $where = array(

                "emp_code"          => $this->session->userdata('loggedin')->user_id,

                "rejection_status"  => 1

            );

            $data['reject'] = $this->Auth->f_get_particulars('td_leaves_trans', array("count(1) count"), $where, 1);

            $this->load->view('header', $link);
 */
            $this->load->view('admin/header');

            $this->load->view('admin/dashboard');

        }
        else{

            redirect('auth/login');

        }
        
    }

    public function f_logout(){

        if($this->session->userdata('loggedin')){


            $where  =   array(

                "sl_no"    =>   $this->session->userdata('tm_audit_sl_no')
                
            );

            $this->Auth->f_edit("td_audit_trail", array("logout" => date('Y-m-d h:m:s')), $where);

            $this->session->unset_userdata('loggedin');

            $this->session->unset_userdata('tm_audit_sl_no');

            redirect('auth/login');

        }else{

            redirect('auth/login');

        }
           
    }

    //For Param Value
    public function param(){
    
        if($this->session->userdata('loggedin')){
            
            $data   =  $this->Auth->f_get_particulars("md_parameters", array("param_value"), array("sl_no" => $this->input->get('id')), 1);

            echo $data->param_value;

            exit;

        }

    }

    /****************************** Pending Comp Off *********************************/

    public function pending_compoffs(){

        $where = array(

            "year(balance_dt)" => date('Y'),
            "month(balance_dt) BETWEEN ".(date('m') - 2)." AND ".(date('m') -1)."" => NULL,            
            "emp_code"         => $this->session->userdata('loggedin')->user_id,
            "comp_off_out > 0" => NULL
        );

        $data   =  $this->Auth->f_get_particulars("td_leave_balance", NULL, $where, 0);

        if(!$data){
            
            $data = $this->Auth->f_get_particulars('td_leave_balance', array('MAX(balance_dt) balance_dt'), array("emp_code" => $this->session->userdata('loggedin')->user_id), 1);
            
            $where = array(
                "balance_dt" => $data->balance_dt,
                "emp_code"   => $this->session->userdata('loggedin')->user_id
            );
    
            $this->Auth->f_edit("td_leave_balance", array("comp_off_bal" => 0), $where);

        }
        
    }

}
