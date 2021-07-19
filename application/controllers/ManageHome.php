<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ManageHome extends CI_Controller {

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
	*	Summary
	*/

	public function index()
	{
		$this->db->select('');		
		$this->db->from('tblguestbook');
		$data['guestbooks'] = $this->db->get()->result_array();

		$this->load->model('Value_model');
		$data['Contact'] = $this->Value_model->getRowsByType('Contact');
		$data['Hour'] = $this->Value_model->getRowsByType('Hour');
		

		$this->load->view('be/home/guestbook', $data);
	}	
	
	/*
	*	CRUD APIS
	*/


	/*
	*	Guest Books
	*/
	public function getGuestBook() {
		$ID = $this->input->post('ID');

		$this->db->select('*');
		$this->db->where("ID", $ID);
		$this->db->from('tblguestbook');
		$data = $this->db->get()->row_array();

		if ($data == null) {
			echo json_encode(
				array(
					'success' => false
				)
				);
			return;
		}

		echo json_encode(
			array(
				'success' => true,
				'Client' => $data['Client'],
				'Feedback' => $data['Feedback']
			)
			);
	}

	public function addGuestBook() {
		$data = $this->input->post();
		$data['Avatar'] = rand(1, 10).'.png';

		$id = $this->db->insert('tblguestbook', $data);

		if ($id == false) {
			echo json_encode(
				array(
					'success' => false
				)
				);
			return;
		}

		echo json_encode(
			array(
				'success' => true,
				'inserted_id' => $id
			)
			);
	}

	public function updateGuestBook() {
		$ID = $this->input->post('ID');
		$data = $this->input->post();

		$this->db->where('ID', $ID);
		$this->db->update('tblguestbook', $data);

		echo json_encode(
			array(
				'success' => true
			)
			);
	}

	public function deleteGuestBook() {
		$ID = $this->input->post('ID');

		$this->db->where('ID', $ID);
		$this->db->delete('tblguestbook');

		echo json_encode(
			array(
				'success' => true
			)
			);
	}

	/*
	*	Resources
	*/

	public function addResource() {
		$resource_data = $this->input->post();
		$Type = $this->input->post('Type');
		$date = time();
		$attach = '';

		$resource_link = $this->getResourceAssetsLink($Type);

		if (!empty($_FILES["resource"]["name"])) {
			$config['upload_path'] = $resource_link;
            $config['allowed_types'] = '*';
            $config['overwrite'] = true;
            $config['file_name'] = 'resource'.$date;
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('resource')) {
                $error =  $this->upload->display_errors();
                echo json_encode(array('message' => $error, 'success' => false));
                return;
            }
            $data = $this->upload->data();
            $attach = $data['file_name'];
        }

        $resource_data['Attach'] = $attach;

		$this->db->set($resource_data);
		$Id = $this->db->insert('tblresources');

		if ($Id == 0)
			echo json_encode(array(
				'success' => false,
			));
		else 		
        	echo json_encode(array(
				'success' => true
			));
	}

	public function getResource() {
		$ID = $this->input->post('ID');

		$this->db->select('*');
		$this->db->where('ID', $ID);
		$this->db->from('tblresources');
		$data = $this->db->get()->row_array();

		if ($data == null) {
			echo json_encode(array(
				'success' => false
			));
			return;
		}

		echo json_encode(array(
			'success' => true,
			'data' => $data
		));
	}

	public function updateResource() {
		$ID = $this->input->post('ID');		
		$resource_data = $this->input->post();

		$this->db->select('Attach, Type');
		$this->db->where('ID', $ID);
		$this->db->from('tblresources');
		$resource = $this->db->get()->row_array();

		if ($resource == null) {
			echo json_encode(
				array(
					'success' => false,
					'message' => 'No such resource'
				)
				);
			return;
		}

		$resource_link = $this->getResourceAssetsLink($resource['Type']);
				
		if (!empty($_FILES["resource"]["name"])) {
			$date = time();
            $config['upload_path'] = $resource_link;
            $config['allowed_types'] = '*';
            $config['overwrite'] = true;
            $config['file_name'] = 'resource'.$date;
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('resource')) {
                $error =  $this->upload->display_errors();
                echo json_encode(array('message' => $error, 'success' => false));
                return;
			}
			
			if (file_exists($resource_link.$resource['Attach']))
				unlink($resource_link.$resource['Attach']);

            $data = $this->upload->data();
			$resource_data['Attach'] = $data['file_name'];
        }
		
		
		$this->db->where('ID', $ID);
		$this->db->update('tblresources', $resource_data);

		echo json_encode(array(
			'success' => true
		));
	}

	public function deleteResource() {
		$ID = $this->input->post('ID');

		$this->db->where('ID', $ID);
		$this->db->from('tblresources');
		$resource = $this->db->get()->row_array();
		if ($resource == null) {
			echo json_encode(array(
				'success' => false
			));
		}

		$resource_link = $this->getResourceAssetsLink($resource['Type']);

		if (!empty($resource['Attach']) && file_exists($resource_link.$resource['Attach'])) {
			unlink($resource_link.$resource['Attach']);
		}

		$this->db->where('ID', $ID);
		$this->db->delete('tblresources');
		$deletedCnt = $this->db->affected_rows();

		if ($deletedCnt == 0) {
			echo json_encode(array(
				'success' => false
			));
		}
		else {
			echo json_encode(array(
				'success' => true
			));
		}	
	}

	private function getResourceAssetsLink($Type) {
		if ($Type == 'Ingredient Resource')
			return 'assets/images/ingredients/';
		if ($Type == 'Photo')
			return 'assets/images/photos/';
		return 'assets/resources/';
	}

	// Add Log

	public function addLog() {
		$Lat = $this->input->post('Lat');
		$Lng = $this->input->post('Lng');
		$Page = $this->input->post("Page");
		$IP = $this->input->ip_address();
		$Date = date('Y-m-d H:i:s');
		$Address = $this->input->post('Address');

		$this->db->insert(
			'tbllog',
			array(
				'IP' => $IP,
				'Lat' => $Lat,
				'Lng' => $Lng,
				'Page' => $Page,
				'Date' => $Date,
				'Address' => $Address
			)
			);
	}

	/*
	*	Value
	*/
	public function getValue() {
		$ID = $this->input->post('ID');

		$this->db->select('*');
		$this->db->where("ID", $ID);
		$this->db->from('tblvalues');
		$data = $this->db->get()->row_array();

		if ($data == null) {
			echo json_encode(
				array(
					'success' => false
				)
				);
			return;
		}

		echo json_encode(
			array(
				'success' => true,
				'Value' => $data['Value'],
				'Name' => $data['Name']
			)
			);
	}

	public function addValue() {
		$data = $this->input->post();

		$id = $this->db->insert('tblvalues', $data);

		if ($id == false) {
			echo json_encode(
				array(
					'success' => false
				)
				);
			return;
		}

		echo json_encode(
			array(
				'success' => true,
				'inserted_id' => $id
			)
			);
	}

	public function updateValue() {
		$ID = $this->input->post('ID');
		$data = $this->input->post();

		$this->db->where('ID', $ID);
		$this->db->update('tblvalues', $data);

		echo json_encode(
			array(
				'success' => true
			)
			);
	}

	public function deleteValue() {
		$ID = $this->input->post('ID');

		$this->db->where('ID', $ID);
		$this->db->delete('tblvalues');

		echo json_encode(
			array(
				'success' => true
			)
			);
	}

}
