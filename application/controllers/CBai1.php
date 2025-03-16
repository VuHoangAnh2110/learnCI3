<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CBai1 extends CI_Controller {
    public function __construct(){
        parent::__construct();
    }

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
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->model("MBai1");
		
        $data = array(
            'title' => 'Bài học đầu tiên',
            'base_url' => base_url(),
			'set_value_ipname' => "",
			'form_error_ipname' => "",
			'data_user' => $this->MBai1->get_user(),
        );
        $data1['data'] = $data;
		$this->load->view('layout/VLayout', $data1);
	}

	public function InsertData() {
		$this->load->library('form_validation');
		$this->form_validation->set_rules("ipname", "Name", 'required|alpha_numeric_spaces');
		
		if($this->form_validation->run()){
			$this->load->model("MBai1");
			$favorites = $this->input->post(['ipfav1', 'ipfav2', 'ipfav3']);
			$favorites = is_array($favorites) ? implode('', $favorites) : "" ;
			$dataUser = array(
				'sName' => $this->input->post("ipname"),
				'sFavorite' => $favorites,
			);
			$this->MBai1->insert_data($dataUser);
			redirect(base_url());
		} else {
			$data = array(
				'title' => 'Bài học đầu tiên',
				'base_url' => base_url(),
				'set_value_ipname' => set_value('ipname'),
				'form_error_ipname' => form_error('ipname'),
			);
			$data1['data'] = $data;
			$this->load->view('layout/VLayout', $data1);
		}

	}

}
