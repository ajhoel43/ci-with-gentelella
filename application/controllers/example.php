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
		$this->template->set_template('default');
		$this->template->write('header', 'This is Header');
		$this->template->write('title', 'My Simple Template', TRUE);
		$this->template->write_view('content', 'tes/mypage', '', true);

		$this->template->render();
	}

	function form_ex() {
		$this->template->write('header', 'This is Header');
		$this->template->write('title', 'Gentelella Template', TRUE);
		$this->template->write_view('sidenavs', 'template/default_sidenavs.php', true);
		$this->template->write_view('navs', 'template/default_topnavs.php', true);
		$this->template->write_view('content', 'tes/form', '', true);

		$this->template->render();
	}

	function table_ex() {
		$this->template->write('header', 'This is Header');
		$this->template->write('title', 'Gentelella Template', TRUE);
		$this->template->write_view('sidenavs', 'template/default_sidenavs.php', true);
		$this->template->write_view('navs', 'template/default_topnavs.php', true);
		$this->template->write_view('content', 'tes/form', '', true);

		$this->template->render();

	}
}