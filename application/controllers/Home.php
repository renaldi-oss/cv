<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model("home_model");
        $this->load->model("education_model");
        $this->load->model("experiencce_model");
        $this->load->model("info_model");
    }
	public function index()
	{
        $data["home"] = $this->home_model->getAll();
        $data["education"] = $this->education_model->getAll();
        $data["experiencce"] = $this->experiencce_model->getAll();
        $data["info"] = $this->info_model->getAll();
        //var_dump($data['info']);
        $this->load->view("home", $data);
    }
    
}
