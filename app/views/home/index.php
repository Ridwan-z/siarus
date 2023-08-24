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
              <a class="nav-link text-dark" href="#">Hubungi Kami</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white btn btn-success" href="<?=base_url;?>/login">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container-xxl">
      <div class="row justify-content-center">
        <div class="col-md-12 custom-bg text-center">
          <!-- Menggunakan col-md-12 untuk latar belakang -->
          <div class="col-md-6 py-5 align-items-center mx-auto">
            <!-- Menggunakan col-md-6 untuk konten dan mx-auto untuk menengahkan konten -->
            <img src="<?=base_url;?>/img/Lambang-Puskesmas.png" width="20%" alt="" />
            <h1 class="fw-bold text-dark py-3">
              Selamat Datang di Website Resmi Puskesmas blablabla
            </h1>
            <div class="container py-3 text-dark text-justify">
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Alias,
              incidunt ad placeat cumque sint, libero nostrum dolorum, dicta
              nulla voluptatibus temporibus id vel enim? Voluptatem quod fugiat
              at quis assumenda.Lorem ipsum dolor, sit amet consectetur
              adipisicing elit. Alias, incidunt ad placeat cumque sint, libero
              nostrum dolorum, dicta nulla voluptatibus temporibus id vel enim?
              Voluptatem quod fugiat at quis assumenda.
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container-xxl py-3">
      <div
        id="carouselExampleControls"
        class="carousel slide"
        data-bs-ride="carousel"
      >
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="<?=base_url;?>/img/germas1.jpg" class="d-block img-size" alt="..." />
          </div>
          <div class="carousel-item">
            <img src="<?=base_url;?>/img/germas2.jpg" class="d-block img-size" alt="..." />
          </div>
          <div class="carousel-item">
            <img src="<?=base_url;?>/img/germas3.jpg" class="d-block img-size" alt="..." />
          </div>
        </div>
        <button
          class="carousel-control-prev"
          type="button"
          data-bs-target="#carouselExampleControls"
          data-bs-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button
          class="carousel-control-next"
          type="button"
          data-bs-target="#carouselExampleControls"
          data-bs-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>

    <h2 class="p-3 mb-5 my-5 text-center bg-hijau text-white bb">Berita</h2>

    <div class="container py-1">
      <div class="row">
        <div class="col-4">
          <div class="card border-success mb-3 bb">
            <img
              src="<?=base_url;?>/img/1.jpeg"
              class="card-img-top img-content"
              alt="..."
            />
            <div class="card-body">
              <h5 class="card-title">First Content</h5>
              <p class="card-text">
                This is a wider card with supporting text below as a natural
                lead-in to additional content. This content is a little bit
                longer.
              </p>
              <!-- <p class="card-text">
                <small class="text-muted">Last updated 3 mins ago</small>
              </p> -->
            </div>
          </div>
        </div>
        <div class="col-4">
          <div class="card border-success mb-3 bb">
            <img src="<?=base_url;?>/img/2.jpg" class="card-img-top img-content" alt="..." />
            <div class="card-body">
              <h5 class="card-title">First Content</h5>
              <p class="card-text">
                This is a wider card with supporting text below as a natural
                lead-in to additional content. This content is a little bit
                longer.
              </p>
              <!-- <p class="card-text">
                <small class="text-muted">Last updated 3 mins ago</small>
              </p> -->
            </div>
          </div>
        </div>
        <div class="col-4">
          <div class="card border-success mb-3 bb">
            <img
              src="<?=base_url;?>/img/3.jpeg"
              class="card-img-top img-content"
              alt="..."
            />
            <div class="card-body">
              <h5 class="card-title">Second Content</h5>
              <p class="card-text">
                This is a wider card with supporting text below as a natural
                lead-in to additional content. This content is a little bit
                longer.
              </p>
              <!-- <p class="card-text">
                <small class="text-muted">Last updated 3 mins ago</small>
              </p> -->
            </div>
          </div>
        </div>
      </div>
      <div class="row my-5">
        <div class="col-4">
          <div class="card border-success mb-3 bb">
            <img
              src="<?=base_url;?>/img/4.jpeg"
              class="card-img-top img-content"
              alt="..."
            />
            <div class="card-body">
              <h5 class="card-title">Third Content</h5>
              <p class="card-text">
                This is a wider card with supporting text below as a natural
                lead-in to additional content. This content is a little bit
                longer.
              </p>
              <!-- <p class="card-text">
                <small class="text-muted">Last updated 3 mins ago</small>
              </p> -->
            </div>
          </div>
        </div>
        <div class="col-4">
          <div class="card border-success mb-3 bb">
            <img src="<?=base_url;?>/img/5.jpg" class="card-img-top img-content" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Third Content</h5>
              <p class="card-text">
                This is a wider card with supporting text below as a natural
                lead-in to additional content. This content is a little bit
                longer.
              </p>
              <!-- <p class="card-text">
                <small class="text-muted">Last updated 3 mins ago</small>
              </p> -->
            </div>
          </div>
        </div>
        <div class="col-4">
          <div class="card border-success mb-3 bb">
            <img
              src="<?=base_url;?>/img/6.jpeg"
              class="card-img-top img-content"
              alt="..."
            />
            <div class="card-body">
              <h5 class="card-title">Fourth Content</h5>
              <p class="card-text">
                This is a wider card with supporting text below as a natural
                lead-in to additional content. This content is a little bit
                longer.
              </p>
              <!-- <p class="card-text">
                <small class="text-muted">Last updated 3 mins ago</small>
              </p> -->
            </div>
          </div>
        </div>
      </div>
    </div>

    <footer class="footer">
      <div class="container text-center">
        <p>© Copyright 2023 | All Rights Reserved</p>
      </div>
    </footer>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
