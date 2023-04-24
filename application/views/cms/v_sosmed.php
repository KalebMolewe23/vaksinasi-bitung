<section class="home-section">

    <div class="home-content">
        <i class='bx bx-menu'></i>
        <span class="text"><i class='bx bx-cog'></i> Setting Sosmed</span>
    </div>

    <main>
        <div class="container-fluid">
 
        <?php
          $data_cms = $this->db->get('sosmed');
          $idsosmed = $data_cms->row('idsosmed');
          $facebook = $data_cms->row('facebook');
          $twitter = $data_cms->row('twitter');
          $instagram = $data_cms->row('instagram');
        ?>
          <form action=<?= base_url('administrator/cms/update_sosmed') ?> method="post">
            <input type="hidden" name="idsosmed" class="form-control" value="<?= $idsosmed ?>">
            <label>Link Facebook :</label>
            <input type="text" class="form-control" name="facebook" value="<?= $facebook; ?>"><br>
            <label>Link Twitter :</label>
            <input type="text" class="form-control" name="twitter" value="<?= $twitter; ?>"><br>
            <label>Link Instagram :</label>
            <input type="text" class="form-control" name="instagram" value="<?= $instagram ?>"></br>
            <div align="right">
              <button type="submit" class="btn btn-primary"><i class='bx bxs-memory-card'></i> Update</button>
            </div>
          </form>

        </div>
    </main>
</section>