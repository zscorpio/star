<?php
class Index extends CI_Controller {
	function __construct()
	{
		parent::__construct();
	}
	
	function add_shop()
	{
		$data['page_title']='添加店铺';
		$this->load->view('header',$data);
		$this->load->view('add_shop');
		$this->load->view('sidebar');
		$this->load->view('footer');		
	}
	
	function all_shop()
	{
		$data['page_title']='全部店铺';
		$this->load->view('header',$data);
		$this->load->view('all_shop');
		$this->load->view('sidebar');
		$this->load->view('footer');			
	}
	
	function add_food()
	{
		$data['page_title']='添加食品';
		$this->load->view('header',$data);
		$this->load->view('add_food');
		$this->load->view('sidebar');
		$this->load->view('footer');		
	}
	
}	