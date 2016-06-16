<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->output->enable_profiler(getenv('APP_DEBUG') ?: FALSE);
		log_message('debug', 'MY_Controller : MY_Controller class loaded');
	}
}