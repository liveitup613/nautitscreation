<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ManageExplore extends CI_Controller {

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

	/*****************
	 * Recipe
	 */

	public function recipe() {
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

		$this->load->view('be/explore/recipe', $data);
	}

	/****************
	 * Tutorial
	 */
	
	public function tutorial() {
		$this->db->select('*');
		$this->db->where('Type', 'Tutorial');
		$this->db->from('tblresources');
		$data['resources'] = $this->db->get()->result_array();

		$this->load->view('be/explore/tutorial', $data);
	}

	/*****************
	 * Videos APIs
	 */

	public function addTutorial() {
		$resource_data = array(
			'Type' => 'Tutorial',
			'Title' => $this->input->post('Title')
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

	public function deleteTutorial() {
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

	/*****************
	 * Recipe APIs
	 */

	public function addRecipe() {
		$data = array(
			'Title' => $this->input->post('Title'),
			'Ingredients' => $this->input->post('Ingredients'),
			'Process' => $this->input->post('Ingredients'),
			'DateAdded' => time()
		);

		$this->db->insert('tblrecipes', $data);
		$ID = $this->db->insert_id();

		if ($ID == NULL || $ID == 0) {
			echo json_encode(array(
				'success' => false
			));
			return;
		}

		$ret = $this->uploadImages($ID);

		if ($ret != 'success') {
			echo json_encode(array(
				'success' => false
			));
			return;
		}

		echo json_encode(array(
			'success' => true
		));		
	}

	public function getRecipe() {
		$ID = $this->input->post('ID');

		$this->db->select('*');
		$this->db->where('ID', $ID);
		$this->db->from('tblrecipes');
		$row = $this->db->get()->row_array();

		if ($row == NULL) {
			echo json_encode(array(
				'success' => false
			));
			return;
		}

		echo json_encode(array(
			'success' => true,
			'recipe' => $row
		));
	}

	public function updateRecipe() {
		$ID = $this->input->post('ID');
		$data = $this->input->post();
		$data['DateAdded'] = time();

		$this->db->where('ID', $ID);
		$this->db->update('tblrecipes', $data);

		echo json_encode(array(
			'success' => true
		));
	}

	public function deleteRecipe() {
		$ID = $this->input->post('ID');

		$this->select('*');
		$this->db->from('tblrecipe_images');
		$this->db->where('RecipeID', $ID);
		$result = $this->db->get()->result_array();

		foreach ($result as $row) {
			if (!empty($row['Attach']) && file_exists('assets/images/recipes/'.$row['Attach'])) {
				unlink('assets/images/recipes/'.$row['Attach']);
			}

			$this->db->where('ID', $row['ID']);
			$this->db->delete('tblrecipe_images');
		}

		$this->db->where('ID', $ID);
		$this->db->delete('tblrecipes');

		echo json_encode(array(
			'success' => true
		));
	}

	public function getRecipeImages() {
		$ID = $this->input->post('ID');

		$this->db->select();
		$this->db->where('RecipeID', $ID);
		$this->db->from('tblrecipe_images');
		$result = $this->db->get()->result_array();

		if ($result == NULL) {
			echo json_encode(array(
				'success' => false
			));
			return;
		}

		echo json_encode(array(
			'success' => true,
			'images' => $result
		));
	}

	public function uploadRecipeImages() {
		$RecipeID = $this->input->post('ID');

		$ret = $this->uploadImages($RecipeID);

		$this->db->select();
		$this->db->where('RecipeID', $RecipeID);
		$this->db->from('tblrecipe_images');
		$result = $this->db->get()->result_array();

		if ($ret == 'success') {

			echo json_encode(array(
				'success' => true,
				'images' => $result
			));
			return;
		}

		echo json_encode(array(
			'success' => false
		));
		return;
		
	}

	private function uploadImages($RecipeID) {		
        if(!empty($_FILES['resource']['name']) && count(array_filter($_FILES['resource']['name'])) > 0){ 
            $filesCount = count($_FILES['resource']['name']); 
            for($i = 0; $i < $filesCount; $i++){ 
                $_FILES['file']['name']     = $_FILES['resource']['name'][$i]; 
                $_FILES['file']['type']     = $_FILES['resource']['type'][$i]; 
                $_FILES['file']['tmp_name'] = $_FILES['resource']['tmp_name'][$i]; 
                $_FILES['file']['error']     = $_FILES['resource']['error'][$i]; 
                $_FILES['file']['size']     = $_FILES['resource']['size'][$i]; 
                 
                // File upload configuration 
                $uploadPath = 'assets/images/recipes/'; 
                $config['upload_path'] = $uploadPath; 
                $config['allowed_types'] = '*'; 
                $config['file_name'] = 'resource'.time();
                 
                // Load and initialize upload library 
                $this->load->library('upload', $config); 
                $this->upload->initialize($config); 
                 
                // Upload file to server 
                if($this->upload->do_upload('file')){ 
                    // Uploaded file data 
                    $fileData = $this->upload->data(); 
                    $uploadData[$i]['RecipeID'] = $RecipeID;
                    $uploadData[$i]['Attach'] = $fileData['file_name'];
                }
                else{  
                    $errorUploadType = $error =  $this->upload->display_errors();
                } 
            } 
             
            $errorUploadType = !empty($errorUploadType)?'<br/>File Type Error: '.trim($errorUploadType, ' | '):''; 

            if(!empty($uploadData)){ 
                // Insert files data into the database 
				$insert = $this->db->insert_batch('tblrecipe_images', $uploadData); 
                return $insert? 'success' : 'failed';                 
            }
			else{                 
                return "Sorry, there was an error uploading your file.".$errorUploadType;
            } 
        }
        return 'success';
    }

	public function deleteRecipeImage() {
		$ID = $this->input->post('ID');
		$RecipeID = $this->input->post('RecipeID');

		$this->db->select('Attach');
		$this->db->where('ID', $ID);
		$this->db->from('tblrecipe_images');
		$row = $this->db->get()->row_array();

		if ($row == NULL){
			echo json_encode(array(
				'success' => false
			));
			return;
		}

		if (!empty($row['Attach']) && file_exists('assets/images/recipes/'.$row['Attach'])) {
			unlink('assets/images/recipes/'.$row['Attach']);
		}

		$this->db->where('ID', $ID);
		$this->db->delete('tblrecipe_images');

		$this->db->select();
		$this->db->where('RecipeID', $RecipeID);
		$this->db->from('tblrecipe_images');
		$result = $this->db->get()->result_array();

		echo json_encode(array(
			'success' => true,
			'images' => $result
		));
	}
}