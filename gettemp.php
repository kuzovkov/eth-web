<?php
	$comm = "tail -14 /var/log/gpu-temp.log";
	ob_start();
	passthru($comm);
	$res = ob_get_clean();
	echo procResult($res)	;


	function procResult($str){
		$template = array(
			"\n" => '<br/>'
		);

		foreach($template as $key => $val){
			$str = str_replace($key, $val, $str);
		}

		return  $str;
	
	}

?>
