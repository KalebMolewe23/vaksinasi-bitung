<?php
class M_daerah extends CI_Model
{
    
    function get_puskesmas()
    {
        return $this->db->get('puskesmas')->result();
    }

    function get_rumahsakit()
    {
        return $this->db->get('area')->result();
    }

    function get_kecamatan()
    {
        return $this->db->get('kecamatan')->result();
    }

    public function get_puskel($id_puskesmas){    
          $this->db->where('id_puskesmas', $id_puskesmas);    
          $result = $this->db->get('kelurahan')->result();
                  
          return $result;   
    }

    public function data_puskesmas(){
        $this->db->select('*');
        $this->db->from('puskesmas');
        return $this->db->get()->result();
    }

    public function data_puskesmas1()
    {
        $this->db->select('*');
        $this->db->from('centroid_temp');
        $this->db->join('data_vaccien', 'data_vaccien.idata_vaccien = centroid_temp.idata_vaccien');
        $this->db->join('area', 'area.idarea = data_vaccien.idarea');
        $this->db->where('iterasi = "2"');
        $this->db->where('c1 = "1"');
        return $this->db->get()->result();
    }

    public function data_puskesmas2()
    {
        $this->db->select('*');
        $this->db->from('centroid_temp');
        $this->db->join('data_vaccien', 'data_vaccien.idata_vaccien = centroid_temp.idata_vaccien');
        $this->db->join('area', 'area.idarea = data_vaccien.idarea');
        $this->db->where('iterasi = "2"');
        $this->db->where('c2 = "1"');
        return $this->db->get()->result();
    }

    public function data_puskesmas3()
    {
        $this->db->select('*');
        $this->db->from('centroid_temp');
        $this->db->join('data_vaccien', 'data_vaccien.idata_vaccien = centroid_temp.idata_vaccien');
        $this->db->join('area', 'area.idarea = data_vaccien.idarea');
        $this->db->where('iterasi = "2"');
        $this->db->where('c3 = "1"');
        return $this->db->get()->result();
    }

    public function edit_area($where,$table){
        return  $this->db->get_where($table,$where);
    }

    public function edit_daerahlaki($where, $table)
    {
        $this->db->join('puskesmas', 'puskesmas.id_puskesmas = data_malarialaki.id_puskesmas');
        return  $this->db->get_where($table, $where);
    }

    public function edit_daerahperempuan($where, $table)
    {
        $this->db->join('puskesmas', 'puskesmas.id_puskesmas = data_malariaperempuan.id_puskesmas');
        return  $this->db->get_where($table, $where);
    }

    public function edit_daerah_malaria($where, $table)
    {
        return  $this->db->get_where($table, $where);
    }

