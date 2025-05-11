<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Board extends CI_Controller {
    // 에디터 에러 방지
    public $form_validation;
    public $board;
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */

    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');

        $this->load->model('Board_model', 'board');
    }

	public function index()
	{
		$this->load->view('board/list');
	}

	public function create()
	{
		$this->load->view('board/create');
	}

	public function store() {
		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('contents', 'Contents', 'required');

        if($this->form_validation->run()) {
            // board -> border_model as board
            $this->board->store();
            redirect('/board');
        } else {
            echo '입력 오류';
        }
		
	}

}
