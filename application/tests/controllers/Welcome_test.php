<?php
/**
 * Part of ci-phpunit-test
 *
 * @author     Kenji Suzuki <https://github.com/kenjis>
 * @license    MIT License
 * @copyright  2015 Kenji Suzuki
 * @link       https://github.com/kenjis/ci-phpunit-test
 */

class Welcome_test extends TestCase
{
	public function test_index()
	{
		$this->data['unit_test'] = "Unit Test";
		$this->_render_page('welcome_message.tpl', $this->data);
	}

	function test_render_page($view, $data=null, $render=false)
	{
		$this->viewdata = (empty($data)) ? $this->data: $data;
		$view_html = $this->smarty->view($view, $this->viewdata, $render);
		if (!$render) return $view_html;
	}
}
