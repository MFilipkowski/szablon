<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-20 14:05:49
  from '/var/www/html/modules/ps_googleanalytics/views/templates/hook/ga_tag.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fdf4c2dd3b182_45826498',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5df960c2caf6a2d86fe9c2950bc1f4bffdb62357' => 
    array (
      0 => '/var/www/html/modules/ps_googleanalytics/views/templates/hook/ga_tag.tpl',
      1 => 1608466716,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fdf4c2dd3b182_45826498 (Smarty_Internal_Template $_smarty_tpl) {
if ((!empty($_smarty_tpl->tpl_vars['jsCode']->value))) {?>
    
    <?php echo '<script'; ?>
 type="text/javascript">
        document.addEventListener('DOMContentLoaded', function() {
            var MBG = GoogleAnalyticEnhancedECommerce;
            MBG.setCurrency('<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['isoCode']->value,'htmlall','UTF-8' ));?>
');
            <?php echo $_smarty_tpl->tpl_vars['jsCode']->value;?>

        });
    <?php echo '</script'; ?>
>
    
<?php }?>

<?php if (($_smarty_tpl->tpl_vars['jsState']->value != 1 && $_smarty_tpl->tpl_vars['isBackoffice']->value === true)) {?>
    
    <?php echo '<script'; ?>
 type="text/javascript">
        ga('send', 'pageview');
    <?php echo '</script'; ?>
>
    
<?php }
}
}