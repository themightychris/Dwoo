<?php

/**
 * TOCOM
 *
 * This software is provided 'as-is', without any express or implied warranty.
 * In no event will the authors be held liable for any damages arising from the use of this software.
 *
 * This file is released under the LGPL
 * "GNU Lesser General Public License"
 * More information can be found here:
 * {@link http://www.gnu.org/copyleft/lesser.html}
 *
 * @author     Jordi Boggiano <j.boggiano@seld.be>
 * @copyright  Copyright (c) 2008, Jordi Boggiano
 * @license    http://www.gnu.org/copyleft/lesser.html  GNU Lesser General Public License
 * @link       http://dwoo.org/
 * @version    0.3.3
 * @date       2008-03-19
 * @package    Dwoo
 */
function DwooPlugin_array_compile(DwooCompiler $compiler, array $rest=array())
{
	$out = array();
	foreach($rest as $k=>$v)
		if(is_numeric($k))
			$out[] = $k.'=>'.$v;
		else
			$out[] = '"'.$k.'"=>'.$v;

	return 'array('.implode(', ', $out).')';
}

?>