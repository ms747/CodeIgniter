<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
      $data['title'] = "My Application";
	  	$this->load->view('header',$data);

		  $this->load->view('footer');
	}
 
  public function about()
  {
    $data['title'] = "My Application";
    $this->load->view('header',$data);
    $this->load->view('about');
    $this->load->view('footer');
  }
  
   
   public function example_output($output = null)
  {
    $this->load->view('our_template',$output);     
    $this->load->view('footer');
  }
  
 public function contacts()
  {
    $data['title'] = "My Application";
    $this->load->view('header',$data);
    $crud = new grocery_CRUD();
    $crud->set_table('contacts');
    $output = $crud->render();
    $this->example_output($output);        
}
  
  
 }
