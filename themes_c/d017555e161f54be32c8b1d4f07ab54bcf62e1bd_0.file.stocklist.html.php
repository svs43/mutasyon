<?php /* Smarty version 3.1.27, created on 2016-03-14 22:14:25
         compiled from "/var/www/html/mutasyon/themes/default/invoice/stocklist.html" */ ?>
<?php
/*%%SmartyHeaderCode:110075766756e71ba11e92d1_45763124%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd017555e161f54be32c8b1d4f07ab54bcf62e1bd' => 
    array (
      0 => '/var/www/html/mutasyon/themes/default/invoice/stocklist.html',
      1 => 1457205708,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '110075766756e71ba11e92d1_45763124',
  'variables' => 
  array (
    '_add_stock' => 0,
    '_stock_no' => 0,
    '_stock_name' => 0,
    '_price_out' => 0,
    'stocks' => 0,
    's' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56e71ba11f52f5_58731268',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56e71ba11f52f5_58731268')) {
function content_56e71ba11f52f5_58731268 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '110075766756e71ba11e92d1_45763124';
?>
<div class="collapse topwind" id="stocklist">
  <div>
      <div style="padding:15px">
	  <button type="button" class="close" id="closestl" data-toggle="collapse" href="#stocklist"><span aria-hidden="true">×</span></button>
	  <h4 class="headers" style=""><?php echo $_smarty_tpl->tpl_vars['_add_stock']->value;?>
</h4>
	  <div class="col-sm-12">
		  <div class="row">
			      <form action="#" method="get">
				  <div class="input-group">
				      <input class="form-control" id="system-search" name="q" placeholder="Search for" required>
				      <span class="input-group-btn">
					  <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
				      </span>
				  </div>
			      </form>
			  </div>
		  <div class="row">
			  <table class="table table-list-search">
				      <thead>
					  <tr>
					      <th style="width:30%"><?php echo $_smarty_tpl->tpl_vars['_stock_no']->value;?>
</th>
					      <th style="width:60%"><?php echo $_smarty_tpl->tpl_vars['_stock_name']->value;?>
</th>
					      <th style="width:10%"><?php echo $_smarty_tpl->tpl_vars['_price_out']->value;?>
</th>
					  </tr>
				      </thead>
				      
				      <tbody>
					      <?php
$_from = $_smarty_tpl->tpl_vars['stocks']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['s'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['s']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['s']->value) {
$_smarty_tpl->tpl_vars['s']->_loop = true;
$foreach_s_Sav = $_smarty_tpl->tpl_vars['s'];
?>
					      <tr style="cursor:pointer">
						      <td style="font-size:12px" class="cfsp"><?php echo $_smarty_tpl->tpl_vars['s']->value['stock_no'];?>
</td>
						      <td style="font-size:12px"><?php echo $_smarty_tpl->tpl_vars['s']->value['stock_name'];?>
</td>
						      <td style="font-size:12px"><?php echo $_smarty_tpl->tpl_vars['s']->value['stock_price_out'];?>
</td>
					      </tr>
					      <?php
$_smarty_tpl->tpl_vars['s'] = $foreach_s_Sav;
}
?>
				      </tbody>
				      
				  </table>   
		  </div>
	  </div>
	</div>
  </div>
</div><?php }
}
?>