<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataLapangan extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        if(!$this->session->userdata('login'))
        {
            redirect('auth');
        }

        $this->load->model('M_Lapangan');
    }

    public function index()
    {
        $data['title'] = 'Data Lapangan';
        $data['lapangan'] = $this->M_Lapangan->get_all();

        $this->load->view('layout/header', $data);
        $this->load->view('lapangan/index', $data);
        $this->load->view('layout/footer');
    }

    public function tambah()
    {
    $data['title'] = 'Tambah Lapangan';

    $this->load->view('layout/header', $data);
    $this->load->view('lapangan/tambah');
    $this->load->view('layout/footer');
    }

    public function simpan()
    {
    $data = array(
        'nama_lapangan'  => $this->input->post('nama_lapangan'),
        'jenis_lapangan' => $this->input->post('jenis_lapangan'),
        'harga_sewa'     => $this->input->post('harga_sewa'),
        'status'         => $this->input->post('status')
    );

    $this->M_Lapangan->insert($data);

    redirect('datalapangan');
    }

    public function edit($id)
    {
    $data['title'] = 'Edit Lapangan';
    $data['lapangan'] = $this->M_Lapangan->get_by_id($id);

    $this->load->view('layout/header', $data);
    $this->load->view('lapangan/edit', $data);
    $this->load->view('layout/footer');
    }

    public function update()
    {
    $id = $this->input->post('id_lapangan');

    $data = array(
        'nama_lapangan'  => $this->input->post('nama_lapangan'),
        'jenis_lapangan' => $this->input->post('jenis_lapangan'),
        'harga_sewa'     => $this->input->post('harga_sewa'),
        'status'         => $this->input->post('status')
    );

    $this->M_Lapangan->update($id, $data);

    redirect('datalapangan');
    }

    public function hapus($id)
    {
    $this->M_Lapangan->delete($id);

    redirect('datalapangan');
    }
}
