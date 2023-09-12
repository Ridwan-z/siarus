
<div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
            <a href="<?=base_url;?>/jadwal/tambah" class="btn btn-icon btn-outline-primary" style="margin: 0 0 5px 5px;"><span class="tf-icons bx bx-user-plus"></span></a>
            <?php
                    Flasher::Pesan();
                  ?> 
            <div class="card">
                <h5 class="card-header"><?=$data['title']?></h5>
                 <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                
                        <th>Nomor</th>
                        <th>Hari</th>
                        <th>Jam - mulai</th>
                        <th>Jam - selesai</th>
                      
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $no = 1;?>
                      <?php foreach ($data['jadwal'] as $row) :?>
                      <tr>
                       
                        <td><?=$no?></td>
                        <td><?=$row['hari']?></td>
                        <td><?=$row['jam_mulai']?></td>
                        <td><?=$row['jam_selesai']?> </td>
                       
                        <td>
                          <a href="<?=base_url;?>/jadwal/edit/<?=$row['id_jadwal']?>" class="btn rounded-pill btn-icon btn-outline-warning"><span class="tf-icons bx bx-edit-alt"></span></a>
                          <a href="<?=base_url;?>/jadwal/hapus/<?=$row['id_jadwal']?>" class="btn rounded-pill btn-icon btn-outline-danger" onclick="return confirm('Apakah anda yakin menghapus data ini?');"><span class="tf-icons bx bx-trash-alt"></span></a>
                          </td>
                      </tr>
                        <?php $no++; endforeach;?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
</div>
