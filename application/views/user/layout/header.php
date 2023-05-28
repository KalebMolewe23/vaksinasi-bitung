<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $title; ?></title>
  <!-- Link To CSS -->
  <link rel="stylesheet" href="<?= base_url('assets/user/css/style.css'); ?>">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!-- Box Icons -->
  <link  rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

  <!-- leaflet library -->
  <link rel="shortcut icon" type="image/x-icon" href="docs/images/favicon.ico" />

  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin=""/>
  <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>

  <?php
        $data_cms = $this->db->get('background');
        $bg_name = $data_cms->row('bg_name');
        $bg_color = $data_cms->row('bg_color');
        $bg_color_second = $data_cms->row('bg_color_second');
    ?>

	<style>
    :root {
      --main-color: <?= $bg_color ?>;
      --second-color: rgb(116, 9, 9);
      --text-color: #314862; 
      --bg-color: #fff;

      --box-shadow: 2px 2px 18px rgb(14 52 54 / 15%);
    }
		html, body {
			height: 100%;
			margin: 0;
		}

    .home{
      margin-top: 5rem;
      background: url("https://imgx.gridoto.com/crop/120x78:939x538/700x465/photo/2022/02/25/whatsapp-image-2022-02-25-at-16-20220225062244.jpeg");
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center;
      height: 440px;
      border-radius: 1.5rem;
      display: flex;
      align-items: center;
    }

    .home-text {
      padding-left: 35px;
    }

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

    .home-text h1{
      color: var(--bg-color);
      font-size: 2rem;
      margin-bottom: 1rem;
    }
    .card {
      box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
      transition: 0.3s;
      width: 100%;
    }

    .card:hover {
      box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
    }

    table, th, td {
      border: 1px solid;
    }
		.leaflet-container {
			height: 400px;
			width: 600px;
			max-width: 100%;
			max-height: 150%;
		}
    .modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 100; /* Sit on top */
    padding-top: 100px; Location of the box
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    -webkit-animation-name: fadeIn; /* Fade in the background */
    -webkit-animation-duration: 0.4s;
    animation-name: fadeIn;
    animation-duration: 0.4s
  }

  /* Modal Content */
  .modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 40px;
    border: 1px solid #888;
    width: 60%;
    -webkit-animation-name: slideIn;
    -webkit-animation-duration: 0.4s;
    animation-name: slideIn;
    animation-duration: 0.4s
  }

  /* The Close Button */
  .close {
    color: white;
    float: right;
    font-size: 18px;
    font-weight: bold;
  }

  .close:hover,
  .close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
  }

  /* The Close Button */
  .close2020 {
    color: white;
    float: right;
    font-size: 18px;
    font-weight: bold;
  }

  .close2020:hover,
  .close2020:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
  }

  .close2018 {
    color: white;
    float: right;
    font-size: 18px;
    font-weight: bold;
  }

  .close2018:hover,
  .close2018:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
  }

  .modal-header {
    padding: 10px 14px;
    background-color: red;
    color: white;
  }

  .modal-body {
    padding: 2px 16px;
  }

  .modal-footer {
    padding: 2px 16px;
    background-color: #fff;
    color: white;
  }

  /* Add Animation */
  @-webkit-keyframes slideIn {
    from {bottom: -300px; opacity: 0} 
    to {bottom: 0; opacity: 1}
  }

  @keyframes slideIn {
    from {bottom: -300px; opacity: 0}
    to {bottom: 0; opacity: 1}
  }

  @-webkit-keyframes fadeIn {
    from {opacity: 0} 
    to {opacity: 1}
  }

  @keyframes fadeIn {
    from {opacity: 0} 
    to {opacity: 1}
}

	</style>
</head>
<body>
<header>
  <div class="nav container">
    <a href="<?= base_url('home'); ?>" class="logo"><i class="bx bx-home"></i><?= $bg_name; ?></a>

    <input type="checkbox" name="" id="menu">
    <label for="menu" <i class="bx bx-menu" id="menu-icon"></i></label>

    <ul class="navbar">
      <li><a href="#home">Home</a></li>
      <li><a href="#pemetaan">Pemetaan</a></li>
      <li><a href="#data">Data Malaria</a></li>
      <li><a href="#about">Tentang Kami</a></li>
    </ul>

    <a href="#" class="btn">Kontak Kami</a>
  </div>
</header>