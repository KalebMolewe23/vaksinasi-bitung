<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // $this->load->library('form_validation');
        $this->load->model('m_daerah');
        $this->load->library(array('session'));
        is_logged_in();
    }

    public function index(){

        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->db->join('area', 'area.idarea = reksadana.idarea');
        $data_reksadana['data'] = $this->db->get('reksadana');

        $data['title'] = "Data Daerah Reksadana";

        $this->load->view('layout/header', $data);
        $this->load->view('data/data_reksadana', $data_reksadana);
        $this->load->view('layout/footer');
    }

    public function area(){

        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data_vaksinasi['area'] = $this->db->get('area');

        // echo "<pre>";
        // var_dump($data_vaksinasi['area']->result());
        // die();

        $data['title'] = "Data Area Bitung";

        $this->load->view('layout/header', $data);
        $this->load->view('data/dataarea', $data_vaksinasi);
        $this->load->view('layout/footer');
    }
    
    //add data area
    public function tambah_dataarea(){

        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['title'] = "Tambah Data Area";

        $this->load->view('layout/header', $data);
        $this->load->view('data/tambah_area');
        $this->load->view('layout/footer');
    }

    //proses tambah data puskesmas
    public function tambah_area(){
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('area_name', 'area_name', 'required');
        $this->form_validation->set_rules('geojson', 'geojson', 'required');
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Tambah Data Bitung';
            $wilayah['area'] = $this->db->get('area');
            $this->load->view('layout/header', $data);
            $this->load->view('data/tambah_area', $wilayah);
            $this->load->view('layout/footer');
        } else {
            $datavaksinasi = [
                'area_name'    => $this->input->post('area_name'),
                'geojson'           => $this->input->post('geojson'),
            ];

            $this->db->insert('area', $datavaksinasi);
            $this->session->set_flashdata('message', '<div class="alert-success" role="alert">Selamat!!! Data Berhasil Ditambah.</div>');
            redirect('administrator/data/area');
        }
    }

    //delete data puskesmas
    public function deleteall(){
        if(isset($_POST['deleteEmpBtn'])){
            if(!empty($this->input->post("checkbox_value"))){
                $checkedEmp = $this->input->post('checkbox_value');
                $checked_id = [];
                foreach($checkedEmp as $row){
                    array_push($checked_id, $row);
                }
                $this->m_daerah->hapus_area($checked_id);
                $this->session->set_flashdata('status', '<span class="glyphicon glyphicon-ok"></span> Data Berhasil Di Hapus');
                redirect('administrator/data/area');
            }else{
                $this->session->set_flashdata('status', '<span class="glyphicon glyphicon-ok"></span> Data Berhasil Di Hapus');
                redirect('administrator/data/area');
            }
        }
    }

    // tampilan edit area bitung

    public function edit_area($id)
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['title'] = "Edit Data Area";

        $where = array('idarea' => $id);
        $data['title'] = 'Edit Data Area';
        $ewilayah['puskesmas'] = $this->m_daerah->edit_area($where, 'area')->result();

        $this->load->view('layout/header', $data);
        $this->load->view('data/edit_area', $ewilayah);
        $this->load->view('layout/footer');
    }

    public function update_area(){
        $id = $this->input->post('idarea');
        $area_name = $this->input->post('area_name');
        $geojson = $this->input->post('geojson');

        $data = array(
            'idarea' => $id,
            'area_name' => $area_name,
            'geojson' => $geojson,
        );

        $where = array(
            'idarea' => $id
        );

        $this->m_daerah->update_data($where, $data, 'area');
        $this->session->set_flashdata('message', '<div class="alert-success" role="alert">Data Berhasil Diupdate...</div>');
        redirect('administrator/data/area');
    }
    
    //get data vaksinasi
    public function data_vaksinasi(){
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->db->join('area','area.idarea = data_vaccien.idarea');
        $data_vaksinasi['data_vaccine'] = $this->db->get('data_vaccien');

        // echo "<pre>";
        // var_dump($data_vaksinasi['area']->result());
        // die();

        $data['title'] = "Data Vaksinasi Bitung";

        $this->load->view('layout/header', $data);
        $this->load->view('data/data_vaksinasi', $data_vaksinasi);
        $this->load->view('layout/footer');
    }

    //add data vaksinasi
    public function tambah_vaksinasi(){

        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['title'] = "Tambah Data Vaksinasi";

        $data_urban['data'] = $this->db->get('area');

        $this->load->view('layout/header', $data);
        $this->load->view('data/tambah_datavaksinasi', $data_urban);
        $this->load->view('layout/footer');
    }

    //proses tambah vaksinasi
    public function save_vaksinasi(){
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('idarea', 'idarea', 'required');
        $this->form_validation->set_rules('population', 'population', 'required');
        $this->form_validation->set_rules('minors1', 'minors1', 'required');
        $this->form_validation->set_rules('elderly1', 'elderly1', 'required');
        $this->form_validation->set_rules('not_vaccine1', 'not_vaccine1', 'required');
        $this->form_validation->set_rules('vaccien_1', 'vaccine_1', 'required');
        $this->form_validation->set_rules('minors2', 'minors2', 'required');
        $this->form_validation->set_rules('elderly2', 'elderly2', 'required');
        $this->form_validation->set_rules('not_vaccine2', 'not_vaccine2', 'required');
        $this->form_validation->set_rules('vaccien_2', 'vaccine_2', 'required');
        $this->form_validation->set_rules('minors3', 'minors3', 'required');
        $this->form_validation->set_rules('elderly3', 'elderly3', 'required');
        $this->form_validation->set_rules('not_vaccine3', 'not_vaccine3', 'required');
        $this->form_validation->set_rules('vaccien_3', 'vaccine_3', 'required');
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Tambah Data Vaksinasi';
            $wilayah['area'] = $this->db->get('area');
            $this->load->view('layout/header', $data);
            $this->load->view('data/tambah_datavaksinasi', $wilayah);
            $this->load->view('layout/footer');
        } else {
            $datavaksinasi = [
                'idarea'                => $this->input->post('idarea'),
                'population'            => $this->input->post('population'),
                'minors1'               => $this->input->post('minors1'),
                'elderly1'              => $this->input->post('elderly1'),
                'not_vaccine1'          => $this->input->post('not_vaccine1'),
                'vaccien_1'             => $this->input->post('vaccien_1'),
                'minors2'               => $this->input->post('minors2'),
                'elderly2'              => $this->input->post('elderly2'),
                'not_vaccine2'          => $this->input->post('not_vaccine2'),
                'vaccien_2'             => $this->input->post('vaccien_2'),
                'minors3'               => $this->input->post('minors3'),
                'elderly3'              => $this->input->post('elderly3'),
                'not_vaccine3'          => $this->input->post('not_vaccine3'),
                'vaccien_3'             => $this->input->post('vaccien_3'),
            ];

            $this->db->insert('data_vaccien', $datavaksinasi);
            $this->session->set_flashdata('message', '<div class="alert-success" role="alert">Selamat!!! Data Berhasil Ditambah.</div>');
            redirect('administrator/data/data_vaksinasi');
        }
    }

    // form edit vaksinasi
    public function edit_vaksinasi($id){
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['title'] = "Edit Data Vaksinasi";

        $where = array('idata_vaccien' => $id);
        $data['title'] = 'Edit Data Vaksinasi';
        $ewilayah['kelurahan'] = $this->m_daerah->edit_area($where, 'data_vaccien')->result();
        $ewilayah['data'] = $this->db->get('area');

        $this->load->view('layout/header', $data);
        $this->load->view('data/edit_vaksinasi', $ewilayah);
        $this->load->view('layout/footer');       
    }

    // proses update vaksinasi
    public function update_vaksinasi(){
        $id                    = $this->input->post('idata_vaccien');
        $idarea                = $this->input->post('idarea');
        $population            = $this->input->post('population');
        $minors1               = $this->input->post('minors1');
        $elderly1              = $this->input->post('elderly1');
        $not_vaccine1          = $this->input->post('not_vaccine1');
        $vaccien_1             = $this->input->post('vaccien_1');
        $minors2               = $this->input->post('minors2');
        $elderly2              = $this->input->post('elderly2');
        $not_vaccine2          = $this->input->post('not_vaccine2');
        $vaccien_2             = $this->input->post('vaccien_2');
        $minors3               = $this->input->post('minors3');
        $elderly3              = $this->input->post('elderly3');
        $not_vaccine3          = $this->input->post('not_vaccine3');
        $vaccien_3             = $this->input->post('vaccien_3');

        $data = array(
            'idata_vaccien'         => $id,
            'idarea'                => $idarea,
            'population'            => $population,
            'minors1'               => $minors1,
            'elderly1'              => $elderly1,
            'not_vaccine1'          => $not_vaccine1,
            'vaccien_1'             => $vaccien_1,
            'minors2'               => $minors2,
            'elderly2'              => $elderly2,
            'not_vaccine2'          => $not_vaccine2,
            'vaccien_2'             => $vaccien_2,
            'minors3'               => $minors3,
            'elderly3'              => $elderly3,
            'not_vaccine3'          => $not_vaccine3,
            'vaccien_3'             => $vaccien_3,
        );

        $where = array(
            'idata_vaccien' => $id
        );

        $this->m_daerah->update_data($where, $data, 'data_vaccien');
        $this->session->set_flashdata('message', '<div class="alert-success" role="alert">Data Berhasil Diupdate...</div>');
        redirect('administrator/data/data_vaksinasi');
    }

    //delete data vaksinasi
    public function deleteall_vaksinasi(){
        if(isset($_POST['deleteEmpBtn'])){
            if(!empty($this->input->post("checkbox_value"))){
                $checkedEmp = $this->input->post('checkbox_value');
                $checked_id = [];
                foreach($checkedEmp as $row){
                    array_push($checked_id, $row);
                }
                $this->m_daerah->hapus_vaksinasi($checked_id);
                $this->session->set_flashdata('status', '<span class="glyphicon glyphicon-ok"></span> Data Berhasil Di Hapus');
                redirect('administrator/data/data_vaksinasi');
            }else{
                $this->session->set_flashdata('status', '<span class="glyphicon glyphicon-ok"></span> Data Berhasil Di Hapus');
                redirect('administrator/data/data_vaksinasi');
            }
        }
    }
}