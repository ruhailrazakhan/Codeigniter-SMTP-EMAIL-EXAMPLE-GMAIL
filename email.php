<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();
class email extends CI_Controller {
	function __construct(){
		// Call the Model constructor
		parent::__construct();

	}
	public function send_email(){
		 $config = array(
		    'protocol'  => 'smtp',
		    'mail_path' => 'ssl://smtp.googlemail.com',
		    'smtp_host' => 'ssl://smtp.googlemail.com',
		    'smtp_port' => '465',
		    'smtp_user' => 'example@gmail.com',
		    'smtp_pass' => 'password',
		    'charset'   => "utf-8",
		    'mailtype'  => 'html',
		    'starttls'  => true,
		    'newline'   => "\r\n"
		    );
		// We Need To Load Email Library For Using Email Functionality
		 $this->load->library('email', $config);  
		
		 $this->email->from('noreply@gmail.com', 'Your Name');
		 $this->email->to('sender@example.com');
		 $this->email->subject('eKnowledgetree Enquiry Form');
		// $emaildescription=$this->load->view('user/sampletemplate',$data,TRUE);
		 $this->email->message('<html xmlns="http://www.w3.org/1999/xhtml">
		    <head>
			<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
			<title></title>
			<style></style>
		    </head>
		    <body>
			<table border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" id="bodyTable">
			    <tr>
				<td align="center" valign="top">
				    <table border="0" cellpadding="20" cellspacing="0" width="600" id="emailContainer">
					<tr>
					    <td align="center" valign="top">
						Welcome to Email World
					    </td>
					</tr>
				    </table>
				</td>
			    </tr>
			</table>
		    </body>
		</html>');
		 $this->email->send();
		}
}
