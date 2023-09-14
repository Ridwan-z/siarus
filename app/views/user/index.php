
<div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
            <a href="<?=base_url;?>/user/tambah" class="btn btn-icon btn-outline-primary" style="margin: 0 0 5px 5px;"><span class="tf-icons bx bx-user-plus"></span></a>
            <?php
                    Flasher::Pesan();
                  ?> 
            <div class="card">
                <h5 class="card-header"><?=$data['title']?></h5>
                 <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                
                        <th>Nomor</th>
                        <th>Username</th>
                        <th>Level</th>
                        <th>NIK</th>
                        <th>Foto</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $no = 1;?>
                      <?php foreach ($data['user'] as $row) :?>
                      <tr>
                       
                        <td><?=$no?></td>
                        <td><?=$row['username']?></td>
                        <td><?=$row['lvl']?></td>
                        <td><?=$row['nik']?> </td>
                        
                        <td>
    <img src="<?= base_url; ?>/files/<?= $row['file']; ?>" alt="Foto Dokter" width="50" height="50" style="border-radius:50%;">
</td>
                        <td>
                          <a href="<?=base_url;?>/user/hapus/<?=$row['id_user']?>" class="btn rounded-pill btn-icon btn-outline-danger" onclick="return confirm('Apakah anda yakin menghapus data ini?');"><span class="tf-icons bx bx-trash-alt"></span></a>
                          </td>
                      </tr>
                        <?php $no++; endforeach;?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
</div>
