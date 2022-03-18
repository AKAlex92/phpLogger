<?php
class Utility {
	function __construct($loggerClass)
	{
		$this->logClass = $loggerClass; // import logger class for methods and attributes
	}

	function __destruct()
	{
		
	}

	function test_print2($arr, $level, $keyArray = "", $actualBuffer = "") {
		// $keyArray, $actualBuffer used only in recursive mode
		$buff = "";
		( isset($actualBuffer) && $actualBuffer != "" ? $buff .= $actualBuffer : $buff = "" );
		$isFromArray = (isset($keyArray) && $keyArray != "" ? true : false );

		foreach($arr as $key => $val) {
			if(!is_array($val)) {
				$str2Log = "Variable" . ($isFromArray === true ? " of array " . $keyArray : "") . " : " . $key . " => " . $val;
				unset($arr[$key]);
				// if($isFromArray === true ? $buff .= $str2Log : return $str2Log );
				/*
				if(!$isFromArray) {
					return $str2Log;
				}
				else {
					$buff .= $str2Log . "\n";
				}
				*/
				$this->logClass->write2Output($this->logClass->getBaseString($level) . $str2Log);
			}
			else {
				$buff = $this->test_print2($arr[$key], $level, $key, $buff);
			}
		}
		return $buff;
	}
}



?>