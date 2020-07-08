<?php
$user_id = $_SESSION[base_url().'_logged_in']['id'];
$add = new zea();

$add->init('edit');
$add->setTable('produk_lelang');
$add->setHeading('Produk Lelang');

$add->addInput('produk_id','dropdown');
$add->setLabel('produk_id','Produk');
$add->removeNone('produk_id');
$add->setOptions('produk_id',['None']);
// $add->tableOptions('produk_id','produk','id','nama','user_id = '.$user['id'].' AND status = 2 AND id NOT IN(SELECT produk_id FROM produk_lelang WHERE user_id = '.$user['id'].')');

$add->addInput('user_id','static');
$add->setValue('user_id',$user_id);
$add->setFormName('lelang_edit_form');
$add->setUnique(['produk_id']);
$add->setRequired('All');

$form = new zea();

$form->init('roll');
$form->setTable('produk_lelang');
$form->setHeading('Produk yg Anda Lelang');

$form->setNumbering(true);

$form->addInput('id','plaintext');

$form->addInput('produk_id','dropdown');
$form->setLabel('produk_id','Produk');
if(is_member())
{
	$form->setWhere(' user_id = '.$user_id);
	$form->tableOptions('produk_id','produk','id','nama','user_id = '.$user_id.' AND status = 2');
}else{
	$form->tableOptions('produk_id','produk','id','nama',' status = 2');

	$form->addInput('user_id','dropdown');
	$form->tableOptions('user_id','user','id','username');
	$form->setAttribute('user_id','disabled');
	$form->setLabel('user_id','username');
}
$form->setDelete(true);
$form->setAttribute('produk_id','disabled');
$form->setFormName('lelang_list_form');
$form->setUrl('admin/produk/clear_lelang');

$this->esg->add_js([base_url('assets/js/lelang.js')]);
?>
<a href="<?php echo base_url('admin/produk/lelang') ?>" class="btn btn-sm btn-warning" style="margin-bottom: 10px;"><i class="fa fa-refresh"></i> Refresh</a>
<div class="row">
	<div class="col-md-3">
		<?php $add->form();?>
	</div>
	<div class="col-md-9">
		<?php $form->form();?>
	</div>
</div>
<script>
	var _USERID = <?php echo $user['id'];?>
</script>