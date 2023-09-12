
    <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                      <h5 class="mb-0"><?=$data['title']?></h5>
                      <!-- <small class="text-muted float-end">Merged input group</small> -->
                    </div>
                    <div class="card-body">
                      <form action="<?=base_url;?>/dokter/aksiUpdate" method="POST" enctype="multipart/form-data">
                      <input type="hidden" name="id_dokter" value="<?=$data['dokter']['id_dokter']?>">
                      <input style='text-transform:uppercase' type="hidden" name="fileLama" class="form-control" value="<?=$data['dokter']['file']; ?>" hidden>
                        <div class="mb-3">
                          <label class="form-label" for="basic-icon-default-fullname">Nama Lengkap</label>
                          <div class="input-group input-group-merge">
                            <span id="basic-icon-default-fullname2" class="input-group-text"
                              ><i class="bx bx-user"></i
                            ></span>
                            <input
                              type="text"
                              class="form-control"
                              name="nama"
                              value="<?=$data['dokter']['nama']?>"
                              id="basic-icon-default-fullname"
                              placeholder="Dr. Suyadi"
                              aria-label="John Doe"
                              aria-describedby="basic-icon-default-fullname2"
                            />
                          </div>
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-icon-default-company">Spesialisasi</label>
                          <div class="input-group input-group-merge">
                            <span id="basic-icon-default-company2" class="input-group-text"
                              ><i class="bx bx-detail"></i
                            ></span>
                            <input
                              type="text"
                              id="basic-icon-default-company"
                              name="spesialisasi"
                              value="<?=$data['dokter']['spesialisasi']?>"
                              class="form-control"
                              placeholder="Dokter Gigi"
                              aria-label="ACME Inc."
                              aria-describedby="basic-icon-default-company2"
                            />
                          </div>
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-icon-default-email">Jadwal</label>
                          <div class="input-group input-group-merge">
                            <span class="input-group-text"><i class="bx bx-time-five"></i></span>
                            <select class="form-select" aria-label="Default select example" name="id_jadwal">
                        <!-- <option value="">Pilih Jadwal...</option>     -->
                      <?php foreach ($data['jadwal'] as $row):?>
                            
                              <option value="<?=$row['id_jadwal']?>"><?=$row['jam_mulai']?> - <?=$row['jam_selesai']?></option>
                          <?php endforeach;?>
                      </select>
                            <!-- <span id="basic-icon-default-email2" class="input-group-text">@example.com</span> -->
                          </div>
                          <!-- <div class="form-text">You can use letters, numbers & periods</div> -->
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-icon-default-company">Foto (.Jpg .Jpeg .Png)</label>
                          <br>
                          <?php $file = base_url . '/files/' .$data['dokter']['file'] ?>
                    
                        <img src="<?= $file ?>" style="width: 200px; height:200px; margin-bottom: 15px; border-radius:50%;">
                      
                          <div class="input-group input-group-merge">
                            <span id="basic-icon-default-company2" class="input-group-text"
                              ><i class="bx bx-photo-album"></i
                            ></span>
                            <input
                              type="file"
                              id="basic-icon-default-company"
                              name="file"
                              class="form-control"

                              aria-label="ACME Inc."
                              aria-describedby="basic-icon-default-company2"
                            />
                          </div>
                        </div>
                        
                        <div class="row">
                      <div class="col-6">
                    <a href="<?=base_url;?>/dokter" class="btn btn-danger"><span class="tf-icons bx bx-arrow-back "></span> &nbsp; Kembali</a>
                    </div>
                    <div class="col-6 text-end">
                    <button type="submit" class="btn btn-primary">Simpan &nbsp; <span class="tf-icons bx bx-user-plus"></span></button>
                    </div>
                    </div>
                      </form>
                    </div>
                  </div>
                  </div>
                  </div>