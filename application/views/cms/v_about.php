<section class="home-section">

    <div class="home-content">
        <i class='bx bx-menu'></i>
        <span class="text"><i class='bx bx-cog'></i> Setting About</span>
    </div>

    <main>
        <div class="container-fluid">
 
        <?php
          $data_cms = $this->db->get('about');
          $idabout = $data_cms->row('idabout');
          $phone = $data_cms->row('phone');
          $email = $data_cms->row('email');
          $address = $data_cms->row('address');
          $media1 = $data_cms->row('media1');
          $media2 = $data_cms->row('media2');
          $media3 = $data_cms->row('media3');
          $about = $data_cms->row('about');
        ?>
          <form action=<?= base_url('administrator/cms/update_about') ?> method="post">
            <input type="hidden" name="idabout" class="form-control" value="<?= $idabout ?>">
            <label>No. Telp :</label>
            <input type="text" class="form-control" name="phone" value="<?= $phone; ?>"><br>
            <label>Email :</label>
            <input type="text" class="form-control" name="email" value="<?= $email; ?>"><br>
            <label>Alamat :</label>
            <input type="text" class="form-control" name="address" value="<?= $address ?>"></br>
            <label>Media 1 :</label>
            <textarea type="text" class="form-control" name="media1"><?= $media1 ?></textarea></br>
            <label>Media 2 :</label>
            <textarea type="text" class="form-control" name="media2"><?= $media2 ?></textarea></br>
            <label>Media 3 :</label>
            <textarea type="text" class="form-control" name="media3"><?= $media3 ?></textarea></br>
            <label>About :</label>
            <textarea type="text" class="form-control" name="about"><?= $about ?></textarea></br>
            <div align="right">
              <button type="submit" class="btn btn-primary"><i class='bx bxs-memory-card'></i> Update</button>
            </div>
          </form>

        </div>
    </main>
</section>