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
              
              <form action="<?=base_url;?>/antrian/aksiUpdate" method="POST">
              <input type="hidden" name="id_antrian" value="<?=$data['antrian']['id_antrian']?>">
              <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Pasien</label>
                      <select class="form-select" aria-label="Default select example" name="id_pasien">
                      <?php foreach ($data['pasien'] as $row):?>
                            
                              <option value="<?=$row['id_pasien']?>"><?=$row['nama']?></option>
                          <?php endforeach;?>
                      </select>
                    </div>
                    <div class="mb-3">  
                      <label for="exampleInputEmail1" class="form-label">Tanggal Antrian</label>
                      <input type="date" class="form-control" name="tgl_antrian" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?=$data['antrian']['tgl_antrian']?>">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Keluhan</label>
                      <input type="text" class="form-control" name="keluhan" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?=$data['antrian']['keluhan']?>">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Dokter</label>
                      <select class="form-select" aria-label="Default select example" name="id_dokter">
                      <?php foreach ($data['dokter'] as $row):?>
                            
                              <option value="<?=$row['id_dokter']?>"><?=$row['nama']?></option>
                          <?php endforeach;?>
                      </select>
                    </div>
                    <div class="row">
                      <div class="col-6">
                        <a href="<?=base_url;?>/antrian" class="btn btn-danger">Kembali <i class="ti ti-arrow-back"></i></a>
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
