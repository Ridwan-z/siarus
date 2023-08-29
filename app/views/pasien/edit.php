<div class="body-wrapper">
      <!--  Header Start -->
      <header class="app-header">
        <nav class="navbar navbar-expand-lg navbar-light">
          <ul class="navbar-nav">
            <li class="nav-item d-block d-xl-none">
              <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                <i class="ti ti-menu-2"></i>
              </a>
            </li>
            
          </ul>
          <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
              <li class="nav-item dropdown">
                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  <img src="<?= base_url;?>/assets/images/profile/user-1.jpg" alt="" width="35" height="35" class="rounded-circle">
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                  <div class="message-body">
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-user fs-6"></i>
                      <p class="mb-0 fs-3">My Profile</p>
                    </a>
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-mail fs-6"></i>
                      <p class="mb-0 fs-3">My Account</p>
                    </a>
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-list-check fs-6"></i>
                      <p class="mb-0 fs-3">My Task</p>
                    </a>
                    <a href="<?= base_url; ?>/logout/logout" class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!--  Header End -->
      <div class="container-fluid">
      <div class="container-fluid">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title fw-semibold mb-4"><?=$data['title']?></h5>
              
              <form action="<?=base_url;?>/pasien/aksiUpdate" method="POST">
              <input type="hidden" name="id_pasien" value="<?=$data['pasien']['id_pasien']?>">
              <input type="hidden" name="provinsi" value="<?=$data['pasien']['provinsi']?>">
              <input type="hidden" name="kabupaten" value="<?=$data['pasien']['kabupaten']?>">
              <input type="hidden" name="kecamatan" value="<?=$data['pasien']['kecamatan']?>">
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">NIK</label>
                      <input type="text" class="form-control" name="nik" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?=$data['pasien']['nik']?>">
                    </div>
                    <div class="mb-3">  
                      <label for="exampleInputEmail1" class="form-label">Nama</label>
                      <input type="text" class="form-control" name="nama" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?=$data['pasien']['nama']?>">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Tanggal Lahir</label>
                      <input type="date" class="form-control" name="tgl_lahir" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?=$data['pasien']['tgl_lahir']?>">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
                      <input type="text" class="form-control" name="jenis_kelamin" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?=$data['pasien']['jenis_kelamin']?>">
                    </div>
                    <div class="mb-3">  
                      <label for="exampleInputEmail1" class="form-label">No HP</label>
                      <input type="text" class="form-control" name="no_hp" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?=$data['pasien']['no_hp']?>">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">No BPJS</label>
                      <input type="text" class="form-control" name="no_bpjs" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?=$data['pasien']['no_bpjs']?>">
                    </div>
                    <div class="mb-3">  
                      <label for="exampleInputEmail1" class="form-label">Alamat</label>
                      <input type="text" class="form-control" name="alamat" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?=$data['pasien']['alamat']?>">
                    </div>
                    <div class="mb-3">  
                      <label for="exampleInputEmail1" class="form-label">Kelurahan, Kecamatan</label>
                      <input type="text" class="form-control" name="kelurahan" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?=$data['pasien']['kelurahan']?>">
                    </div>
                    <div class="row">
                      <div class="col-6">
                        <a href="<?=base_url;?>/pasien" class="btn btn-danger">Kembali <i class="ti ti-arrow-back"></i></a>
                      </div>
                      <div class="col-6 text-end">
                        <button type="submit" class="btn btn-primary">Edit <i class="ti ti-user-plus"></i></button>
                      </div>
                    </div>
                  </form>
            </div>
          </div>
</div>
      </div>
    </div>
