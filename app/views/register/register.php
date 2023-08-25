<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= $data['title']?></title>
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
      body {
        background-color: rgba(123, 242, 151, 0.5);
      }
      .form-control:focus {
        box-shadow: 0 0 0 0.2rem rgba(89, 219, 119, 0.5);
      }

      .center-vertically {
        min-height: 100vh;
        display: flex;
        align-items: center;
      }
      .rm {
        display: flex;
        flex-wrap: wrap;
        margin: auto;
      }
      .p-10 {
        padding: 3rem !important;
      }
      .align-right {
        display: flex;
        justify-content: flex-end;
      }

      .row-checkbox {
        --bs-gutter-x: 1.5rem;
        --bs-gutter-y: 0;
        display: flex;
        flex-wrap: wrap;
        margin-top: 7px;
        margin-right: calc(var(--bs-gutter-x) * -0.5);
      }

      .footer {
        background-color: #4caf50;
        color: white;
        padding: 20px 0;
      }

    </style>
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
          
          </div>
        </div>
      </nav>
      <div class="container py-3 h-100">
        <form action="<?=base_url;?>/register/aksi" method="post">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">NIK</label>
            <input
              type="text"
              name="nik"
              class="form-control"
              id="exampleInputEmail1"
              aria-describedby="emailHelp"
            />
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label"
              >Nama Lengkap</label
            >
            <input
              type="text"
              name="nama"
              class="form-control"
              id="exampleInputEmail1"
              aria-describedby="emailHelp"
            />
          </div>
          <div class="row">
            <div class="col-6">

            
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label"
              >Tanggal lahir</label
            >
            <input
              type="date"
              name="tgl_lahir"
              class="form-control"
              id="exampleInputEmail1"
              aria-describedby="emailHelp"
            />
          </div>
        </div>
        <div class="col-6">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
            <div class="row-checkbox">
              <div class="form-check col-3">
                <input
                  class="form-check-input"
                  type="radio"
                  name="jenis_kelamin"
                  value="Laki-Laki"
                  id="flexRadioDefault1"
                />
                <label class="form-check-label" for="flexRadioDefault1">
                  Laki-laki
                </label>
              </div>
              <div class="form-check col-3">
                <input
                  class="form-check-input"
                  type="radio"
                  name="jenis_kelamin"
                  value="Perempuan"
                  id="flexRadioDefault1"
                />
                <label class="form-check-label" for="flexRadioDefault1">
                  Perempuan
                </label>
              </div>
            </div>
          </div>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">No HP</label>
            <input
              type="number"
              name="no_hp"
              class="form-control"
              id="exampleInputEmail1"
              aria-describedby="emailHelp"
            />
          </div>
          </div>
          <div class="col-6">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Alamat</label>
            <input
              type="text"
              name="alamat"
              placeholder="Jalan, RT/RW"
              class="form-control"
              id="exampleInputEmail1"
              aria-describedby="emailHelp"
            />
          </div>
        </div>
    </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">No BPJS</label>
            <input
              type="number"
              name="no_bpjs"
              class="form-control"
              id="exampleInputEmail1"
              aria-describedby="emailHelp"
            />
          </div>
          <p class="text-danger">*Abaikan jika tidak ada</p>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Kelurahan, Kecamatan</label>
            <input
              type="text"
              name="kelurahan"
              placeholder="Pilih Kelurahan dan kecamatan..."
              class="form-control"
              id="exampleInputEmail1"
              aria-describedby="emailHelp"
            />
          </div>
          
          <p class="fs-6">
            Sudah memiliki akun? Silahkan <a href="<?=base_url;?>/login">Masuk</a>
          </p>
          <div class="mb-5 align-right">
            <!-- Added align-right class here -->
            <button type="submit" class="btn btn-success mb-3">Register</button>
          </div>
        </form>
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
