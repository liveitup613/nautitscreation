<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ManageMedia extends CI_Controller {

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
    }

	/*****************
	 * Photos
	 */

	public function photos() {
		$this->db->select('*');
		$this->db->where('Type', 'Photo');
		$this->db->from('tblresources');
		$data['resources'] = $this->db->get()->result_array();

		$this->load->view('be/media/photos', $data);
	}

	/****************
	 * Videos
	 */
	
	public function videos() {
		$this->db->select('*');
		$this->db->where('Type', 'Video');
		$this->db->from('tblresources');
		$data['resources'] = $this->db->get()->result_array();

		$this->load->view('be/media/videos', $data);
	}

	/*****************
	 * Videos APIs
	 */

	public function addVideo() {
		$resource_data = array(
			'Type' => 'Video'
		);

		$Type = $this->input->post('VideoType');

		$date = time();		
		$attach = '';

		if ($Type == 'Youtube') {
			$resource_data['Attach'] = $this->input->post('YoutubeID');
			$resource_data['Thumbnail'] = '';
		}
		else if ($Type == 'FromPC') {
			if (!empty($_FILES["resource"]["name"])) {
				$config['upload_path'] = 'assets/videos/';
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
			$resource_data['Thumbnail'] = 'resource'.$date.'.jpg';
			$thumbpath = str_replace('videos/'.$attach, 'images/thumbnails/'.'resource'.$date.'.jpg', $data['full_path']);

			$command = 'ffmpeg  -itsoffset -1  -i ' . $data['full_path'] .' -vcodec mjpeg -vframes 1 '. $thumbpath;

			$ret = exec($command);
		}

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

	public function deleteVideo() {
		$ID = $this->input->post('ID');

		$this->db->where('ID', $ID);
		$this->db->from('tblresources');
		$resource = $this->db->get()->row_array();
		if ($resource == null) {
			echo json_encode(array(
				'success' => false
			));
		}

		if ($resource['Thumbnail'] != '') {
			if (!empty($resource['Attach']) && file_exists('assets/videos/'.$resource['Attach'])) {
				unlink('assets/videos/'.$resource['Attach']);				
			}

			if (!empty($resource['Thumbnail']) && file_exists('assets/images/thumbnails/'.$resource['Thumbnail'])) {
				unlink('assets/images/thumbnails/'.$resource['Thumbnail']);				
			}
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

}