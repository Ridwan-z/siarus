
<div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
            <a href="<?=base_url;?>/dokter/tambah" class="btn btn-icon btn-outline-primary" style="margin: 0 0 5px 5px;"><span class="tf-icons bx bx-user-plus"></span></a>
            <?php
                    Flasher::Pesan();
                  ?> 
            <div class="card">
                <h5 class="card-header"><?=$data['title']?></h5>
                 <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                
                        <th>Nomor</th>
                        <th>Nama Dokter</th>
                        <th>Spesialisasi</th>
                        <th>Jadwal</th>
                        <th>Foto</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $no = 1;?>
                      <?php foreach ($data['dokter'] as $row) :?>
                      <tr>
                       
                        <td><?=$no?></td>
                        <td><?=$row['nama']?></td>
                        <td><?=$row['spesialisasi']?></td>
                        <td><?=$row['jam_mulai']?> - <?=$row['jam_selesai']?></td>
                        <td>
    <img src="<?= base_url; ?>/files/<?= $row['file']; ?>" alt="Foto Dokter" width="50" height="50" style="border-radius:50%;">
</td>
                        <td>
                          <a href="<?=base_url;?>/dokter/edit/<?=$row['id_dokter']?>" class="btn rounded-pill btn-icon btn-outline-warning"><span class="tf-icons bx bx-edit-alt"></span></a>
                          <button type="button" class="btn rounded-pill btn-icon btn-outline-danger" data-bs-toggle="modal"
                          data-bs-target="#modalToggle"><span class="tf-icons bx bx-trash-alt"></span></a>
                        </td>
                      </tr>
                        <?php $no++; endforeach;?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
</div>
<div
                          class="modal fade"
                          id="modalToggle"
                          aria-labelledby="modalToggleLabel"
                          tabindex="-1"
                          style="display: none"
                          aria-hidden="true"
                        >
                          <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                              <div class="modal-header">
                                <!-- <h5 class="modal-title" id="modalToggleLabel">Modal 1</h5> -->
                                
                              </div>
                              <div class="modal-body">Apakah anda yakin menghapus data ini ?</div>
                              <div class="modal-footer">
                              <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                  Tutup
                                </button>
                                <a href="<?=base_url;?>/dokter/hapus/<?=$row['id_dokter']?>"  class="btn btn-danger"
                                
                                  >Hapus</a>
                                
                                
                              </div>
                            </div>
                          </div>
