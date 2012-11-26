<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class wizard extends Authenticated_Controller {

	//--------------------------------------------------------------------


	public function __construct()
	{
		parent::__construct();

		$this->load->library('form_validation');
		$this->lang->load('starter');
		$this->load->module('gfusers');
		$this->lang->load('gfusers');

		// Load the messages MODULE
		// $this->load->module('messages');
		
	}

	//--------------------------------------------------------------------



	/*
		Method: index()

		Displays a list of form data.
	*/
	public function index()
	{

	}

	//--------------------------------------------------------------------


	/*
		Method: wizard_farmer()

		Displays a list of form data.
	*/
	public function wizard_farmer()
	{
		
		Template::set_view('starter/wizard/view_farmer_one');
		Template::render();
	}

	//--------------------------------------------------------------------


	/*
		Method: wizard_company()

		Displays a list of form data.
	*/
	public function wizard_company()
	{
		Template::set_view('starter/starter/view_welcome');
		Template::render();
	}

	//--------------------------------------------------------------------


	/*
		Method: wizard_simple_user()

		Displays a list of form data.
	*/
	public function wizard_simple_user()
	{

		Template::set_view('starter/starter/view_welcome');
		Template::render();
	}


}