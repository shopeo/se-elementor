<?php

namespace Shopeo\SeElementor\Widgets;

use Elementor\Widget_Base;

class  SeHelloWidget extends Widget_Base {

	public function get_name() {
		return "hello";
	}

	public function get_title() {
		return "Hello";
	}

	public function get_icon() {
		return "eico-code";
	}

	public function get_categories() {
		return [ "shopeo" ];
	}

	public function get_keywords() {
		return [ "hello", "Hello" ];
	}

	protected function register_controls() {

	}

	public function render() {
		echo "Hello World";
	}
}
