<section class="footer">
  <div class="footer-container container">
    <?php
        $data_cms_bg = $this->db->get('background');
        $bg_name = $data_cms_bg->row('bg_name');
    ?>
    <h2><?= $bg_name; ?></h2>
      <div class="footer-box">
        <h3>Link</h3>
        <a href="#">Home</a>
        <a href="#">Pemetaan</a>
        <a href="#">Data Malaria</a>
        <a href="#">Tentang Kami</a>
      </div>
      <?php
            $data_cms_about = $this->db->get('about');
            $idabout = $data_cms_about->row('idabout');
            $phone = $data_cms_about->row('phone');
            $email = $data_cms_about->row('email');
            $address = $data_cms_about->row('address');
            $media1 = $data_cms_about->row('media1');
            $media2 = $data_cms_about->row('media2');
            $media3 = $data_cms_about->row('media3');
            $about = $data_cms_about->row('about');
        ?>
      <div class="footer-box">
        <h3>Alamat</h3>
        <a href="#"><?= $address; ?></a>
      </div>
      <div class="footer-box">
        <h3>Kontak</h3>
        <a href="#"><?= $phone; ?></a>
        <a href="#"><?= $email; ?></a>
        <?php
          $data_cms = $this->db->get('sosmed');
          $idsosmed = $data_cms->row('idsosmed');
          $facebook = $data_cms->row('facebook');
          $twitter = $data_cms->row('twitter');
          $instagram = $data_cms->row('instagram');
        ?>
        <div class="social">
          <a href="<?= $facebook; ?>"><i class="bx bxl-facebook"></i></a>
          <a href="<?= $twitter; ?>"><i class="bx bxl-twitter"></i></a>
          <a href="<?= $instagram; ?>"><i class="bx bxl-instagram"></i></a>
        </div>
      </div>
  </div>
</section>

<div class="copyright">
  <p>&#169; Vaksinasi Bitung</p>
</div>

<script>

    $(document).ready(function() {
        $(".preloader").fadeOut();
    });

</script>
</body>

</html