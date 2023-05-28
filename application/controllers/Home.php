<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // $this->load->library('form_validation');
        $this->load->model('m_daerah');
        // is_logged_in(); 
    }

    public function index(){
        $data['title'] = "Informasi Malaria";

        $data_centroid['vaksin'] = $this->m_daerah->total_vaksin1()->result();
        $data_centroid['vaksin1'] = $this->m_daerah->total_vaksin2()->result();
        $data_centroid['vaksin2'] = $this->m_daerah->total_vaksin3()->result();

        $data_centroid['bitung'] = $this->m_daerah->zkuning();
        $data_centroid['bitung2'] = $this->m_daerah->zmerah();
        $data_centroid['bitung3'] = $this->m_daerah->zhijau();
        
        $data_centroid['bitungdata'] = $this->m_daerah->data_puskesmas1();
        $data_centroid['bitungdata1'] = $this->m_daerah->data_puskesmas2();
        $data_centroid['bitungdata2'] = $this->m_daerah->data_puskesmas3();
        $data_centroid['area'] = $this->m_daerah->get_rumahsakit();

        $this->load->view('user/layout/header', $data);
        $this->load->view('user/home', $data_centroid);
        $this->load->view('user/layout/footer');
    }
}