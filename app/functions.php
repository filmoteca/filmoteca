<?php

/**
 * Borra todo un directorio aunque no esté vacío.
 * @param string $dir
 */
function rrmdir($dir) {
	if (is_dir($dir)) {
		$objects = scandir($dir);
		foreach ($objects as $object) {
			if ($object != "." && $object != "..") {
				if (filetype($dir . "/" . $object) == "dir")
					rmdir($dir . "/" . $object);
				else
					unlink($dir . "/" . $object);
			}
		}
		reset($objects);
		rmdir($dir);
	}
}

/**
 * Regresa la fecha en formato yyyy-mm-dd del lunes de la semana actual.
 * 
 * @return String Cadena de fecha en el formato yyyy-mm-dd del lunes de la semana actual.
 */
function getMondayOfWeek()
{
	$currentDay = date('N') - 1;
	return date('Y-m-d', mktime(0,0,0,date('m'),date('d') - $currentDay, date('Y')));
}

/**
 * Regresa la fecha en formato yyyy-mm-dd del domingo de la semana actual.
 * 
 * @return String Cadena de fecha en el formato yyyy-mm-dd del domingo de la semana actual.
 */
function getSundayOfWeek(){
	$currentDay = 7 - date('N');
	return date('Y-m-d', mktime(0,0,0,date('m'),date('d') + $currentDay, date('Y')));
}