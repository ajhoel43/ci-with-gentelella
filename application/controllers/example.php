<?php 
/**
* 
*/
class Example extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}

	function index() {
	}

	function simple_template() {
		$this->template->write('header', 'This is Header');
		$this->template->write('title', 'My Simple Template', TRUE);
		$this->template->write_view('content', 'tes/mypage', '', true);
		$this->template->render();
	}
}