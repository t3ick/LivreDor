<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
     *
	 */

    /**
     * @Pro
     */

	public function index()
	{
        $this->load->model('base_model');
        $list_Dor["data"] = $this->base_model->get_info();
		$this->load->view('welcome_message', $list_Dor);
	}
    public function page()
    {
        $this->load->view('page');
    }
    public function help()
    {
        $this->load->helper('MY_HelP');
        MY_Help_helper();
    }
    public function code()
    {
        $this->load->library('code_lib');
        $this->code_lib->code();
    }
    public function base()
    {

        $this->load->model('base_model');
        print_r ($this->base_model->get_info());


    }

    public function add()
    {
        $this->load->model('base_model');
        if ($this->base_model->Create_news($this->input->post('pseudo'), $this->input->post('comment'))) {
            echo "ok";
        } else {
            echo "fail";
        }
    }

    public function test()
    {
        echo 'postpass';
    }

}