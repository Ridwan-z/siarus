<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />

    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-xxp9SA3eT+q9hPv/Z8L5HRsh+aL4f6a0lLd4GxptXjFcDshkHTtDz5zvc2Em+P8" crossorigin="anonymous">

    <style>
      * {
        font-family: "Poppins", sans-serif;
      }

      .custom-bg {
        background-image: linear-gradient(
          white,
          #99ffbb
        ); /* Ganti dengan path ke gambar Anda */
        background-size: cover;
        background-position: center;
        color: white;
      }

      .navbar-nav .nav-item {
        margin-right: 20px;
      }

      .footer {
        background-color: #4caf50;
        color: white;
        padding: 20px 0;
      }

      .navbar-nav .nav-item.dropdown:hover .dropdown-menu {
        display: block;
        /* margin-top: 9px; */
      }

      .bg-hijau {
        background-color: #7aca95;
        width: 12%;
        margin: auto;
        border-radius: 20px;
      }
      .form-control:focus {
        box-shadow: 0 0 0 0.2rem rgba(89, 219, 119, 0.5);
      }
      .border-green{
        border:3px solid #7aca95;
        border-radius: 15px;
      }
      .bg-lokasi{
        background-color:#e5ffe6;
      }
      .bg-card{
        background-color:#7aca95;
        border-radius: 3rem;
      }

      .bb {
        border-bottom: 5px solid #08700b;
        /* height: 2px; */
      }

      .img-size {
        width: 1325px;
        height: 630px;
      }

      .img-content {
        width: 100%;
        height: 250px;
      }

      .card {
        overflow: hidden; /* Ensure the card clips the image overflow */
      }

      .card .card-img-top {
        transition: transform 0.3s ease;
      }

      .card-img-top:hover {
        transform: scale(1.1);
      }
    </style>

    <title>Puskesmas blablabla</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-light bg-light border-bottom">
      <div class="container">
        <a class="navbar-brand fw-bold" href="#">Puskesmas blablabla</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div
          class="collapse navbar-collapse justify-content-end"
          id="navbarNav"
        >
          <ul class="navbar-nav text-dark">
            <li class="nav-item active">
              <a class="nav-link text-dark" href="<?=base_url;?>/home">Beranda</a>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle text-dark"
                href="#"
                id="layananDropdown"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Layanan
              </a>
              <ul class="dropdown-menu my-2" aria-labelledby="layananDropdown">
                <li>
                  <a class="dropdown-item" href="#"
                    >Alur Pelayanan Puskesmas blablabla</a
                  >
                </li>
                <li>
                  <a class="dropdown-item" href="#"
                    >Jenis dan Jadwal Pelayanan</a
                  >
                </li>
                <li>
                  <a class="dropdown-item" href="#"
                    >Pendaftaran Online</a
                  >
                </li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle text-dark"
                href="#"
                id="tentangDropdown"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Tentang Kami
              </a>
              <ul class="dropdown-menu my-2" aria-labelledby="tentangDropdown">
                <li>
                  <a class="dropdown-item" href="#"
                    >Tim Kami</a
                  >
                </li>
                <li>
                  <a class="dropdown-item" href="#"
                    >Sejarah</a
                  >
                </li>
                <li>
                  <a class="dropdown-item" href="#"
                    >Visi dan Misi</a
                  >
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark" href="<?=base_url;?>/home/hubungi">Hubungi Kami</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white btn btn-success" href="<?=base_url;?>/login">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>