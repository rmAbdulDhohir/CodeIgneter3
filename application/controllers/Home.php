<?php

class Home extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $template = array(
            'menusidebar' => $this->load->view('template/menu','', true),
            'judulkonten' => 'Selamat Datang',
            'konten' => $this->load->view('template/beranda','', true),
        );
        $this->parser->parse('template/halaman', $template);
    }
}
