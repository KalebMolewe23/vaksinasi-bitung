<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>

    <title><?= $title; ?></title>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <link rel="stylesheet" href="<?= base_url() ?>assets/css_admin/style.css">
    <!-- Boxiocns CDN Link -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        .preloader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 9999;
            background-color: #fff;
        }

        .preloader .loading {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            font: 14px arial;
        }
    </style>

</head>

<body>

<div class="sidebar close">
        <div class="logo-details">
            <i class='bx bxs-virus'></i>
            <span class="logo_name">MALARIA</span>
        </div>
        <ul class="nav-links">
            <li>
                <div class="iocn-link">
                    <a href="<?= base_url("data/index"); ?>">
                        <i class='bx bxs-book-alt'></i>
                        <span class="link_name">Informasi</span>
                    </a>
                    <!-- <i class='bx bxs-chevron-down arrow'></i> -->
                </div>
                <!-- <ul class="sub-menu">
                    <li><a class="link_name" href="#">Informasi</a></li>
                    <li><a href="<?= base_url("data/index"); ?>">Data 2019</a></li>
                    <li><a href="<?= base_url("data/data_2020"); ?>">Data 2020</a></li>
                </ul> -->
            </li>
            <li>
                <div class="iocn-link">
                    <a href="#">
                        <i class='bx bx-sitemap'></i>
                        <span class="link_name">K-Means</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="#">K-Means</a></li>
                    <li><a href="<?= base_url("kmeans/index"); ?>">Perhitungan K-means</a></li>
                    <li><a href="<?= base_url("kmeans/iterasi_kmeans_hasil"); ?>">Hasil K-Means</a></li>
                </ul>
            </li>
            
        </ul>
    </div>

    <section class="section-p1">
        <div class="preloader">
            <div class="loading">
                <img src="<?= base_url('assets/image/loading.gif'); ?>" width="120">
                <p><strong>Harap Tunggu</strong></p>
            </div>
        </div>
    </section>

<section class="home-section">

    <div class="home-content">
        <i class='bx bx-menu'></i>
        <span class="text"><i class='bx bxs-home'></i> Generate Proccess Kmeans</span>
    </div>

    <main>
        <div class="container-fluid">

          <form class="form-kmeans">
            <hr />
            <a href="javascript:;void(0);" id="buttonOne">Masukkan Nilai K</a>
            <hr />

            <button type="button" id="link" class="btn btn-primary">Generate</button>
          </form>
        </div>
    </main>
</section>

<script type="text/javascript">
  var sequence = 0;
  $(document).ready(function () {
    $("#buttonOne").click(function () {
      $("form").prepend(
        "<input name=name" +
          sequence +
          " placeholder='Masukkan Nilai K' type='text' /> <br/> "
      );
      sequence++;
    });

    $("#link").on('click', function (e) {
      $("input[type=text]").each(function () {
        if ($(this).val() == "") $(this).remove();
      });

      var size = $("input[type=text]").size();
      console.log(size);

      if (size >= 2) {
        random_number = parseInt(Math.random() * size);
        console.log(random_number);

        var link = "http://localhost/malaria-kmeans/kmeans/" + $('input[type=text]:eq('+random_number+')').val();
        window.location.href = link;

      } else {
        alert("Minimal 2 data, Agar Dapat Digenerate Dengan Benar");
      }
      return false;
    });
  });
</script>
<script>
        let arrow = document.querySelectorAll(".arrow");
        for (var i = 0; i < arrow.length; i++) {
            arrow[i].addEventListener("click", (e) => {
                let arrowParent = e.target.parentElement.parentElement; //selecting main parent of arrow
                arrowParent.classList.toggle("showMenu");
            });
        }
        let sidebar = document.querySelector(".sidebar");
        let sidebarBtn = document.querySelector(".bx-menu");
        console.log(sidebarBtn);
        sidebarBtn.addEventListener("click", () => {
            sidebar.classList.toggle("close");
        });

        $(document).ready(function() {
            $(".preloader").fadeOut();
        })
    </script>
</body>
</html>