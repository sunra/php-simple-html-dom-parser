<?php

namespace Sunra\PhpSimple;

define('SIMPLEHTMLDOM_VERSION', '1_8_1');
require __DIR__.DIRECTORY_SEPARATOR.'simplehtmldom_'.SIMPLEHTMLDOM_VERSION.DIRECTORY_SEPARATOR.'simple_html_dom.php';

class HtmlDomParser {

	/**
	 * @return \simplehtmldom_{SIMPLEHTMLDOM_VERSION}\simple_html_dom
	 */
	static public function file_get_html() {
		return call_user_func_array ( '\file_get_html' , func_get_args() );
	}

	/**
	 * get html dom from string
	 * @return \simplehtmldom_{SIMPLEHTMLDOM_VERSION}\simple_html_dom
	 */
	static public function str_get_html() {
		return call_user_func_array ( '\str_get_html' , func_get_args() );
	}
}

