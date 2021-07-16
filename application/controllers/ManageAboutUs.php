<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ManageAboutUs extends CI_Controller {

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
	

	/*
	*	Ingredients Resources
	*/

	public function ingredient_resources() {
		$this->db->select('*');
		$this->db->where('Type', 'Ingredient Resource');
		$this->db->from('tblresources');
		$data['resources'] = $this->db->get()->result_array();

		$this->load->view('be/aboutus/ingredients-resources', $data);
	}

	/*
	*	Local Stores
	*/

	public function local_store() {
		$this->load->model('Value_model');

		$data['LocalStores'] = $this->Value_model->getRowsByType('Local Store');
		$this->load->view('be/aboutus/local-store', $data);
	}
}