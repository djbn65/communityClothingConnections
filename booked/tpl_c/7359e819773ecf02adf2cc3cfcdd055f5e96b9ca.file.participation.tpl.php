<?php /* Smarty version Smarty-3.1.16, created on 2017-05-05 11:10:11
         compiled from "/home/vol15_8/byethost8.com/b8_19720712/htdocs/booked/tpl/MyAccount/participation.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1871615398590c95d30f18c0-99038067%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7359e819773ecf02adf2cc3cfcdd055f5e96b9ca' => 
    array (
      0 => '/home/vol15_8/byethost8.com/b8_19720712/htdocs/booked/tpl/MyAccount/participation.tpl',
      1 => 1487738810,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1871615398590c95d30f18c0-99038067',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'result' => 0,
    'Reservations' => 0,
    'reservation' => 0,
    'referenceNumber' => 0,
    'Timezone' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_590c95d31a5f46_28866774',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_590c95d31a5f46_28866774')) {function content_590c95d31a5f46_28866774($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ('globalheader.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('cssFiles'=>'css/participation.css'), 0);?>


<div class="page-participation" style="margin-top: 8rem">
	<?php if (!empty($_smarty_tpl->tpl_vars['result']->value)) {?>
		<div><?php echo $_smarty_tpl->tpl_vars['result']->value;?>
</div>
	<?php }?>

	<div id="jsonResult" class="error no-show"></div>

	<div id="participation-box" class="default-box col-xs-12 col-sm-8 col-sm-offset-2">

		<h1><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'OpenInvitations'),$_smarty_tpl);?>
 <span class="label label-default"><?php echo count($_smarty_tpl->tpl_vars['Reservations']->value);?>
</span></h1>

		<ul class="list-unstyled participation">
			<?php  $_smarty_tpl->tpl_vars['reservation'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['reservation']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Reservations']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['invitations']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['reservation']->key => $_smarty_tpl->tpl_vars['reservation']->value) {
$_smarty_tpl->tpl_vars['reservation']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['invitations']['index']++;
?>
				<?php $_smarty_tpl->tpl_vars['referenceNumber'] = new Smarty_variable($_smarty_tpl->tpl_vars['reservation']->value->ReferenceNumber, null, 0);?>
				<li class="actions row<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['invitations']['index']%2;?>
">
					<h3><?php echo $_smarty_tpl->tpl_vars['reservation']->value->Title;?>
</h3>

					<h3><a href="<?php echo Pages::RESERVATION;?>
?<?php echo QueryStringKeys::REFERENCE_NUMBER;?>
=<?php echo $_smarty_tpl->tpl_vars['referenceNumber']->value;?>
" class="reservation"
						   referenceNumber="<?php echo $_smarty_tpl->tpl_vars['referenceNumber']->value;?>
">
							<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['reservation']->value->StartDate->ToTimezone($_smarty_tpl->tpl_vars['Timezone']->value),'key'=>'dashboard'),$_smarty_tpl);?>

							- <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['reservation']->value->EndDate->ToTimezone($_smarty_tpl->tpl_vars['Timezone']->value),'key'=>'dashboard'),$_smarty_tpl);?>
</a></h3>
					<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['referenceNumber']->value;?>
" class="referenceNumber"/>
					<button value="<?php echo InvitationAction::Accept;?>
"
							class="button participationAction"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"ticket-plus.png"),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"Accept"),$_smarty_tpl);?>
</button>
					<button value="<?php echo InvitationAction::Decline;?>
"
							class="button participationAction"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"ticket-minus.png"),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"Decline"),$_smarty_tpl);?>
</button>
				</li>
				<?php }
if (!$_smarty_tpl->tpl_vars['reservation']->_loop) {
?>
				<li class="no-data"><p class="text-muted"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'None'),$_smarty_tpl);?>
</p></li>
			<?php } ?>
		</ul>

	</div>
	<div class="dialog" style="display:none;">

	</div>

	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"admin-ajax-indicator.gif",'id'=>"indicator",'style'=>"display:none;"),$_smarty_tpl);?>


	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"reservationPopup.js"),$_smarty_tpl);?>

	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"participation.js"),$_smarty_tpl);?>


	<script type="text/javascript">

		$(document).ready(function () {

			var participationOptions = {
				responseType: 'json'
			};

			var participation = new Participation(participationOptions);
			participation.initParticipation();
		});

	</script>

</div>
<?php echo $_smarty_tpl->getSubTemplate ('globalfooter.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
