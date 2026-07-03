<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index()
    {
        $data['title'] = 'FutsalZone';

        $data['lapangan'] = $this->db
                                ->get('lapangan')
                                ->result();

        $this->load->view('home/index', $data);
    }
}