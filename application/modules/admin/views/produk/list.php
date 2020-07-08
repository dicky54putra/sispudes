<?php
switch(strtolower($status))
{
	case 'kebutuhan':
		$status_id = 2;
		$status = 'Kebutuhan';
	break;
	case 'produk':
		$status_id = 1;
		$status = 'Produk';
	break;
	default:
		$status_id = 1;
		$status = 'Produk';
		break;
}
if(!empty($status))
{
	$form = new zea();

	$form->init('roll');
	$form->setTable('produk');

	$form->search();

	$form->setHeading($status);

	$form->addInput('id','plaintext');
	$form->setLabel('id','Action');
	$form->setPlaintext('id',[
		base_url('admin/produk/edit?id={id}') => 'Edit',
	]);
	$where = ' status = '.$status_id;
	$form->setDelete(true);
	$form->setNumbering(true);
	$form->addInput('nama','plaintext');
	$form->addInput('lokasi','plaintext');
	$form->addInput('kontak','plaintext');

	if(is_member())
	{
		$where .= ' AND user_id = '.$_SESSION[base_url().'_logged_in']['id'];
		$form->setEdit(true);
	}else{
		$form->addInput('user_id','dropdown');
		$form->tableOptions('user_id','user','id','username');
		$form->setAttribute('user_id','disabled');
		$form->setLabel('user_id','username');
	}
	$form->setWhere($where);

	$form->setEditLink(base_url('admin/produk/edit/'.$status).'?id=','id');
	$form->setUrl('admin/produk/clear_list/'.$status);

	$form->form();
}else{
	msg('halaman yang anda tuju tidak tersedia','danger');
}