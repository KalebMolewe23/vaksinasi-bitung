<section class="home-section">

    <div class="home-content">
        <i class='bx bx-menu'></i>
        <span class="text"><i class='bx bxs-home'></i> Home</span>
    </div>

    <main>
        <div class="container-fluid">
            <h3><strong>Data Vaksinasi COVID-19</strong></h3>
            <p>[Kecamatan lowokwaru]</p><br>
            <div class="row">
                <div class="col-sm">
                    <div class="card">
                        <div class="card-header">
                            <strong>Total Vaksinasi Dosis 1</strong>
                        </div>
                        <div class="card-body">
                            <?php $sum = 0;
                            foreach ($vaksin as $inv) : ?>
                            <?php endforeach; ?>
                            <center><?= $sum += round(($inv->total / $inv->totalp) * 100, 0); ?>%</center>
                            <?php $nilaivaksin1 = $sum; ?>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: <?= $nilaivaksin1; ?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="card">
                        <div class="card-header">
                            <strong>Total Vaksinasi Dosis 2</strong>
                        </div>
                        <div class="card-body">
                            <?php $sum = 0;
                            foreach ($vaksin1 as $inv1) : ?>
                            <?php endforeach; ?>
                            <center><?= $sum += round(($inv1->total / $inv1->totalp) * 100, 0); ?>%</center>
                            <?php $nilaivaksin2 = $sum; ?>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: <?= $nilaivaksin2; ?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="card">
                        <div class="card-header">
                            <strong>Total Vaksinasi Dosis 3</strong>
                        </div>
                        <div class="card-body">
                            <?php $sum = 0;
                            foreach ($vaksin2 as $inv2) : ?>
                            <?php endforeach; ?>
                            <center><?= $sum += round(($inv2->total / $inv2->totalp) * 100, 0); ?>%</center>
                            <?php $nilaivaksin3 = $sum; ?>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: <?= $nilaivaksin3; ?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><br><br>
            <h3><strong>Data Pemetaan Kecamatan Lowokwaru</strong></h3>
            <div class="container">
                <ol style="list-style-type:square; width: 600px;">
                    <li style="float: left; color:red; width: 200px; padding: 2px 0px;">Zona Merah</li>
                    <li style="float: left; color:yellow; width: 200px; padding: 2px 0px;">Zona Kuning</li>
                    <li style="float: left; color:green; width: 200px; padding: 2px 0px;">Zona Hijau</li>
                </ol>
            </div><br><br>
            <div align="center">
                <div class="map-wrapper" id="map" style="width: 1110px; height: 800px;"></div>
            </div>
        </div>
    </main>

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

    <?php foreach ($bitung as $data => $value) { ?>
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