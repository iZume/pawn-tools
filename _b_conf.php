<?php if(!defined("VAL_YES")){ die('nope'); } ?>

<?php  

if(!isset($_GET['lang']))
{
	$_GET['lang'] = 'en';
}

$file = "language/" . $_GET['lang'] . ".ini";
	
if(!file_exists($file))
{
	$_GET['lang'] = "en";
}

$langArr = parse_ini_file("language/" . $_GET['lang'] . ".ini", TRUE);

function _langArray($lang)
{
	global $langArr;

	$txt = 'Undefinied';
	if(isset($langArr[$lang]))
	{	
		$txt = $langArr[$lang];
	}
	return $txt;
}

function printInComillas($var)
{
	print('"' . $var . '"');
}

function removeFirst($url, $varname) {
    return preg_replace('/([?&])'.$varname.'=[^&]+(&|$)/','$1',$url);
}
?>