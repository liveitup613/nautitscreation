<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct() {
		
		parent::__construct();
		date_default_timezone_set('EST');
	}

	public function index()
	{
		$this->db->select('');		
		$this->db->from('tblguestbook');
		$data['guestbooks'] = $this->db->get()->result_array();

		$this->load->model('Value_model');
		$data['Contact'] = $this->Value_model->getRowsByType('Contact');
		$data['Hour'] = $this->Value_model->getRowsByType('Hour');
		$data['Social'] = $this->Value_model->getRowsByType('Social');
		
		$this->load->view('fe/home', $data);
    }
    
    
    public function aboutMe() {
		$this->load->model('Value_model');
		$data['Contact'] = $this->Value_model->getRowsByType('Contact');
		$data['Hour'] = $this->Value_model->getRowsByType('Hour');
		$data['Social'] = $this->Value_model->getRowsByType('Social');
		$data['LocalStores'] = $this->Value_model->getRowsByType('Local Store');
		
		$this->db->select('');
		$this->db->from('tblresources');
		$this->db->where('Type', 'Ingredient Resource');
		$data['Resources'] = $this->db->get()->result_array();
		
		$this->db->select('*');
		$this->db->from('tblvalues');
		$this->db->where('Type', 'Our Journey');
		$ret = $this->db->get()->row_array();

		$data['Journey'] = $ret['Value'];

        $this->load->view('fe/about-me', $data); 
	}

	public function media() {
		$this->load->model('Value_model');
		$data['Contact'] = $this->Value_model->getRowsByType('Contact');
		$data['Hour'] = $this->Value_model->getRowsByType('Hour');
		$data['Social'] = $this->Value_model->getRowsByType('Social');		

		$this->db->select('');
		$this->db->from('tblresources');
		$this->db->where_in('Type', array('Photo', 'Video'));
		$data['Resources'] = $this->db->get()->result_array();

		$this->load->view('fe/media', $data);
	}

	public function faq() {
		$this->load->model('Value_model');
		$data['Contact'] = $this->Value_model->getRowsByType('Contact');
		$data['Hour'] = $this->Value_model->getRowsByType('Hour');
		$data['Social'] = $this->Value_model->getRowsByType('Social');

		$question = $this->input->get('query');		

		$this->db->select('*');
		$this->db->from('tblvalues');
		$this->db->where('Type', 'FAQ');
		$this->db->group_start();
		$this->db->like('Name', $question);
		$this->db->or_like('Value', $question);
		$this->db->group_end();

		$data['faqs'] = $this->db->get()->result_array();
		$data['Question'] = $question;

		$this->load->view('fe/faq', $data);
	}

	public function contactUs() {
		$this->load->model('Value_model');
		$data['Contact'] = $this->Value_model->getRowsByType('Contact');
		$data['Hour'] = $this->Value_model->getRowsByType('Hour');
		$data['Social'] = $this->Value_model->getRowsByType('Social');		

		$this->load->view('fe/contact-us', $data);
	}

	public function recipe() {
		$this->load->model('Value_model');
		$data['Contact'] = $this->Value_model->getRowsByType('Contact');
		$data['Hour'] = $this->Value_model->getRowsByType('Hour');
		$data['Social'] = $this->Value_model->getRowsByType('Social');

		$this->db->select('*');		
		$this->db->from('tblrecipes');
		$result = $this->db->get()->result_array();

		$return_result = array();

		foreach ($result as $row) {
			$this->db->select('*');
			$this->db->where('RecipeID', $row['ID']);
			$this->db->from('tblrecipe_images');
			$this->db->limit(1);
			$ret = $this->db->get()->row_array();

			if ($ret == NULL)
				continue;

			$row['Attach'] = $ret['Attach'];
			array_push($return_result, $row);
		}
		
		$data['resources'] = $return_result;

		$this->load->view('fe/recipe', $data);
	}

	public function recipe_show($ID) {
		$this->load->model('Value_model');
		$data['Contact'] = $this->Value_model->getRowsByType('Contact');
		$data['Hour'] = $this->Value_model->getRowsByType('Hour');
		$data['Social'] = $this->Value_model->getRowsByType('Social');

		$this->db->select('*');
		$this->db->where('ID', $ID);
		$this->db->from('tblrecipes');
		$row = $this->db->get()->row_array();

		$this->db->select('*');
		$this->db->from('tblrecipe_images');
		$this->db->where('RecipeID', $ID);
		$row['images'] = $this->db->get()->result_array();

		$data['Recipe'] = $row;

		$this->load->view('fe/recipe_view', $data);
	}

	public function tutorial() {
		$this->load->model('Value_model');
		$data['Contact'] = $this->Value_model->getRowsByType('Contact');
		$data['Hour'] = $this->Value_model->getRowsByType('Hour');
		$data['Social'] = $this->Value_model->getRowsByType('Social');

		$this->db->select('');
		$this->db->from('tblresources');
		$this->db->where_in('Type', array('Tutorial'));
		$data['Resources'] = $this->db->get()->result_array();

		$this->load->view('fe/tutorial', $data);
	}
	
	public function sendEmail() {
		$name = $this->input->post('name');
		$phone = $this->input->post('phone');
		$email = $this->input->post('email');
		$message = $this->input->post('message');

		$config = Array(
			'protocol' => 'smtp',
			'smtp_host' => 'ssl://smtp.googlemail.com',
			'smtp_port' => 465,
			'smtp_user' => 'nautitscreations@gmail.com',
			'smtp_pass' => 'TMG32274ldy#',
			'mailtype' => 'html',
			'charset' => 'iso-8859-1'
			);

		$this->load->library('email', $config);		

		$this->email->set_newline("\r\n");
		$this->email->from('nautitscreations@gmail.com', 'Contact Us');
		$this->email->to('nautitscreations@gmail.com');
		$this->email->subject('Contact Us');

		$cotent = "Name: <strong>".$name. "</strong><br>Phone: <strong>" . $phone . "</strong><br>Email: <strong>" .$email ."</strong><br>Message:<br><strong>". $message.'</strong>';
		$this->email->message($cotent);

		if ($this->email->send())
		{
			echo "Email was successfully sent.";
		}
		else {  
			show_error($this->email->print_debugger());
		}
	}
}
