
    
<div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
            <?php
                    Flasher::Pesan();
                  ?> 
            <div class="card">
                <h5 class="card-header"><?=$data['title']?></h5>
                 <div class="table-responsive text-nowrap">
              a    <table class="table">
                    <thead>
                
                        <th>Nomor</th>
                        <th>NIK</th>
      <th>Nama</th>
      <th>Tanggal Lahir</th>
      <th>Jenis Kelamin</th>
      <th>Alamat</th>
      <th>NO BPJS</th>
      <th>NO HP</th>
      <th>Action</th>
                      
                        
                      </tr>
                    </thead>
                    <tbody>
                      <?php $no = 1;?>
                      <?php foreach ($data['pasien'] as $row) :?>
                      <tr>
                       
                        <td><?=$no?></td>
                        <td><?=$row['nik']?></td>
      <td><?=$row['nama']?></td>
      <td><?=$row['tgl_lahir']?></td>
      <td><?=$row['jenis_kelamin']?></td>
      <td><?=$row['alamat']?> - <?=$row['kelurahan']?> - <?=$row['kecamatan']?> - <?=$row['kabupaten']?> - <?=$row['provinsi']?></td>
      <td><?=$row['no_bpjs']?></td>
      <td><?=$row['no_hp']?></td>
                       
                        <td>
                          <a href="<?=base_url;?>/pasien/edit/<?=$row['id_pasien']?>" class="btn rounded-pill btn-icon btn-outline-warning"><span class="tf-icons bx bx-edit-alt"></span></a>
                          <a href="<?=base_url;?>/pasien/hapus/<?=$row['id_pasien']?>" class="btn rounded-pill btn-icon btn-outline-danger" onclick="return confirm('Apakah anda yakin menghapus data ini?');"><span class="tf-icons bx bx-trash-alt"></span></a>
                          </td>
                      </tr>
                        <?php $no++; endforeach;?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
</div>
