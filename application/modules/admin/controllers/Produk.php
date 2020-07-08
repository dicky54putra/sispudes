<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->db->cache_off();
		$this->load->model('esg_model');
		$this->load->model('admin_model');
		$this->load->library('esg');
		$this->load->library('ZEA/zea');
		$this->esg_model->init();
	}
	public function edit($status = '')
	{
		$this->load->view('index',['status'=>$status]);
	}
	public function index()
	{
		$this->load->view('index');
	}
	public function list($status = '')
	{
		$this->load->view('index',['status'=>$status]);
	}

	public function clear_list($status = '')
	{
		$this->load->view('produk/list',['status'=>$status]);
	}

	public function get_my_produk($user_id = 0)
	{
		if(!empty($user_id))
		{
			$data = $this->db->query('SELECT * FROM produk WHERE user_id = ? AND status = 2 AND id NOT IN(SELECT produk_id FROM produk_lelang WHERE user_id = ?)',[$user_id,$user_id])->result_array();
			output_json(['status'=>TRUE,'msg'=>'success','data'=>$data]);
		}
	}

	public function lelang()
	{
		$this->load->view('index');
	}
	public function clear_lelang()
	{
		$this->load->view('produk/lelang');
	}
}