<?php  	$stTime = microtime(true);
		$logged = false;
		session_start();
		require 'gen/connector.gen.php';
		require 'cls/lib.cls.php';
		require 'gen/controller.gen.php';
		include $temp; 
		echo (microtime(true)-$stTime);
		echo "<br>Previous Page: ".$prev."<br>Current Page: ".$cur;
?>
