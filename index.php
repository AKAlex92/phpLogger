<pre>
<?php
include_once 'class.logger.php';
$log = new PHPLogger();

$log->info("questo è un info");
$log->warning("questo è un warning");
$log->error("questo è un errore");
$log->debug("questo è un debug");
// 
$log->debug(
	array(
		"test" => "prova",
		"ciao" => "valore",
		"cookie" => 12342341,
		"roioreiore" => array(
			"1234" => "ppp",
			3 => "err",
			"---" => 1234.4444,
			"new_array" => array(
				"pene" => "fica",
				"armando" => "nina"
			)
		)
	)
);
?>
</pre>