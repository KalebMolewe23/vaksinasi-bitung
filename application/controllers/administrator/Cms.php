<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cms extends CI_Controller
{

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

    $data['title'] = 'Update Background';

    $this->load->view('layout/header', $data);
    $this->load->view('cms/v_background');
    $this->load->view('layout/footer');
  }
  
  public function update_background(){
    $id = $this->input->post('idbackground');
    $bg_name = $this->input->post('bg_name');
    $bg_color = $this->input->post('bg_color');
    $bg_color_second = $this->input->post('bg_color_second');

    $data = array(
        'idbackground' => $id,
        'bg_name' => $bg_name,
        'bg_color' => $bg_color,
        'bg_color_second' => $bg_color_second,
    );

    $where = array(
        'idbackground' => $id
    );

    $this->m_daerah->update_data($where, $data, 'background');
    $this->session->set_flashdata('message', '<div class="alert-success" role="alert">Data Berhasil Diupdate...</div>');
    redirect('administrator/cms/index');
  }

  public function sosmed(){

    $data['user'] = $this->db->get_where('user', ['email' =>
    $this->session->userdata('email')])->row_array();

    $data['title'] = 'Update Sosial Media';

    $this->load->view('layout/header', $data);
    $this->load->view('cms/v_sosmed');
    $this->load->view('layout/footer');
  }

  public function update_sosmed(){
    $id = $this->input->post('idsosmed');
    $facebook = $this->input->post('facebook');
    $twitter = $this->input->post('twitter');
    $instagram = $this->input->post('instagram');

    $data = array(
        'idsosmed' => $id,
        'facebook' => $facebook,
        'twitter' => $twitter,
        'instagram' => $instagram,
    );

    $where = array(
        'idsosmed' => $id
    );

    $this->m_daerah->update_data($where, $data, 'sosmed');
    $this->session->set_flashdata('message', '<div class="alert-success" role="alert">Data Berhasil Diupdate...</div>');
    redirect('administrator/cms/sosmed');
  }

  public function about(){

    $data['user'] = $this->db->get_where('user', ['email' =>
    $this->session->userdata('email')])->row_array();

    $data['title'] = 'Update About Website';

    $this->load->view('layout/header', $data);
    $this->load->view('cms/v_about');
    $this->load->view('layout/footer');
  }

  public function update_about(){
    $id = $this->input->post('idabout');
    $phone = $this->input->post('phone');
    $email = $this->input->post('email');
    $address = $this->input->post('address');
    $media1 = $this->input->post('media1');
    $media2 = $this->input->post('media2');
    $media3 = $this->input->post('media3');
    $about = $this->input->post('about');

    $data = array(
        'idabout' => $id,
        'phone' => $phone,
        'email' => $email,
        'address' => $address,
        'media1' => $media1,
        'media2' => $media2,
        'media3' => $media3,
        'about' => $about,
    );

    $where = array(
        'idabout' => $id
    );

    $this->m_daerah->update_data($where, $data, 'about');
    $this->session->set_flashdata('message', '<div class="alert-success" role="alert">Data Berhasil Diupdate...</div>');
    redirect('administrator/cms/about');
  }
}