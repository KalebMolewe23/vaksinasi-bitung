<section class="home-section">

    <div class="home-content">
        <i class='bx bx-menu'></i>
        <span class="text"><i class='bx bxs-home'></i> Hasil Iterasi</span>
    </div>

    <main>
        <div class="container-fluid">
          <h1>Data Hasil K-means</h1><br>
          
          <div class="table-responsive">
            
          <?php
            foreach($w->result() as $tw){
              $c1 = $tw->c1;
              $c2 = $tw->c2;
              $c3 = $tw->c3;
              $c4 = $tw->c4;
              $c5 = $tw->c5;
            }

            if($c4 == null && $c5 == null){
              echo"
              <table id='table_data' class='table table-bordered table-admin'>
                <tr align='center'>
                  <td>Nama Puskesmas</td>
                  <td>C1</td>
                  <td>C2</td>
                  <td>C3</td>
                </tr>";
              foreach($q->result() as $tq)
                {
                $warna1="";
                $warna2="";
                $warna3="";

                if($tq->c1==1){$warna1='#FFFF00';} else{$warna1='#EAEAEA';}
                if($tq->c2==1){$warna2='#FFFF00';} else{$warna2='#EAEAEA';}
                if($tq->c3==1){$warna3='#FFFF00';} else{$warna3='#EAEAEA';}

                echo "
                <tr align='center'>
                  <td>$tq->nama_puskesmas</td>
                  <td bgcolor='$warna1'>$tq->c1</td>
                  <td bgcolor='$warna2'>$tq->c2</td>
                  <td bgcolor='$warna3'>$tq->c3</td>
                </tr>
                ";
              }
              echo"
              </table>";
            }else if($c5 == null){
              echo"
              <table id='table_data' class='table table-bordered table-admin'>
                <tr align='center'>
                  <td>Nama Puskesmas</td>
                  <td>C1</td>
                  <td>C2</td>
                  <td>C3</td>
                  <td>C4</td>
                </tr>";
              foreach($q->result() as $tq)
                {
                $warna1="";
                $warna2="";
                $warna3="";
                $warna4="";

                if($tq->c1==1){$warna1='#FFFF00';} else{$warna1='#EAEAEA';}
                if($tq->c2==1){$warna2='#FFFF00';} else{$warna2='#EAEAEA';}
                if($tq->c3==1){$warna3='#FFFF00';} else{$warna3='#EAEAEA';}
                if($tq->c4==1){$warna4='#FFFF00';} else{$warna4='#EAEAEA';}

                echo "
                <tr align='center'>
                  <td>$tq->nama_puskesmas</td>
                  <td bgcolor='$warna1'>$tq->c1</td>
                  <td bgcolor='$warna2'>$tq->c2</td>
                  <td bgcolor='$warna3'>$tq->c3</td>
                  <td bgcolor='$warna4'>$tq->c4</td>
                </tr>
                ";
              }
              echo"
              </table>";
            }else if($c5 != null){
              echo"
              <table id='table_data' class='table table-bordered table-admin'>
                <tr align='center'>
                  <td>Nama Puskesmas</td>
                  <td>C1</td>
                  <td>C2</td>
                  <td>C3</td>
                  <td>C4</td>
                  <td>C5</td>
                </tr>";
              foreach($q->result() as $tq)
                {
                $warna1="";
                $warna2="";
                $warna3="";
                $warna4="";
                $warna5="";

                if($tq->c1==1){$warna1='#FFFF00';} else{$warna1='#EAEAEA';}
                if($tq->c2==1){$warna2='#FFFF00';} else{$warna2='#EAEAEA';}
                if($tq->c3==1){$warna3='#FFFF00';} else{$warna3='#EAEAEA';}
                if($tq->c4==1){$warna4='#FFFF00';} else{$warna4='#EAEAEA';}
                if($tq->c5==1){$warna5='#FFFF00';} else{$warna5='#EAEAEA';}

                echo "
                <tr align='center'>
                  <td>$tq->nama_puskesmas</td>
                  <td bgcolor='$warna1'>$tq->c1</td>
                  <td bgcolor='$warna2'>$tq->c2</td>
                  <td bgcolor='$warna3'>$tq->c3</td>
                  <td bgcolor='$warna4'>$tq->c4</td>
                  <td bgcolor='$warna5'>$tq->c5</td>
                </tr>
                ";
              }
              echo"
              </table>";
            }
            ?>
            
          </div>
        </div>
    </main>
<section>