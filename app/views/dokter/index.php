
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
      <?php
                    Flasher::Pesan();
                  ?> 
          <div class="card">
            <div class="card-body">
              <h5 class="card-title fw-semibold mb-4"><?=$data['title']?></h5>
              <a href="<?=base_url;?>/dokter/tambah" class="btn btn-info">Add <i class="ti ti-user-plus"></i></a>
              <br></br>
              <table class="table table-striped">
  <thead>
    <tr>  
        <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Spesialisasi</th>
      <th scope="col">Jadwal</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php $no=1; ?> 
    <?php foreach ($data['dokter'] as $row) :?>
    <tr>
        <td><?=$no?></td>
      <td><?=$row['nama']?></td>
      <td><?=$row['spesialisasi']?></td>
      <td><?=$row['jam_mulai']?> - <?=$row['jam_selesai']?></td>
      <td>
        <a href="<?=base_url;?>/dokter/edit/<?= $row['id_dokter'] ?>" class="btn btn-warning">Edit <i class="ti ti-edit"></i></a> | 
        <a href="<?=base_url;?>/dokter/hapus/<?= $row['id_dokter'] ?>" class="btn btn-danger" onclick="return confirm('Hapus data?');">Delete <i class="ti ti-trash"></i></a>
      </td>
    </tr>
    <?php $no++; endforeach; ?> 
  </tbody>
</table>
             
            </div>
          </div>
</div>
      </div>
    </div>