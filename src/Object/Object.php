<?php

/**
 *
 * AdiPHP : Rapid Development Tools (http://adilab.net)
 * Copyright (c) Adrian Zurkiewicz
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @version     0.1
 * @copyright   Adrian Zurkiewicz
 * @link        http://adilab.net
 * @license     http://www.opensource.org/licenses/mit-license.php MIT License
 */

namespace Adi\Object;

/**
 * Base functionality for PHP objects
 *
 * @author adrian
 */
abstract class Object {

	
	/**
	 * Returns instance of Object class
	 * 
	 * @return Object
	 */
	static protected function __create() {

		$class = new \ReflectionClass(get_called_class());
		
		return $class->newInstanceArgs(func_get_args());
	}	
	
}
