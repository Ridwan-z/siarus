
    <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                      <h5 class="mb-0"><?=$data['title']?></h5>
                      <!-- <small class="text-muted float-end">Merged input group</small> -->
                    </div>
                    <div class="card-body">
                      <form action="<?=base_url;?>/jadwal/aksiUpdate" method="POST" enctype="multipart/form-data">
                      <input type="hidden" name="id_jadwal" value="<?=$data['jadwal']['id_jadwal']?>">
                        <div class="mb-3">
                          <label class="form-label" for="basic-icon-default-fullname">Hari</label>
                          <div class="input-group input-group-merge">
                            <span id="basic-icon-default-fullname2" class="input-group-text"
                              ><i class="bx bx-calendar"></i
                            ></span>
                            <select class="form-select" aria-label="Default select example" name="hari">
                              <option value="Senin" <?=($data['jadwal']['hari']=='Senin')?'selected="selected"':''?>>Senin</option>
                              <option value="Selasa" <?=($data['jadwal']['hari']=='Selasa')?'selected="selected"':''?>>Selasa</option>
                              <option value="Rabu" <?=($data['jadwal']['hari']=='Rabu')?'selected="selected"':''?>>Rabu</option>
                              <option value="Kamis" <?=($data['jadwal']['hari']=='Kamis')?'selected="selected"':''?>>Kamis</option>
                              <option value="Jumat" <?=($data['jadwal']['hari']=='Jumat')?'selected="selected"':''?>>Jum'at</option>
                              <option value="Sabtu" <?=($data['jadwal']['hari']=='Sabtu')?'selected="selected"':''?>>Sabtu</option>
                              
                            </select>
                          </div>
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-icon-default-company">Jam - mulai</label>
                          <div class="input-group input-group-merge">
                            <span id="basic-icon-default-company2" class="input-group-text"
                              ><i class="bx bx-time"></i
                            ></span>
                            <input
                              type="time"
                              id="basic-icon-default-company"
                              name="jam_mulai"
                              class="form-control"
                              value="<?=$data['jadwal']['jam_mulai']?>"
                              placeholder="Dokter Gigi"
                              aria-label="ACME Inc."
                              aria-describedby="basic-icon-default-company2"
                            />
                          </div>
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-icon-default-company">Jam - selesai</label>
                          <div class="input-group input-group-merge">
                            <span id="basic-icon-default-company2" class="input-group-text"
                              ><i class="bx bx-time"></i
                            ></span>
                            <input
                              type="time"
                              id="basic-icon-default-company"
                              name="jam_selesai"
                              class="form-control"
                              value="<?=$data['jadwal']['jam_selesai']?>"
                              placeholder="Dokter Gigi"
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