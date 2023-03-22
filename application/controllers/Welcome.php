<?php
defined('BASEPATH') or exit('No direct script access allowed');

use App\Models\UserModel;

class Welcome extends CI_Controller
{

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
	// public function index()
	// {
	// 	$this->load->model('UserModel'); // Load the User_Model
	// 	$data['product_details'] = $this->UserModel->getdata(); // Call the getdata() method on the User_Model
	// 	$this->load->view('welcome_message', $data); // Pass the $data array to the view
	// }
	// public function insert()
	// {
	// 	$this->UserModel->insertdata([
	// 		'user_name' => 'red',
	// 		'user_email' => 'red',
	// 		'user_password' => '245',
	// 	]);




	// }

	public function __construct()
	{
		parent::__construct();
		$this->load->model('UserModel');
	}

	public function index()
	{
		$data['product_details'] = $this->UserModel->getdata();
		$this->load->view('welcome_message', $data);
	}

	public function insert()
	{
		$this->form_validation->set_rules('user_name','User Name','trim|required');
		$this->form_validation->set_rules('user_email','User Email','trim|required');
		$this->form_validation->set_rules('user_password','User Password','trim|required');

		
		if($this->form_validation->run()==false){
			$data_error=[
				'error'=> validation_errors()
			];
			$this->session->set_flashdata($data_error);
		}
		else{
		$this->UserModel->insertdata([
			'user_name' => $this->input->post('user_name'),
			'user_email' => $this->input->post('user_email'),
			'user_password' => $this->input->post('user_password'),
		]);
	}
		redirect('index.php');
	}
	public function delete($id)
	{
		$this->UserModel->deleteitem($id);

		redirect('index.php');
	}
	public function edit($id)
	{

		$data['product'] = $this->UserModel->edit_model($id);
		$this->load->view('edit_user', $data);


	}
	public function update($id)
	{
		$this->UserModel->updatedata([
			'user_name' => $this->input->post('user_name'),
			'user_email' => $this->input->post('user_email'),
			'user_password' => $this->input->post('user_password'),
		], $id);
		redirect('index.php');


	}

}