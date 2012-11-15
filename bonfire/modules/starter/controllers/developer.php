<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class developer extends Admin_Controller {

	//--------------------------------------------------------------------


	public function __construct()
	{
		parent::__construct();

		$this->auth->restrict('Starter.Developer.View');
		$this->lang->load('starter');
		
		Template::set_block('sub_nav', 'developer/_sub_nav');
	}

	//--------------------------------------------------------------------



	/*
		Method: index()

		Displays a list of form data.
	*/
	public function index()
	{

		Template::set('toolbar_title', 'Manage starter');
		Template::render();
	}

	//--------------------------------------------------------------------



	/*
		Method: create()

		Creates a starter object.
	*/
	public function create()
	{
		$this->auth->restrict('Starter.Developer.Create');

		Assets::add_module_js('starter', 'starter.js');

		Template::set('toolbar_title', lang('starter_create') . ' starter');
		Template::render();
	}

	//--------------------------------------------------------------------



	/*
		Method: edit()

		Allows editing of starter data.
	*/
	public function edit()
	{
		$this->auth->restrict('Starter.Developer.Edit');

		$id = $this->uri->segment(5);

		if (empty($id))
		{
			Template::set_message(lang('starter_invalid_id'), 'error');
			redirect(SITE_AREA .'/developer/starter');
		}

		Assets::add_module_js('starter', 'starter.js');

		Template::set('toolbar_title', lang('starter_edit') . ' starter');
		Template::render();
	}

	//--------------------------------------------------------------------



	/*
		Method: delete()

		Allows deleting of starter data.
	*/
	public function delete()
	{
		$this->auth->restrict('Starter.Developer.Delete');

		$id = $this->uri->segment(5);

		if (!empty($id))
		{

		}

		redirect(SITE_AREA .'/developer/starter');
	}

	//--------------------------------------------------------------------




}