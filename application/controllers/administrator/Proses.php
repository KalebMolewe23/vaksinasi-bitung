<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Proses extends CI_Controller {

  public function __construct()
  {
      parent::__construct();
      // $this->load->library('form_validation');
      $this->load->model('m_daerah');
      is_logged_in();
  }

    public function index(){

      $data['user'] = $this->db->get_where('user', ['email' =>
      $this->session->userdata('email')])->row_array();

      $this->db->select('max(iterasi) as iterasi');
      $data_malaria['it'] = $this->db->get('centroid_temp')->row('iterasi');

      $data_title['title'] = 'Hasil Perhitungan Kmeans';
      $this->load->view('layout/header', $data_title);
      $this->load->view('data/hasil_kmeans', $data_malaria);
      $this->load->view('layout/footer');

    }

}