<?php if(!defined("VAL_YES")){ die('nope'); } ?>

<?php 

include('_include_EditDialog.php');

$d = 'f/_d/';

if(isset($_GET['sub'])) 
{
	$f = $d . '_dialog_' . $_GET['sub'] . '.php';
	if(file_exists($f))
	{
		if($_GET['sub'] == 'DIALOG_STYLE_TABLIST')
		{
			echo 'No autorized';
			return;
		}
		include($f);

		editDialogShow();
		return;
	}
}

$dialogs = array(
	'DIALOG_STYLE_MSGBOX' => array(
		'_m' => false,
	),
	'DIALOG_STYLE_INPUT' => array(
		'_m' => false,
	),
	'DIALOG_STYLE_LIST' => array(
		'_m' => false,
	),
	'DIALOG_STYLE_PASSWORD' => array(
		'_m' => false,
	),
	'DIALOG_STYLE_TABLIST' => array(
		'_m' => true,
	)
);

foreach ($dialogs as $key => $value) 
{
	?>
	<div class="dial_before">

		<?php if($value['_m'] == true): ?>
			<div style="opacity: .7; background: #f6f9fa; border: 1px solid #ccc; padding: 5px; color: #000;">
		<?php endif; ?>
		<h2><?php echo $key; ?> <?php echo $value['_m'] == true ? '- <strong style="opacity: 1; color: red;">HERRAMIENTA EN MANTEINIMIENTO!</strong>' : ''; ?></h2>
		<?php include($d . '_dialog_' . $key . '.php'); ?>

		<p style="text-align: center; margin: 0 auto;">
			<?php if($value['_m'] == true): ?>
				<a class="_boton-samp bloqueado">Disabled</a>
			<?php else: ?>
				<a class="_boton-samp" href="?lang=<?php echo $_GET['lang'] ?>&q=dialogs&sub=<?php echo $key; ?>"><?php echo _langArray('create_dialog'); ?></a>
			<?php endif; ?>
		</p>

		<?php if($value['_m'] == true): ?>
			</div>
		<?php endif; ?>
	</div>
	<?php
}
?>