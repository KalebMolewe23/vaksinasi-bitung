<section class="home container" id="home">
  <div class="home-text">
    <h1>Informasi Data Vaksinasi <br>Kota Bitung.</h1>
    <a href="#about" class="btn">Info Selengkapnya</a>
  </div>
</section><br><br>

<section class="data container">
    <h1>Informasi Pemetaan Vaksinasi Di Kota Bitung</h1>
</section>

<section class="pemetaan container" id="pemetaan">
    <div id="map" style="width: 100%; height: 600px; z-index: 99;" class="home-text"></div>
</section>

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

<section class="data container" id="data">
  <!-- box 1 -->
  <div class="box">
    <i class='bx bx-user'></i>
    <h3>Masukan Untuk Kami</h3>
    <p><?= $media1; ?></p>
  </div>
  <!-- box 2 -->
  <div class="box">
    <i class='bx bx-desktop'></i>
    <h3>Hubungi Kami</h3>
    <p><?= $media2; ?></p>
  </div>
  <!-- box 3 -->
  <div class="box">
    <i class='bx bx-home-alt'></i>
    <h3>Info Lengkap Manokwari</h3>
    <p><?= $media1; ?></p>
  </div>
</section>

<section class="about container" id="about">
  <div class="about-img">
    <img src="<?= base_url('assets/user/malaria.jpg') ?>" alt="" width="500px">
  </div>
  <div class="about-text">
    <span>About Us</span>
    <h2>Informasi Malaria Pada Manokwari<br> Papua Barat</h2>
    <p><?= $about; ?></p>
  </div>
</section>

<section class="section-p1">
    <div class="preloader">
        <div class="loading">
            <img src="<?= base_url('assets/image/loading.gif'); ?>" width="120">
            <p><strong>Harap Tunggu</strong></p>
        </div>
    </div>
</section>

<script>

	const map = L.map('map').setView([1.45697, 125.1895], 12);

	const tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
		maxZoom: 19,
		attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
	}).addTo(map);

    var icon = L.icon({
        iconUrl: '<?= base_url('assets/icon/rs.png') ?>',
        iconSize: [50, 60],
        iconAnchor: [22, 65],
        popupAnchor: [-3, -55]
    });

    console.log(icon);

    <?php foreach ($bitung as $data => $value) { ?>
        L.marker([<?= $value->lat ?>, <?= $value->lng ?>], {
            icon: icon
        }).addTo(map).bindPopup("Nama Puskesmas : <?= $value->nama_puskesmas ?>");
        $.getJSON("<?= base_url('assets/geojson/' . $value->geojson) ?>", function(data) {
            geoLayer = L.geoJson(data, {
                style: function(feater) {
                    return {
                        opacity: 0.5,
                        color: 'yellow',
                        fillcolor: '#FFFF00',
                    }
                },
            }).addTo(map);

            geoLayer.eachLayer(function(layer) {
                layer.bindPopup("Kel. <?= $value->area_name ?><br>Vaksin -1: <?= number_format($value->not_vaccine1) ?>%<br>Vaksin -2: <?= number_format($value->not_vaccine2) ?>%<br>Vaksin -3: <?= number_format($value->not_vaccine3) ?>%");
            });
        });

    <?php } ?>

    <?php foreach ($bitung2 as $data => $value1) { ?>
        L.marker([<?= $value1->lat ?>, <?= $value1->lng ?>], {
            icon: icon
        }).addTo(map).bindPopup("Nama Puskesmas : <?= $value1->nama_puskesmas ?>");
        $.getJSON("<?= base_url('assets/geojson/' . $value1->geojson) ?>", function(data) {
            geoLayer = L.geoJson(data, {
                style: function(feater) {
                    return {
                        opacity: 0.5,
                        color: 'red',
                        fillcolor: '#FFFF00',
                    }
                },
            }).addTo(map);

            geoLayer.eachLayer(function(layer) {
                layer.bindPopup("Kel. <?= $value1->area_name ?><br>Vaksin -1: <?= number_format($value1->not_vaccine1) ?>%<br>Vaksin -2: <?= number_format($value1->not_vaccine2) ?>%<br>Vaksin -3: <?= number_format($value1->not_vaccine3) ?>%");
            });
        });

    <?php } ?>

    <?php foreach ($bitung3 as $data => $value2) { ?>
        L.marker([<?= $value2->lat ?>, <?= $value2->lng ?>], {
            icon: icon
        }).addTo(map).bindPopup("Nama Puskesmas : <?= $value2->nama_puskesmas ?>");
        $.getJSON("<?= base_url('assets/geojson/' . $value2->geojson) ?>", function(data) {
            geoLayer = L.geoJson(data, {
                style: function(feater) {
                    return {
                        opacity: 0.5,
                        color: 'green',
                        fillcolor: '#FFFF00',
                    }
                },
            }).addTo(map);

            geoLayer.eachLayer(function(layer) {
                layer.bindPopup("Kel. <?= $value2->area_name ?><br>Vaksin -1: <?= number_format($value2->not_vaccine1) ?>%<br>Vaksin -2: <?= number_format($value2->not_vaccine2) ?>%<br>Vaksin -3: <?= number_format($value2->not_vaccine3) ?>%");
            });
        });

    <?php } ?>
</script>