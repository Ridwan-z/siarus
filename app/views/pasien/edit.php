
    <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                      <h5 class="mb-0"><?=$data['title']?></h5>
                      <!-- <small class="text-muted float-end">Merged input group</small> -->
                    </div>
                    <div class="card-body">
                      <form action="<?=base_url;?>/pasien/aksiUpdate" method="POST" enctype="multipart/form-data">
                      <input type="hidden" name="id_pasien" value="<?=$data['pasien']['id_pasien']?>">
                      <input type="hidden" name="provinsi" value="<?=$data['pasien']['provinsi']?>">
              <input type="hidden" name="kabupaten" value="<?=$data['pasien']['kabupaten']?>">
              <input type="hidden" name="kecamatan" value="<?=$data['pasien']['kecamatan']?>">
                        <div class="mb-3">
                          <label class="form-label" for="basic-icon-default-fullname">NIK</label>
                          <div class="input-group input-group-merge">
                            <span id="basic-icon-default-fullname2" class="input-group-text"
                              ><i class="bx bx-calendar"></i
                            ></span>
                            <input
                              type="text"
                              id="basic-icon-default-company"
                              name="nik"
                              value="<?=$data['pasien']['nik']?>"
                              class="form-control"
                              placeholder="Dokter Gigi"
                              aria-label="ACME Inc."
                              aria-describedby="basic-icon-default-company2"
                            />
                          </div>
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-icon-default-company">Nama Lengkap</label>
                          <div class="input-group input-group-merge">
                            <span id="basic-icon-default-company2" class="input-group-text"
                              ><i class="bx bx-time"></i
                            ></span>
                            <input
                              type="text"
                              id="basic-icon-default-company"
                              name="nama"
                              value="<?=$data['pasien']['nama']?>"
                              class="form-control"
                              placeholder="Dokter Gigi"
                              aria-label="ACME Inc."
                              aria-describedby="basic-icon-default-company2"
                            />
                          </div>
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-icon-default-company">Tanggal Lahir</label>
                          <div class="input-group input-group-merge">
                            <span id="basic-icon-default-company2" class="input-group-text"
                              ><i class="bx bx-time"></i
                            ></span>
                            <select class="form-select" aria-label="Default select example" name="tgl_lahir">
                              <option value="Laki-laki" <?=($data['pasien']['tgl_lahir']=='Laki-laki')?'selected="selected"':''?>>Laki-laki</option>
                              <option value="Perempuan" <?=($data['pasien']['tgl_lahir']=='Perempuan')?'selected="selected"':''?>>Perempuan</option>
                             
                            </select>
                          </div>
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-icon-default-company">No HP</label>
                          <div class="input-group input-group-merge">
                            <span id="basic-icon-default-company2" class="input-group-text"
                              ><i class="bx bx-time"></i
                            ></span>
                            <input
                              type="text"
                              id="basic-icon-default-company"
                              name="nama"
                              value="<?=$data['pasien']['no_hp']?>"
                              class="form-control"
                              placeholder="987654321"
                              aria-label="ACME Inc."
                              aria-describedby="basic-icon-default-company2"
                            />
                          </div>
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-icon-default-company">No BPJS</label>
                          <div class="input-group input-group-merge">
                            <span id="basic-icon-default-company2" class="input-group-text"
                              ><i class="bx bx-time"></i
                            ></span>
                            <input
                              type="number"
                              id="basic-icon-default-company"
                              name="nama"
                              value="<?=$data['pasien']['no_bpjs']?>"
                              class="form-control"
                              placeholder="123456789"
                              aria-label="ACME Inc."
                              aria-describedby="basic-icon-default-company2"
                            />
                          </div>
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-icon-default-company">Alamat</label>
                          <div class="input-group input-group-merge">
                            <span id="basic-icon-default-company2" class="input-group-text"
                              ><i class="bx bx-time"></i
                            ></span>
                            <input
                              type="text"
                              id="basic-icon-default-company"
                              name="nama"
                              value="<?=$data['pasien']['alamat']?>"
                              class="form-control"
                              placeholder="RT 001 / RW 003"
                              aria-label="ACME Inc."
                              aria-describedby="basic-icon-default-company2"
                            />
                          </div>
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-icon-default-company">Kelurahan, Kecamatan</label>
                          <div class="input-group input-group-merge">
                            <span id="basic-icon-default-company2" class="input-group-text"
                              ><i class="bx bx-time"></i
                            ></span>
                            <input
                              type="text"
                              id="basic-icon-default-company"
                              name="nama"
                              value="<?=$data['pasien']['kelurahan']?>"
                              class="form-control"
                              placeholder="Kalirejo"
                              aria-label="ACME Inc."
                              aria-describedby="basic-icon-default-company2"
                            />
                          </div>
                        </div>
                        
                        <div class="row">
                      <div class="col-6">
                    <a href="<?=base_url;?>/jadwal" class="btn btn-danger"><span class="tf-icons bx bx-arrow-back "></span> &nbsp; Kembali</a>
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