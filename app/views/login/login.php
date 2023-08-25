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
    </style>
  </head>
  <body>
    <section class="vh-100">
      <div class="container py-5 h-100">
        <div class="row d-flex align-items-center justify-content-center h-100">
          <div class="col-md-8 col-lg-7 col-xl-6">
            <a href="<?=base_url;?>">
            <img src="<?=base_url;?>/img/login.png" class="img-fluid"/>
            </a>
          </div>
          <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
            <p class="fw-bold fs-2">Pendaftaran Online</p>
          
                <p class="fs-5">Puskesmas blablabla</p>
               

            <?php
                    Flasher::Pesan();
                  ?> 
            <form action="<?= base_url; ?>/login/aksi" method="post">
              <div class="mb-3">
                <input
                  type="text"
                  placeholder="Masukkan NIK / No BPJS"
                  class="form-control"
                  name="identifier"
                  required
                />
              </div>

              <button type="submit" class="btn btn-success mb-3">Masuk</button>

              <p class="fs-6">
                Belum memiliki akun? Silahkan <a href="<?=base_url;?>/register">Daftar</a>
              </p>
            </form>
          </div>
        </div>
      </div>
    </section>
   <script>
      setTimeout(function(){
          var flashMessage = document.getElementById('flash-message');
          if (flashMessage) {
              flashMessage.style.display = 'none';
          }
      }, 2000);
   </script>
  </body>
</html>
