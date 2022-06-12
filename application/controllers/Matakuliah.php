<?php
class Matakuliah extends CI_Controller {
    public function index() {
        $this->load->model('Matakuliah_model');
        $matakuliah = $this->Matakuliah_model->getAll();
        $data['matakuliah'] = $matakuliah;
        
        $this->load->view('layout/header');
        $this->load->view('matakuliah/index',$data);
        $this->load->view('layout/footer');
    } 
    public function form(){
        $this->load->view('layout/header');
        $this->load->view('matakuliah/form');
        $this->load->view('layout/footer');
    }
    public function save(){
        // akses ke model matakuliah
        $this->load->model('Matakuliah_model', 'matakuliah');
        $_nama = $this->input->post('nama');
        $_sks = $this->input->post('sks');
        $_kode = $this->input->post('kode');

        $data_matakuliah['nama'] = $_nama;
        $data_matakuliah['sks'] = $_sks;
        $data_matakuliah['kode'] = $_kode;

        if((!empty($_idedit))){
            $data_matakuliah['id'] = $_idedit;
            $this->matakuliah->update($data_matakuliah);
        }else{
            $this->matakuliah->simpan($data_matakuliah);
        }
        redirect('matakuliah','refresh');
    }
    public function edit($id){
        $this->load->model('Matakuliah_model','matakuliah');
        $obj_matakuliah = $this->matakuliah->getById($id);
        $data['obj_matakuliah'] = $obj_matakuliah;
        $this->load->view('layout/header');
        $this->load->view('matakuliah/edit', $data);
        $this->load->view('layout/footer');
    }
    public function delete($id){
        $this->load->model('Matakuliah_model','matakuliah');
        $data_matakuliah['id'] = $id;
        $this->matakuliah->delete($data_matakuliah);
        redirect('matakuliah','refresh');
    }
    public function __construct()
    {
        parent::__construct();
        if(!$this->session->userdata('username')){
            redirect('/login');
        }
    }
}
?>