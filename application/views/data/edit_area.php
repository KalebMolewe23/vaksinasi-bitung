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

          <?php foreach ($puskesmas as $value) : ?>

          <form action=<?= base_url('administrator/data/update_area') ?> method="post">

              <input type="hidden" name="idarea" class="form-control" value="<?= $value->idarea ?>">

              <div class="form_group">
                    <label>Kecamatan</label>
                    <input type="text" class="form-control selectric" name="area_name" value="<?= $value->area_name ?>" required>
                    <?= form_error('nama_puskesmas', '<small class="text-danger">', '</small>'); ?>
                </div>
                
                <div class="form_group">
                    <label>Geojson</label>
                    <input type="text" class="form-control selectric" name="geojson" value="<?= $value->geojson ?>" required>
                    <?= form_error('geojson', '<small class="text-danger">', '</small>'); ?>
                </div><br>

              <div class="form_group">
                  <button type="submit" class="btn btn-success"><i class='bx bxs-save'></i> Simpan</button>
              </div>

          </form>
          <?php endforeach; ?>
        </div>
    </main>
</section>