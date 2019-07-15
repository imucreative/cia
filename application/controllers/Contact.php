<?php

class Contact extends CI_Controller {

    function __construct() {
        parent::__construct();
		$this->load->model('Mod_network');
    }

    function index() {
		$data['network']	= $this->Mod_network->select_all()->result();
		$this->template->load('template', 'contact', $data);
    }
	
	function send_mail_to_admin(){
		$name   		= $this->input->post('name');
		$email_cust		= $this->input->post('email');
		$subject_cust	= $this->input->post('subject');
		$message		= $this->input->post('message');
		$email_admin	= "dian.tri@hyundaimobil.com";
		
		$to					= $email_admin;
		$cc					= "";
		$from_customer		= $email_cust;
		$name_from			= $name;
		$subject			= $subject_cust;
		$isi_email			= "
			<html>
				<head>Emergency</head>
				<body>
					".$message."
				</body>
			</html>
		";
		
		$this->confirmSendEmail($to, $cc, $from_customer, $name_from, $subject, $isi_email);
		redirect('contact');
	}
	
	function confirmSendEmail($email_address_to, $email_address_cc, $email_address_from, $email_name_from, $email_subject, $email_message){
		$email_config['smtp_host'] = ($_SERVER['HTTP_HOST'] == "www.hyvision-hyundaimobil.com") ? "115.85.64.155" : "172.16.1.14";

		$this->load->library('email');
		$this->email->clear(TRUE);
		$this->email->initialize($email_config);
		$this->email->from("",trim($email_address_from));
		$this->email->to(trim($email_address_to));
		$this->email->cc(trim($email_address_cc));
		$this->email->subject($email_subject);
		$this->email->message($email_message);
		if($this->email->send()){
			return true;
		}else{
			return false;
		} 
	}


}