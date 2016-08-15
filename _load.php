<?php if(!defined("VAL_YES")){ die('nope'); } ?>

<?php  
if(isset($_GET['q'])) 
{
	switch ($_GET['q'])
	{
		case 'dialogs':
		{
			include('e/_page_dialogs.php');
			break;
		}
		case 'label':
		{
			include('f/_l/_CreateDynamicText3D.php');
			break;
		}
		default:
		{
			include('e/_page_default.php');
		}
	}
} 
else
{
	include('e/_page_default.php');
}
?>