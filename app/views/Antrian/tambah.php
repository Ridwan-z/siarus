
    <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                      <h5 class="mb-0"><?=$data['title']?></h5>
                      <!-- <small class="text-muted float-end">Merged input group</small> -->
                    </div>
                    <div class="card-body">
                      <form action="<?=base_url;?>/antrian/aksiTambah" method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                          <label class="form-label" for="basic-icon-default-fullname">Pasien</label>
                          <div class="input-group input-group-merge">
                            <span id="basic-icon-default-fullname2" class="input-group-text"
                              ><i class="bx bx-user"></i
                            ></span>
                            <select class="form-select" aria-label="Default select example" name="id_pasien">
                        <option value="">Pilih Pasien...</option>    
                      <?php foreach ($data['pasien'] as $row):?>
                            
                              <option value="<?=$row['id_pasien']?>"><?=$row['nama']?></option>
                          <?php endforeach;?>
                      </select>
                          </div>
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-icon-default-company">Tanggal Antrian</label>
                          <div class="input-group input-group-merge">
                            <span id="basic-icon-default-company2" class="input-group-text"
                              ><i class="bx bx-detail"></i
                            ></span>
                            <input
                              type="date"
                              id="basic-icon-default-company"
                              name="tgl_antrian"
                              class="form-control"
                              placeholder="Dokter Gigi"
                              aria-label="ACME Inc."
                              aria-describedby="basic-icon-default-company2"
                            />
                          </div>
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-icon-default-company">Keluhan</label>
                          <div class="input-group input-group-merge">
                            <span id="basic-icon-default-company2" class="input-group-text"
                              ><i class="bx bx-detail"></i
                            ></span>
                            <input
                              type="text"
                              id="basic-icon-default-company"
                              name="keluhan"
                              class="form-control"
                              placeholder="Panas seluruh tubuh"
                              aria-label="ACME Inc."
                              aria-describedby="basic-icon-default-company2"
                            />
                          </div>
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-icon-default-fullname">Dokter</label>
                          <div class="input-group input-group-merge">
                            <span id="basic-icon-default-fullname2" class="input-group-text"
                              ><i class="bx bx-user"></i
                            ></span>
                            <select class="form-select" aria-label="Default select example" name="id_dokter">
                        <option value="">Pilih Dokter...</option>    
                      <?php foreach ($data['dokter'] as $row):?>
                            
                              <option value="<?=$row['id_dokter']?>"><?=$row['nama']?></option>
                          <?php endforeach;?>
                      </select>
                          </div>
                        </div>
                        
                        <div class="row">
                      <div class="col-6">
                    <a href="<?=base_url;?>/antrian" class="btn btn-danger"><span class="tf-icons bx bx-arrow-back "></span> &nbsp; Kembali</a>
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