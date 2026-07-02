<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggan extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        if(!$this->session->userdata('login'))
        {
            redirect('auth');
        }

        $this->load->model('M_Pelanggan');
    }

    public function index()
    {
        $data['title'] = 'Data Pelanggan';
        $data['pelanggan'] = $this->M_Pelanggan->get_all();

        $this->load->view('layout/header', $data);
        $this->load->view('pelanggan/index', $data);
        $this->load->view('layout/footer');
    }

    public function tambah()
    {
    $data['title'] = 'Tambah Pelanggan';

    $this->load->view('layout/header',$data);
    $this->load->view('pelanggan/tambah');
    $this->load->view('layout/footer');
    }

    public function simpan()
    {
    $data = array(
        'nama'      => $this->input->post('nama'),
        'email'     => $this->input->post('email'),
        'no_hp'     => $this->input->post('no_hp'),
        'username'  => $this->input->post('username'),
        'password'  => $this->input->post('password')
    );

    $this->M_Pelanggan->insert($data);

    redirect('pelanggan');
    }

    public function edit($id)
    {
    $data['title'] = 'Edit Pelanggan';
    $data['pelanggan'] = $this->M_Pelanggan->get_by_id($id);

    $this->load->view('layout/header',$data);
    $this->load->view('pelanggan/edit',$data);
    $this->load->view('layout/footer');
    }

    public function update()
    {
    $id = $this->input->post('id_pelanggan');

    $data = array(
        'nama'      => $this->input->post('nama'),
        'email'     => $this->input->post('email'),
        'no_hp'     => $this->input->post('no_hp'),
        'username'  => $this->input->post('username'),
        'password'  => $this->input->post('password')
    );

    $this->M_Pelanggan->update($id,$data);

    redirect('pelanggan');
    }

    public function hapus($id)
    {
    $booking = $this->db
                    ->get_where(
                        'booking',
                        ['id_pelanggan'=>$id]
                    )
                    ->result();

    foreach($booking as $b)
    {
        $this->db->delete(
            'pembayaran',
            ['id_booking'=>$b->id_booking]
        );
    }

    $this->db->delete(
        'booking',
        ['id_pelanggan'=>$id]
    );

    $this->db->delete(
        'pelanggan',
        ['id_pelanggan'=>$id]
    );

    redirect('pelanggan');
    }
}