    public function update_data($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }

    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function hapus_daerah($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function datamalaria(){
        $this->db->select('*');
        $this->db->from('data_malaria');
        $this->db->join('puskesmas', 'puskesmas.id_puskesmas = data_malaria.id_puskesmas');
        return $this->db->get()->result();
    }

    public function datamalarial()
    {
        $this->db->select('*');
        $this->db->from('data_malarialaki');
        $this->db->join('puskesmas', 'puskesmas.id_puskesmas = data_malarialaki.id_puskesmas');
        return $this->db->get()->result();
    }

    public function datamalariap()
    {
        $this->db->select('*');
        $this->db->from('data_malariaperempuan');
        $this->db->join('puskesmas', 'puskesmas.id_puskesmas = data_malariaperempuan.id_puskesmas');
        return $this->db->get()->result();
    }

    // function get_puskesmas($id_penduduk)
    // {
    //     //ambil data kabupaten berdasarkan id provinsi yang dipilih
    //     $this->db->where('id_penduduk', $id_penduduk);
    //     $this->db->order_by('jumlah_penduduk', 'ASC');
    //     $query = $this->db->get('data_penduduk');

    //     $output = '<option value="">-- Pilih Puskesmas --</option>';

    //     //looping data
    //     foreach ($query->result() as $row) {
    //         $output .= '<option value="' . $row->id_penduduk . '">' . $row->jumlah_penduduk . '</option>';
    //     }
    //     //return data kabupaten
    //     return $output;
    // }

    function selectdata($where = '')
    {
        return $this->db->query("select * from $where;");
    }

    function zhijau(){
        $this->db->select('*');
        $this->db->from('centroid_temp');
        $this->db->join('data_vaccien', 'data_vaccien.idata_vaccien = centroid_temp.idata_vaccien');
        $this->db->join('area', 'area.idarea = data_vaccien.idarea');
        $this->db->where('iterasi = "2"');
        $this->db->where('c3 = "1"');
        return $this->db->get()->result();
    
    }

    function zkuning(){
        $this->db->select('*');
        $this->db->from('centroid_temp');
        $this->db->join('data_vaccien', 'data_vaccien.idata_vaccien = centroid_temp.idata_vaccien');
        $this->db->join('area', 'area.idarea = data_vaccien.idarea');
        $this->db->where('iterasi = "2"');
        $this->db->where('c2 = "1"');
        return $this->db->get()->result();
    }

    function zmerah()
    {
        $this->db->select('*');
        $this->db->from('centroid_temp');
        $this->db->join('data_vaccien', 'data_vaccien.idata_vaccien = centroid_temp.idata_vaccien');
        $this->db->join('area', 'area.idarea = data_vaccien.idarea');
        $this->db->where('iterasi = "2"');
        $this->db->where('c1 = "1"');
        return $this->db->get()->result();
    }

    public function total_vaksin1(){
        return $this->db->query("SELECT SUM(not_vaccine1) as total, SUM(population) as totalp FROM data_vaccien");
    }

    public function total_vaksin2(){
        return $this->db->query("SELECT SUM(not_vaccine2) as total, SUM(population) as totalp FROM data_vaccien");
    }

    public function total_vaksin3(){
        return $this->db->query("SELECT SUM(not_vaccine3) as total, SUM(population) as totalp FROM data_vaccien");
    }

    function graph()
    {
        $query = "SELECT COUNT(*) AS total, predikat FROM hasil
                    GROUP BY predikat ORDER BY predikat DESC";

        $result = $this->db->query($query)->result_array();
        return $result;
    }

    function graph_laki()
    {
        $query = "SELECT COUNT(*) AS total_laki, predikat FROM hasil_laki
                    GROUP BY predikat ORDER BY predikat DESC";

        $result = $this->db->query($query)->result_array();
        return $result;
    }

    function graph_perempuan()
    {
        $query = "SELECT COUNT(*) AS total_perempuan, predikat FROM hasil_perempuan
                    GROUP BY predikat ORDER BY predikat DESC";

        $result = $this->db->query($query)->result_array();
        return $result;
    }

    public function getData(){
		$this->db->select('*');
		return $this->db->get('data_malaria_baru')->result_array();
	}

    public function getData_2020(){
		$this->db->select('*');
		return $this->db->get('data_malaria_baru_2020')->result_array();
	}

    public function insert($data){
		$insert = $this->db->insert_batch('data_malaria_baru', $data);
		if($insert){
			return true;
		}
	}

    public function insert_2020($data){
		$insert = $this->db->insert_batch('data_malaria_baru_2020', $data);
		if($insert){
			return true;
		}
	}

    public function hapus_malaria($checked_id)
	{
		$this->db->where_in('idmalaria_baru', $checked_id);
		return $this->db->delete('data_malaria_baru');
	}

    public function hapus_area($checked_id)
	{
		$this->db->where_in('idarea', $checked_id);
		return $this->db->delete('area');
	}

    public function hapus_vaksinasi($checked_id)
	{
		$this->db->where_in('idata_vaccien', $checked_id);
		return $this->db->delete('data_vaccien');
	}

    public function hapus_data_reksadana($checked_id)
	{
		$this->db->where_in('idreksadana', $checked_id);
		return $this->db->delete('reksadana');
	}

    public function hapus_malaria_2020($checked_id)
	{
		$this->db->where_in('idmalaria_baru2020', $checked_id);
		return $this->db->delete('data_malaria_baru_2020');
	}

}
