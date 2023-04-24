<section class="home-section">

    <div class="home-content">
        <i class='bx bx-menu'></i>
        <span class="text"><i class='bx bxs-home'></i> Data Malaria Monokwari(Papua Barat)</span>
    </div>

    <main>
        <div class="container-fluid">
        <a class="btn btn-primary" href="<?php echo base_url(); ?>administrator/kmeans/dbi_lanjut">Proses Selanjutnya</a><br><br>
        <h5>Hasil Centroid</h5><br><br>
        <table class="table table-bordered table_hover table-striped">
          <thead>
              <tr>
                  <th>Centroid</th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
              </tr>
          </thead>
          <tbody>
            <?php
              $this->db->query('truncate table centroid_akhir_c1');
              $this->db->query('truncate table centroid_akhir_c2');
              $this->db->query('truncate table centroid_akhir_c3');

              $this->db->query('truncate table ssw_cluster1');
              $this->db->query('truncate table ssw_cluster2');
              $this->db->query('truncate table ssw_cluster3');

              $this->db->query('truncate table hasil_ssw');

              $this->db->where('idhasil_centroid', $hasil_centroid);
              $hasil_centroid = $this->db->get('hasil_centroid');
            ?>
            <tr>
              <th>C1</th>
              <th><?= $hasil_centroid->row('c1a') ?></th>
              <th><?= $hasil_centroid->row('c1b') ?></th>
              <th><?= $hasil_centroid->row('c1c') ?></th>
              <th><?= $hasil_centroid->row('c1d') ?></th>
              <th><?= $hasil_centroid->row('c1e') ?></th>
              <th><?= $hasil_centroid->row('c1f') ?></th>
              <th><?= $hasil_centroid->row('c1g') ?></th>
              <th><?= $hasil_centroid->row('c1h') ?></th>
              <th><?= $hasil_centroid->row('c1i') ?></th>
              <th><?= $hasil_centroid->row('c1j') ?></th>
              <th><?= $hasil_centroid->row('c1k') ?></th>
              <th><?= $hasil_centroid->row('c1l') ?></th>
              <th><?= $hasil_centroid->row('c1m') ?></th>
            </tr>
            <tr>
              <th>C2</th>
              <th><?= $hasil_centroid->row('c2a') ?></th>
              <th><?= $hasil_centroid->row('c2b') ?></th>
              <th><?= $hasil_centroid->row('c2c') ?></th>
              <th><?= $hasil_centroid->row('c2d') ?></th>
              <th><?= $hasil_centroid->row('c2e') ?></th>
              <th><?= $hasil_centroid->row('c2f') ?></th>
              <th><?= $hasil_centroid->row('c2g') ?></th>
              <th><?= $hasil_centroid->row('c2h') ?></th>
              <th><?= $hasil_centroid->row('c2i') ?></th>
              <th><?= $hasil_centroid->row('c2j') ?></th>
              <th><?= $hasil_centroid->row('c2k') ?></th>
              <th><?= $hasil_centroid->row('c2l') ?></th>
              <th><?= $hasil_centroid->row('c2m') ?></th>
            </tr>
            <tr>
              <th>C3</th>
              <th><?= $hasil_centroid->row('c3a') ?></th>
              <th><?= $hasil_centroid->row('c3b') ?></th>
              <th><?= $hasil_centroid->row('c3c') ?></th>
              <th><?= $hasil_centroid->row('c3d') ?></th>
              <th><?= $hasil_centroid->row('c3e') ?></th>
              <th><?= $hasil_centroid->row('c3f') ?></th>
              <th><?= $hasil_centroid->row('c3g') ?></th>
              <th><?= $hasil_centroid->row('c3h') ?></th>
              <th><?= $hasil_centroid->row('c3i') ?></th>
              <th><?= $hasil_centroid->row('c3j') ?></th>
              <th><?= $hasil_centroid->row('c3k') ?></th>
              <th><?= $hasil_centroid->row('c3l') ?></th>
              <th><?= $hasil_centroid->row('c3m') ?></th>
            </tr>
          </tbody>
        </table>
          <?php
            // c1
            $q = "insert into centroid_akhir_c1(c1a,c1b,c1c,c1d,c1e,c1f,c1g,c1h,c1i,c1j,c1k,c1l,c1m) values('".$hasil_centroid->row('c1a')."','".$hasil_centroid->row('c1b')."','".$hasil_centroid->row('c1c')."','".$hasil_centroid->row('c1d')."','".$hasil_centroid->row('c1e')."','".$hasil_centroid->row('c1f')."','".$hasil_centroid->row('c1g')."','".$hasil_centroid->row('c1h')."','".$hasil_centroid->row('c1i')."','".$hasil_centroid->row('c1j')."','".$hasil_centroid->row('c1k')."','".$hasil_centroid->row('c1l')."','".$hasil_centroid->row('c1m')."')";
            $this->db->query($q);

            // c2
            $q = "insert into centroid_akhir_c2(c2a,c2b,c2c,c2d,c2e,c2f,c2g,c2h,c2i,c2j,c2k,c2l,c2m) values('".$hasil_centroid->row('c2a')."','".$hasil_centroid->row('c2b')."','".$hasil_centroid->row('c2c')."','".$hasil_centroid->row('c2d')."','".$hasil_centroid->row('c2e')."','".$hasil_centroid->row('c2f')."','".$hasil_centroid->row('c2g')."','".$hasil_centroid->row('c2h')."','".$hasil_centroid->row('c2i')."','".$hasil_centroid->row('c2j')."','".$hasil_centroid->row('c2k')."','".$hasil_centroid->row('c2l')."','".$hasil_centroid->row('c2m')."')";
            $this->db->query($q);
            
            // c3
            $q = "insert into centroid_akhir_c3(c3a,c3b,c3c,c3d,c3e,c3f,c3g,c3h,c3i,c3j,c3k,c3l,c3m) values('".$hasil_centroid->row('c3a')."','".$hasil_centroid->row('c3b')."','".$hasil_centroid->row('c3c')."','".$hasil_centroid->row('c3d')."','".$hasil_centroid->row('c3e')."','".$hasil_centroid->row('c3f')."','".$hasil_centroid->row('c3g')."','".$hasil_centroid->row('c3h')."','".$hasil_centroid->row('c3i')."','".$hasil_centroid->row('c3j')."','".$hasil_centroid->row('c3k')."','".$hasil_centroid->row('c3l')."','".$hasil_centroid->row('c3m')."')";
            $this->db->query($q);
          ?>

            <br>
            <h5>Cluster 1</h5>
            <table class="table table-bordered table_hover table-striped">
              <thead>
                <tr>
                  <th>Nama Puskesmas</th>
                  <th>Positif</th>
                  <th>Usia 0-11 Bulan</th>
                  <th>Usia 1-4 Tahun</th>
                  <th>Usia 5-9 Tahun</th>
                  <th>Usia 10-14 Tahun</th>
                  <th>Usia 15-64 Tahun</th>
                  <th>Usia > 64 Tahun</th>
                  <th>Ibu Hamil</th>
                  <th>PF</th>
                  <th>PV</th>
                  <th>PO</th>
                  <th>PM</th>
                  <th>PK</th>
                </tr>
              </thead>
              <tbody>
                <?php
                
                $this->db->where('iterasi', $centroid_c1);
                $this->db->where('c1', 1);
                $this->db->join('data_malaria', 'data_malaria.iddata_malaria = centroid_temp.iddata_malaria');
                $this->db->join('puskesmas', 'puskesmas.id_puskesmas = data_malaria.id_puskesmas');
                $c_temp = $this->db->get('centroid_temp');

                // var_dump($c_temp->result());
                // die();

                foreach($c_temp->result() as $v_centroid_c1){ 
                ?>
                <tr>
                  <td><?= $v_centroid_c1->nama_puskesmas; ?></td>
                  <td><?= $v_centroid_c1->positif; ?></td>
                  <td><?= $v_centroid_c1->usia_0; ?></td>
                  <td><?= $v_centroid_c1->usia_1; ?></td>
                  <td><?= $v_centroid_c1->usia_5; ?></td>
                  <td><?= $v_centroid_c1->usia_10; ?></td>
                  <td><?= $v_centroid_c1->usia_15; ?></td>
                  <td><?= $v_centroid_c1->usia_64; ?></td>
                  <td><?= $v_centroid_c1->ibu_hamil; ?></td>
                  <td><?= $v_centroid_c1->pf; ?></td>
                  <td><?= $v_centroid_c1->pv; ?></td>
                  <td><?= $v_centroid_c1->po; ?></td>
                  <td><?= $v_centroid_c1->pm; ?></td>
                  <td><?= $v_centroid_c1->pk; ?></td>
                  <td><?php
                    $hc1 = sqrt(pow(($v_centroid_c1->positif - $hasil_centroid->row('c1a')), 2) + pow(($v_centroid_c1->usia_0 - $hasil_centroid->row('c1b')), 2) + pow(($v_centroid_c1->usia_1 - $hasil_centroid->row('c1c')), 2) + pow(($v_centroid_c1->usia_5 - $hasil_centroid->row('c1d')), 2) + pow(($v_centroid_c1->usia_10 - $hasil_centroid->row('c1e')), 2) + pow(($v_centroid_c1->usia_15 - $hasil_centroid->row('c1f')), 2) + pow(($v_centroid_c1->usia_64 - $hasil_centroid->row('c1g')), 2) + pow(($v_centroid_c1->ibu_hamil - $hasil_centroid->row('c1h')), 2) + pow(($v_centroid_c1->pf - $hasil_centroid->row('c1i')), 2) + pow(($v_centroid_c1->pv - $hasil_centroid->row('c1j')), 2) + pow(($v_centroid_c1->po - $hasil_centroid->row('c1k')), 2) + pow(($v_centroid_c1->pm - $hasil_centroid->row('c1l')), 2) + pow(($v_centroid_c1->pk - $hasil_centroid->row('c1m')), 2));
                    echo $hc1;
                  ?></td>
                </tr>
                <?php 

                  $q_cluster1 = "insert into ssw_cluster1(nama_puskesmas,nilai_cluster) values('".$v_centroid_c1->nama_puskesmas."','".$hc1."')";
                  $this->db->query($q_cluster1);

                } 
                ?>
              </tbody>
            </table>

            <br>
            <h5>Cluster 2</h5>
            <table class="table table-bordered table_hover table-striped">
              <thead>
                <tr>
                  <th>Nama Puskesmas</th>
                  <th>Positif</th>
                  <th>Usia 0-11 Bulan</th>
                  <th>Usia 1-4 Tahun</th>
                  <th>Usia 5-9 Tahun</th>
                  <th>Usia 10-14 Tahun</th>
                  <th>Usia 15-64 Tahun</th>
                  <th>Usia > 64 Tahun</th>
                  <th>Ibu Hamil</th>
                  <th>PF</th>
                  <th>PV</th>
                  <th>PO</th>
                  <th>PM</th>
                  <th>PK</th>
                </tr>
              </thead>
              <tbody>
                <?php
                
                $this->db->where('iterasi', $centroid_c1);
                $this->db->where('c2', 1);
                $this->db->join('data_malaria', 'data_malaria.iddata_malaria = centroid_temp.iddata_malaria');
                $this->db->join('puskesmas', 'puskesmas.id_puskesmas = data_malaria.id_puskesmas');
                $c_temp_2 = $this->db->get('centroid_temp');

                // var_dump($c_temp->result());
                // die();

                foreach($c_temp_2->result() as $v_centroid_c2){ 
                ?>
                <tr>
                  <td><?= $v_centroid_c2->nama_puskesmas; ?></td>
                  <td><?= $v_centroid_c2->positif; ?></td>
                  <td><?= $v_centroid_c2->usia_0; ?></td>
                  <td><?= $v_centroid_c2->usia_1; ?></td>
                  <td><?= $v_centroid_c2->usia_5; ?></td>
                  <td><?= $v_centroid_c2->usia_10; ?></td>
                  <td><?= $v_centroid_c2->usia_15; ?></td>
                  <td><?= $v_centroid_c2->usia_64; ?></td>
                  <td><?= $v_centroid_c2->ibu_hamil; ?></td>
                  <td><?= $v_centroid_c2->pf; ?></td>
                  <td><?= $v_centroid_c2->pv; ?></td>
                  <td><?= $v_centroid_c2->po; ?></td>
                  <td><?= $v_centroid_c2->pm; ?></td>
                  <td><?= $v_centroid_c2->pk; ?></td>
                  <td><?php
                    $hc2 = sqrt(pow(($v_centroid_c2->positif - $hasil_centroid->row('c2a')), 2) + pow(($v_centroid_c2->usia_0 - $hasil_centroid->row('c2b')), 2) + pow(($v_centroid_c2->usia_1 - $hasil_centroid->row('c2c')), 2) + pow(($v_centroid_c2->usia_5 - $hasil_centroid->row('c2d')), 2) + pow(($v_centroid_c2->usia_10 - $hasil_centroid->row('c2e')), 2) + pow(($v_centroid_c2->usia_15 - $hasil_centroid->row('c2f')), 2) + pow(($v_centroid_c2->usia_64 - $hasil_centroid->row('c2g')), 2) + pow(($v_centroid_c2->ibu_hamil - $hasil_centroid->row('c2h')), 2) + pow(($v_centroid_c2->pf - $hasil_centroid->row('c2i')), 2) + pow(($v_centroid_c2->pv - $hasil_centroid->row('c2j')), 2) + pow(($v_centroid_c2->po - $hasil_centroid->row('c1k')), 2) + pow(($v_centroid_c2->pm - $hasil_centroid->row('c2l')), 2) + pow(($v_centroid_c2->pk - $hasil_centroid->row('c2m')), 2));
                    echo $hc2;
                  ?></td>
                </tr>
                  <?php 
                  $q_cluster2 = "insert into ssw_cluster2(nama_puskesmas,nilai_cluster) values('".$v_centroid_c2->nama_puskesmas."','".$hc2."')";
                  $this->db->query($q_cluster2);
                } 
                ?>
              </tbody>
            </table>
            
            <br>
            <h5>Cluster 3</h5>
            <table class="table table-bordered table_hover table-striped">
              <thead>
                <tr>
                  <th>Nama Puskesmas</th>
                  <th>Positif</th>
                  <th>Usia 0-11 Bulan</th>
                  <th>Usia 1-4 Tahun</th>
                  <th>Usia 5-9 Tahun</th>
                  <th>Usia 10-14 Tahun</th>
                  <th>Usia 15-64 Tahun</th>
                  <th>Usia > 64 Tahun</th>
                  <th>Ibu Hamil</th>
                  <th>PF</th>
                  <th>PV</th>
                  <th>PO</th>
                  <th>PM</th>
                  <th>PK</th>
                </tr>
              </thead>
              <tbody>
                <?php
                
                $this->db->where('iterasi', $centroid_c1);
                $this->db->where('c3', 1);
                $this->db->join('data_malaria', 'data_malaria.iddata_malaria = centroid_temp.iddata_malaria');
                $this->db->join('puskesmas', 'puskesmas.id_puskesmas = data_malaria.id_puskesmas');
                $c_temp_3 = $this->db->get('centroid_temp');

                // var_dump($c_temp->result());
                // die();

                foreach($c_temp_3->result() as $v_centroid_c3){ 
                ?>
                <tr>
                  <td><?= $v_centroid_c3->nama_puskesmas; ?></td>
                  <td><?= $v_centroid_c3->positif; ?></td>
                  <td><?= $v_centroid_c3->usia_0; ?></td>
                  <td><?= $v_centroid_c3->usia_1; ?></td>
                  <td><?= $v_centroid_c3->usia_5; ?></td>
                  <td><?= $v_centroid_c3->usia_10; ?></td>
                  <td><?= $v_centroid_c3->usia_15; ?></td>
                  <td><?= $v_centroid_c3->usia_64; ?></td>
                  <td><?= $v_centroid_c3->ibu_hamil; ?></td>
                  <td><?= $v_centroid_c3->pf; ?></td>
                  <td><?= $v_centroid_c3->pv; ?></td>
                  <td><?= $v_centroid_c3->po; ?></td>
                  <td><?= $v_centroid_c3->pm; ?></td>
                  <td><?= $v_centroid_c3->pk; ?></td>
                  <td><?php
                    $hc3 = sqrt(pow(($v_centroid_c3->positif - $hasil_centroid->row('c3a')), 2) + pow(($v_centroid_c3->usia_0 - $hasil_centroid->row('c3b')), 2) + pow(($v_centroid_c3->usia_1 - $hasil_centroid->row('c3c')), 2) + pow(($v_centroid_c3->usia_5 - $hasil_centroid->row('c2d')), 2) + pow(($v_centroid_c3->usia_10 - $hasil_centroid->row('c3e')), 2) + pow(($v_centroid_c3->usia_15 - $hasil_centroid->row('c3f')), 2) + pow(($v_centroid_c3->usia_64 - $hasil_centroid->row('c3g')), 2) + pow(($v_centroid_c3->ibu_hamil - $hasil_centroid->row('c3h')), 2) + pow(($v_centroid_c3->pf - $hasil_centroid->row('c3i')), 2) + pow(($v_centroid_c3->pv - $hasil_centroid->row('c3j')), 2) + pow(($v_centroid_c3->po - $hasil_centroid->row('c3k')), 2) + pow(($v_centroid_c3->pm - $hasil_centroid->row('c3l')), 2) + pow(($v_centroid_c3->pk - $hasil_centroid->row('c3m')), 2));
                    echo $hc3;
                  ?></td>
                </tr>
                  <?php 
                  $q_cluster3 = "insert into ssw_cluster3(nama_puskesmas,nilai_cluster) values('".$v_centroid_c3->nama_puskesmas."','".$hc3."')";
                  $this->db->query($q_cluster3);
                  } 
                ?>
              </tbody>
            </table>

            <br>
            <h5>Hasil SSW</h5>
            <table class="table table-bordered table_hover table-striped">
              <?php
                $this->db->select('avg(nilai_cluster) as nilai_1');
                $ssw1 = $this->db->get('ssw_cluster1')->row('nilai_1');
                
                $this->db->select('avg(nilai_cluster) as nilai_2');
                $ssw2 = $this->db->get('ssw_cluster2')->row('nilai_2');

                $this->db->select('avg(nilai_cluster) as nilai_3');
                $ssw3 = $this->db->get('ssw_cluster3')->row('nilai_3');
              ?>
              <thead>
                  <tr>
                    <th>Cluster</th>
                    <th>Nilai SSW</th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                    <td>1</td>
                    <td><?= $ssw1; ?></td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td><?= $ssw2; ?></td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td><?= $ssw3; ?></td>
                  </tr>
              </tbody>
              <?php
                $hasil_ssw = "insert into hasil_ssw(ssw1,ssw2,ssw3) values('".$ssw1."','".$ssw2."','".$ssw3."')";
                $this->db->query($hasil_ssw);      
              ?>
            </table>
        </div>
    </main>
</section>