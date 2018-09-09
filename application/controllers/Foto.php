<?php defined('BASEPATH') or exit('No direct script access allowed');

class Foto extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->model('model_foto');
    }

    public function index()
    {
        $data['foto'] = $this->model_foto->get()->result_array();
        $data['jumlah'] = $this->model_foto->get()->num_rows();
        $this->load->view('foto/index', $data);
    }

    public function add()
    {
        $this->load->view('foto/add');
    }

    public function upload()
    {
        $image = '';

        $this->load->helper('file');
        $config['upload_path'] = './upload/foto/'; //folder uploadnya
        $config['allowed_types'] = 'jpg|png|jpeg'; //ini tipe file nya
        $config['max_size'] = '5120';
        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if ($this->upload->do_upload('foto')) {
            $file = $this->upload->data();

            $namafile = 'upload/foto/' . $file['file_name'];
        }

        $dataFoto = array('nama' => $namafile, );

        $this->model_foto->insert($dataFoto);

        redirect("foto", "refresh");

    }

}   