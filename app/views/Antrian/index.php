
<div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">

            <a href="<?=base_url;?>/antrian/tambah" class="btn btn-icon btn-outline-primary" style="margin: 0 0 5px 5px;"><span class="tf-icons bx bx-user-plus"></span></a> 
                 
            <?php
                    Flasher::Pesan();
                  ?> 
            <div class="card">
                <h5 class="card-header"><?=$data['title']?></h5>
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                        <th>Nomor</th>
                        <th>Pasien</th>
                        <th>Tanggal Antrian</th>
                        <th>Keluhan</th>
                        <th>Dokter</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $no = 1;?>
                      <?php foreach ($data['antrian'] as $row) :?>
                      <tr>                      
                        <td><?=$no?></td>
                        <td><?=$row['nama_pasien']?></td>
                        <td><?=$row['tgl_antrian']?></td>
                        <td><?=$row['keluhan']?></td>
                        <td><?=$row['nama_dokter']?></td>                       
                        <td>
                          <a href="<?=base_url;?>/antrian/edit/<?=$row['id_antrian']?>" class="btn rounded-pill btn-icon btn-outline-warning"><span class="tf-icons bx bx-edit-alt"></span></a>
                          <a href="<?=base_url;?>/antrian/hapus/<?=$row['id_antrian']?>" class="btn rounded-pill btn-icon btn-outline-danger" onclick="return confirm('Apakah anda yakin menghapus data ini?');"><span class="tf-icons bx bx-trash-alt"></span></a>
                          </td>
                      </tr>
                        <?php $no++; endforeach;?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
</div>
