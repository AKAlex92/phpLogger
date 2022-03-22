<?php
include_once 'class.utils.php';


class PHPLogger {
	function __construct($onFile = true, $dateFormat = "d/m/Y H:i:s", $logDir = "logs/") {
		echo "Initialiting class " . __CLASS__;


		$this->onFile = $onFile;
		$this->dateFormat = $dateFormat;
		$this->logDir = $this->createDir($logDir);
		if($this->onFile === true) {
			$this->logPath = $this->getLogPath();
		}

		$this->util = new Utility($this); // https://stackoverflow.com/questions/15444215/php-passing-an-instance-of-a-class-to-another-class
	}

	function __destruct() {
		echo "Destroying class " . __CLASS__;
		// $this->close();
	}

	function createDir($d) {
		if(!is_dir($d) && !file_exists($d)) {
			if(!mkdir($d, 0777)) {
				die("Error while creating logs directory " . $d);
			}
		}
		return $d;
	}

	function getLogPath() {
		$basefilename = "logger-" . date("Ymd") . ".log";
		$filename = $this->logDir . $basefilename;
		return $filename;
	}

	function getBaseString($level) {
		$allowedLevels = array('info', 'warning', 'error', 'debug');
		if(in_array($level, $allowedLevels)) {
			$arr_string = array(
				"[ " . date($this->dateFormat) . " ]",
				"[ " . basename($_SERVER['PHP_SELF']) . " ]",
				"[ " . strtoupper($level) . " ]"
			);
			return implode(" ", $arr_string) . "\t";
		}
		else {
			die("Level not defined");
		}
	}

	function write2Output($string, $overrideStdout = false) {
		$success = false;
		if($this->onFile && !$overrideStdout) {
			$fp = fopen($this->logPath, 'a+');
			$success = fwrite($fp, $string . PHP_EOL);
			fclose($fp);
		}
		else {
			$fp = fopen("php://output", "w+");
			$success = fwrite($fp, $string . PHP_EOL);
			fclose($fp);
		}

		if(!$success) {
			die("Error while writing string");
		}
	}

	function modelMessage($level, $str) {
		if(!is_array($str)) {
			$str2Log = $str;
			$this->write2Output($this->getBaseString($level) . $str2Log);
		}
		else {
			foreach($str as $key => $val) {
				// $str2Log = "Variable: " . $key . " => " . $val;
				// $this->write2Output($this->getBaseString($level) . $str2Log);
				foreach($str as $key => $val) {
					$str2Log = $this->util->test_print2( array($key => $val), $level);
				}
			}
		}
	}

	function info($str) {
		$this->modelMessage('info', $str);
	}

	function warning($str) {
		$this->modelMessage('warning', $str);
	}

	function error($str) {
		$this->modelMessage('error', $str);
	}

	function debug($str) {
		$this->modelMessage('debug', $str);
	}

	function close() {
		$this->write2Output(str_repeat("-", 120));
	}




}
?>