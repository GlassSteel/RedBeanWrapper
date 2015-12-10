<?php

namespace glasteel;

class RedBeanWrapper
{
	public function __call($method,$args){
		return call_user_func_array('RedBeanPHP\R::' . $method, $args);
	}
}