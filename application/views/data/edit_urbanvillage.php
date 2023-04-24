<section class="home-section">

    <div class="home-content">
        <i class='bx bx-menu'></i>
        <span class="text"><i class='bx bx-plus-medical'></i> Edit Data Kecamatan</span>
    </div>

    <main>

        <div class="container">
          <br>
          <center>
              <h4><strong>Edit Data Kecamatan</strong></h4>
          </center><br>

          <?php foreach ($kelurahan as $value) : ?>

          <form action=<?= base_url('administrator/data/update_urbanvillage') ?> method="post">

            <input type="hidden" name="idurban_village" class="form-control" value="<?= $value->idurban_village ?>">

                <div class="form_group">
                    <label>Nama Kecamatan</label>
                    <select type="text" class="form-control selectric" name="idarea" required>
                    <option value=""> - Silahkan Pilih - </option>
                    <?php foreach ($data->result() as $value1){
                        echo "<option value='" . $value1->idarea . "'>" . $value1->area_name . "</option>";
                    } ?>
                    </select>
                    <?= form_error('idarea', '<small class="text-danger">', '</small>'); ?>
                </div>
                
                <div class="form_group">
                    <label>Nama Kelurahan</label>
                    <input type="text" class="form-control selectric" name="urbanvillage_name" value="<?= $value->urbanvillage_name; ?>" required>
                    <?= form_error('urbanvillage_name', '<small class="text-danger">', '</small>'); ?>
                </div><br>
              <div class="form_group">
                  <button type="submit" class="btn btn-success"><i class='bx bxs-save'></i> Simpan</button>
              </div>

          </form>
          <?php endforeach; ?>
        </div>
    </main>
</section>