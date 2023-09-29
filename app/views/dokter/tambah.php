
    <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                      <h5 class="mb-0"><?=$data['title']?></h5>
                      <!-- <small class="text-muted float-end">Merged input group</small> -->
                    </div>
                    <div class="card-body">
                      <form action="<?=base_url;?>/dokter/aksiTambah" method="POST" enctype="multipart/form-data">
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
                              class="form-control"
                              placeholder="Dokter Gigi"
                              aria-label="ACME Inc."
                              aria-describedby="basic-icon-default-company2"
                            />
                          </div>
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-icon-default-company">Telepon</label>
                          <div class="input-group input-group-merge">
                            <span id="basic-icon-default-company2" class="input-group-text"
                              ><i class="bx bx-phone"></i
                            ></span>
                            <input
                              type="number"
                              id="basic-icon-default-company"
                              name="telepon"
                              class="form-control"
                              placeholder="08347634323"
                              aria-label="ACME Inc."
                              aria-describedby="basic-icon-default-company2"
                            />
                          </div>
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-icon-default-company">Email</label>
                          <div class="input-group input-group-merge">
                            <span id="basic-icon-default-company2" class="input-group-text"
                              ><i class="bx bx-envelope"></i
                            ></span>
                            <input
                              type="email"
                              id="basic-icon-default-company"
                              name="email"
                              class="form-control"
                              placeholder="test@gmail.com"
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
                        <option value="">Pilih Jadwal...</option>    
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
                    <button type="submit" class="btn btn-primary">Tambah &nbsp; <span class="tf-icons bx bx-user-plus"></span></button>
                    </div>
                    </div>
                      </form>
                    </div>
                  </div>
                  </div>
                  </div>