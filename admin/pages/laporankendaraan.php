 <div class="col-md-8">
                <form>
                  <div class="form-group">
                  <?php 
                  foreach ($isi_kendaraan as $is) { ?>
                    <label><?=$is['id_bulan']?></label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Desember 2016"><br>
                  </div>
                  <table>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="min-width: 2em; width: 30%">
                <p><?=$is['mobil']?></p>
                      </div>
                    </div>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="100" style="min-width: 2em; width: 70%;">
                <p><?=$is['motor']?></p>
                      </div>
                    </div>
                  </table>
                  <table class="table" id="daftar">
                  </table>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div>