<section class="home-section">

    <div class="home-content">
        <i class='bx bx-menu'></i>
        <span class="text"><i class='bx bxs-home'></i> Data Malaria Monokwari(Papua Barat)</span>
    </div>

    <main>
        <div class="container-fluid">
          <?php
            //cluster 1
            $c1_1 = $c1->row('c1a');
            $c1_2 = $c1->row('c1b');
            $c1_3 = $c1->row('c1c');
            $c1_4 = $c1->row('c1d');
            $c1_5 = $c1->row('c1e');
            $c1_6 = $c1->row('c1f');
            $c1_7 = $c1->row('c1g');
            $c1_8 = $c1->row('c1h');
            $c1_9 = $c1->row('c1i');
            $c1_10 = $c1->row('c1j');
            $c1_11 = $c1->row('c1k');
            $c1_12 = $c1->row('c1l');
            $c1_13 = $c1->row('c1m');
            
            //cluster 2
            $c2_1 = $c2->row('c2a');
            $c2_2 = $c2->row('c2b');
            $c2_3 = $c2->row('c2c');
            $c2_4 = $c2->row('c2d');
            $c2_5 = $c2->row('c2e');
            $c2_6 = $c2->row('c2f');
            $c2_7 = $c2->row('c2g');
            $c2_8 = $c2->row('c2h');
            $c2_9 = $c2->row('c2i');
            $c2_10 = $c2->row('c2j');
            $c2_11 = $c2->row('c2k');
            $c2_12 = $c2->row('c2l');
            $c2_13 = $c2->row('c2m');
            
            //cluster 3
            $c3_1 = $c3->row('c3a');
            $c3_2 = $c3->row('c3b');
            $c3_3 = $c3->row('c3c');
            $c3_4 = $c3->row('c3d');
            $c3_5 = $c3->row('c3e');
            $c3_6 = $c3->row('c3f');
            $c3_7 = $c3->row('c3g');
            $c3_8 = $c3->row('c3h');
            $c3_9 = $c3->row('c3i');
            $c3_10 = $c3->row('c3j');
            $c3_11 = $c3->row('c3k');
            $c3_12 = $c3->row('c3l');
            $c3_13 = $c3->row('c3m');
          ?>

          <h5>Hasil SSB</h5><br>
            <table class="table table-bordered table_hover table-striped">
              <thead>
                  <tr>
                    <th></th>
                    <th>1</th>
                    <th>2</th>
                    <th>3</th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                    <th>1</th>
                    <th>
                      <?php
                      $hc1 = sqrt(pow(($c1_1 - $c1_1), 2) + pow(($c1_2 - $c1_2), 2) + pow(($c1_3 - $c1_3), 2) + pow(($c1_4 - $c1_4), 2) + pow(($c1_5 - $c1_5), 2) + pow(($c1_6 - $c1_6), 2) + pow(($c1_7 - $c1_7), 2) + pow(($c1_8 - $c1_8), 2) + pow(($c1_9 - $c1_9), 2) + pow(($c1_10 - $c1_10), 2) + pow(($c1_11 - $c1_11), 2) + pow(($c1_12 - $c1_12), 2) + pow(($c1_13 - $c1_13), 2));
                      echo $hc1;
                      ?>
                    </th>
                    <th>
                      <?php
                      $hc2 = sqrt(pow(($c1_1 - $c2_1), 2) + pow(($c1_2 - $c2_2), 2) + pow(($c1_3 - $c2_3), 2) + pow(($c1_4 - $c2_4), 2) + pow(($c1_5 - $c2_5), 2) + pow(($c1_6 - $c2_6), 2) + pow(($c1_7 - $c2_7), 2) + pow(($c1_8 - $c2_8), 2) + pow(($c1_9 - $c2_9), 2) + pow(($c1_10 - $c2_10), 2) + pow(($c1_11 - $c2_11), 2) + pow(($c1_12 - $c2_12), 2) + pow(($c1_13 - $c2_13), 2));
                      echo $hc2;
                      ?>
                    </th>
                    <th>
                      <?php
                      $hc3 = sqrt(pow(($c1_1 - $c3_1), 2) + pow(($c1_2 - $c3_2), 2) + pow(($c1_3 - $c3_3), 2) + pow(($c1_4 - $c3_4), 2) + pow(($c1_5 - $c3_5), 2) + pow(($c1_6 - $c3_6), 2) + pow(($c1_7 - $c3_7), 2) + pow(($c1_8 - $c3_8), 2) + pow(($c1_9 - $c3_9), 2) + pow(($c1_10 - $c3_10), 2) + pow(($c1_11 - $c3_11), 2) + pow(($c1_12 - $c3_12), 2) + pow(($c1_13 - $c3_13), 2));
                      echo $hc3;
                      ?>
                    </th>
                  </tr>
                  <tr>
                    <th>2</th>
                    <th>
                      <?php
                      $hc1_1 = sqrt(pow(($c2_1 - $c1_1), 2) + pow(($c2_2 - $c1_2), 2) + pow(($c2_3 - $c1_3), 2) + pow(($c2_4 - $c1_4), 2) + pow(($c2_5 - $c1_5), 2) + pow(($c2_6 - $c1_6), 2) + pow(($c2_7 - $c1_7), 2) + pow(($c2_8 - $c1_8), 2) + pow(($c2_9 - $c1_9), 2) + pow(($c2_10 - $c1_10), 2) + pow(($c2_11 - $c1_11), 2) + pow(($c2_12 - $c1_12), 2) + pow(($c2_13 - $c1_13), 2));
                      echo $hc1_1;
                      ?>
                    </th>
                    <th>
                      <?php
                      $hc2_1 = sqrt(pow(($c2_1 - $c2_1), 2) + pow(($c2_2 - $c2_2), 2) + pow(($c2_3 - $c2_3), 2) + pow(($c2_4 - $c2_4), 2) + pow(($c2_5 - $c2_5), 2) + pow(($c2_6 - $c2_6), 2) + pow(($c2_7 - $c2_7), 2) + pow(($c2_8 - $c2_8), 2) + pow(($c2_9 - $c2_9), 2) + pow(($c2_10 - $c2_10), 2) + pow(($c2_11 - $c2_11), 2) + pow(($c2_12 - $c2_12), 2) + pow(($c2_13 - $c2_13), 2));
                      echo $hc2_1;
                      ?>
                    </th>
                    <th>
                      <?php
                      $hc3_1 = sqrt(pow(($c2_1 - $c3_1), 2) + pow(($c2_2 - $c3_2), 2) + pow(($c2_3 - $c3_3), 2) + pow(($c2_4 - $c3_4), 2) + pow(($c2_5 - $c3_5), 2) + pow(($c2_6 - $c3_6), 2) + pow(($c2_7 - $c3_7), 2) + pow(($c2_8 - $c3_8), 2) + pow(($c2_9 - $c3_9), 2) + pow(($c2_10 - $c3_10), 2) + pow(($c2_11 - $c3_11), 2) + pow(($c2_12 - $c3_12), 2) + pow(($c2_13 - $c3_13), 2));
                      echo $hc3_1;
                      ?>
                    </th>
                  </tr>
                  <tr>
                    <th>3</th>
                    <th>
                      <?php
                      $hc1_2 = sqrt(pow(($c3_1 - $c1_1), 2) + pow(($c3_2 - $c1_2), 2) + pow(($c3_3 - $c1_3), 2) + pow(($c3_4 - $c1_4), 2) + pow(($c3_5 - $c1_5), 2) + pow(($c3_6 - $c1_6), 2) + pow(($c3_7 - $c1_7), 2) + pow(($c3_8 - $c1_8), 2) + pow(($c3_9 - $c1_9), 2) + pow(($c3_10 - $c1_10), 2) + pow(($c3_11 - $c1_11), 2) + pow(($c3_12 - $c1_12), 2) + pow(($c3_13 - $c1_13), 2));
                      echo $hc1_2;
                      ?>
                    </th>
                    <th>
                      <?php
                      $hc2_2 = sqrt(pow(($c3_1 - $c2_1), 2) + pow(($c3_2 - $c2_2), 2) + pow(($c3_3 - $c2_3), 2) + pow(($c3_4 - $c2_4), 2) + pow(($c3_5 - $c2_5), 2) + pow(($c3_6 - $c2_6), 2) + pow(($c2_7 - $c2_7), 2) + pow(($c3_8 - $c2_8), 2) + pow(($c3_9 - $c2_9), 2) + pow(($c3_10 - $c2_10), 2) + pow(($c3_11 - $c2_11), 2) + pow(($c3_12 - $c2_12), 2) + pow(($c3_13 - $c2_13), 2));
                      echo $hc2_2;
                      ?>
                    </th>
                    <th>
                      <?php
                      $hc3_2 = sqrt(pow(($c3_1 - $c3_1), 2) + pow(($c3_2 - $c3_2), 2) + pow(($c3_3 - $c3_3), 2) + pow(($c3_4 - $c3_4), 2) + pow(($c3_5 - $c3_5), 2) + pow(($c3_6 - $c3_6), 2) + pow(($c3_7 - $c3_7), 2) + pow(($c3_8 - $c3_8), 2) + pow(($c3_9 - $c3_9), 2) + pow(($c3_10 - $c3_10), 2) + pow(($c3_11 - $c3_11), 2) + pow(($c3_12 - $c3_12), 2) + pow(($c3_13 - $c3_13), 2));
                      echo $hc3_2;
                      ?>
                    </th>
                  </tr>
              </tbody>
            </table><br>

            <?php
              $ssw = $this->db->get('hasil_ssw');
              $ssw1 = $ssw->row('ssw1');
              $ssw2 = $ssw->row('ssw2');
              $ssw3 = $ssw->row('ssw3');

              $total_ssw = $ssw1 + $ssw2 + $ssw3;
            ?>

            <p>Hasil SSW : <?php echo $total_ssw; ?></p><br>

            <h5>Hasil Ratio</h5><br>
            <table class="table table-bordered table_hover table-striped">
              <thead>
                  <tr>
                    <th>Rasio</th>
                    <th></th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                    <th>Rasio(1,2)</th>
                    <th>
                      <?php
                        $hasil_1 = $total_ssw/$hc2;

                        echo $hasil_1;
                      ?>
                    </th>
                  </tr>
                  <tr>
                    <th>Rasio(1,3)</th>
                    <th>
                      <?php
                        $hasil_2 = $total_ssw/$hc3;

                        echo $hasil_2;
                      ?>
                    </th>
                  </tr>
                  <tr>
                    <th>Rasio(2,3)</th>
                    <th>
                      <?php
                        $hasil_3 = $total_ssw/$hc2_2;

                        echo $hasil_3;
                      ?>
                    </th>
                  </tr>
              </tbody>
            </table><br>
            <p>Hasil DBI : <?php echo $dbi = ((1/3)*$hasil_1); ?></p><br>
        </div>
    </main>
</section>