<?php
class Index extends CI_Controller {
	function __construct()
	{
		parent::__construct();
	}
	
	function add_shop()
	{
		$data['page_title']='添加店铺 - star后台';
		$this->load->view('admin/header',$data);
		$this->load->view('admin/add_shop');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/footer');		
	}
	
	function all_shop()
	{
		$data['page_title']='全部店铺 - star后台';
		$this->load->view('admin/header',$data);
		$this->load->view('admin/all_shop');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/footer');			
	}
	
	function edit_shop()
	{
		$data['page_title']='修改店铺 - star后台';
		$this->load->view('admin/header',$data);
		$this->load->view('admin/edit_shop');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/footer');			
	}
	
	function add_food()
	{
		$data['page_title']='添加食品 - star后台';
		$this->load->view('admin/header',$data);
		$this->load->view('admin/add_food');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/footer');		
	}
	
	function all_food()
	{
		$data['page_title']='全部食品 - star后台';
		$this->load->view('admin/header',$data);
		$this->load->view('admin/all_food');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/footer');			
	}
	
	function edit_food()
	{
		$data['page_title']='修改食品 - star后台';
		$this->load->view('admin/header',$data);
		$this->load->view('admin/edit_food');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/footer');			
	}	
	
	function add_print()
	{
		$data['page_title']='添加打印店 - star后台';
		$this->load->view('admin/header',$data);
		$this->load->view('admin/add_print');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/footer');		
	}	
	
	function all_print()
	{
		$data['page_title']='全部打印 - star后台';
		$this->load->view('admin/header',$data);
		$this->load->view('admin/all_print');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/footer');			
	}
	
	function edit_print()
	{
		$data['page_title']='修改打印店信息 - star后台';
		$this->load->view('admin/header',$data);
		$this->load->view('admin/edit_print');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/footer');				
	}
	
}	