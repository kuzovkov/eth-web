<!DOCTYPE html>
<html>
<head>
<title>My Miner (<?php echo $_SERVER['HTTP_HOST'];?>)</title>
<meta charset="utf-8"/>
<script type="text/javascript" src="jquery-3.1.0.min.js"></script>
</head>
<body>
<style>
	table, tr,td,th {border: 1px solid #B9B9B9; color: #B9B9B9; font-family: Verdana; background-color: #333; }
	.h1 {background-color: #666;}
	.h2 {background-color: #888; text-align: center;}
	tr {width: 100%;}
	td {padding: 10px 20px 10px 20px;}
	table {margin: 0px auto 0px auto; width: 100%;}
	.wrap {width: 100%; }
	a {color: #aaa; cursor: ponter; text-decoration: none;}
	a:visited {color: #aaa; text-decoration: none;}
	a:hover {color: #bbb; }
</style>

<div class="wrap">

<table>
	<tr>
		<th class="h1">Miner status (<?php echo $_SERVER['HTTP_HOST'];?>)</th>
	</tr>
	<tr>
		<td class="h2">Miner output</td>
	</tr>
	<tr>
		<td><div id="log"></div></td>
	</tr>
	<tr>
		<td class="h2">GPUs temperatures:</td>
	</tr>
	<tr>
		<td><div id="temp"></div></td>
	</tr>
	<tr>
		<td class="h2">Log file: </td>
	</tr>
	<tr>
		<td><div id="logsz"></div></td>
	</tr>
	<tr>
		<td class="h2">Links: </td>
	</tr>
	<tr> 
		<td>
			<p><a target="_blank" href="http://ethermine.org/miners/fe958918122ac0ef253341667f6f23a03fb2b33a#payouts">Mining Pool</a></p>
			<p><a target="_blank" href="https://etherchain.org/account/0xfe958918122ac0ef253341667f6f23a03fb2b33a#txreceived">Account</a></p>
			<p><a target="_blank" href="https://poloniex.com/exchange#usdt_eth">poloniex.com</a></p>
			<p><a target="_blank" href="https://ethstats.net">ethstats.net</a></p>
			<p><a target="_blank" href="https://btc-e.nz/">btc-e.nz</a></p>
			<p><a target="_blank" href="https://exmo.com/">exmo.com</a></p>
		</td>
	</tr>
</table>
</div>

<script>
	function showLog(){
		$('#log').load('log.php');
		$('#logsz').load('logsz.php');
		$('#temp').load('gettemp.php');
	}

	var interval = setInterval(showLog, 2000); 	
</script>
</body>
</html>
