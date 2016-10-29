<?php
$comm = 'du -sh /var/log/mining.log';
ob_start();
passthru($comm);
$res = ob_get_clean();
echo prepResult($res);



function prepResult($str){
	$template = array(
		"#033[" => " ",
		"0m"  => " ",
		"30m" => "",
		"35m" => "",
		"34m" => "",
		"96m" => "",
		"94m" => "",
		"91m" => "",
		"\n" => "<br/>"

	);

	foreach($template as $key => $val){
		$str = str_replace($key, $val, $str);
	}

	
	return $str;

}

?>
