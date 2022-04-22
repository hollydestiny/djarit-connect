  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ingin Keluar?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Klik "Logout" dibawah jika anda sudah ingin mengakhiri session anda if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-danger" href="<?=SERVER?>controller/logout.php">Logout</a>
        </div>
      </div>
    </div>
  </div>

<div class="modal fade" id="detailModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Detail Instruktur</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">

        <div class="form-group">
          <label class="control-label col-xs-3">ID</label>
          <div class="col-xs-9">
            <input name="id" id="nip" class="form-control" type="text" placeholder="ID Instruktur/Assistant" readonly>
          </div>
        </div>
      
        <div class="form-group">
          <label class="control-label col-xs-3">Nama Instruktur/ Assistant</label>
          <div class="col-xs-9">
            <input name="nama" id="nama" class="form-control" type="text" placeholder="Nama Instruktur/Assistant" readonly>
          </div>
        </div>
        
        <div class="form-group">
          <label class="control-label col-xs-3">Telepon</label>
          <div class="col-xs-9">
            <input name="telepon" id="telepon" class="form-control" type="number" placeholder="Telepon" readonly>
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-xs-3">Email</label>
          <div class="col-xs-9">
            <input name="email" id="email" class="form-control" type="text" placeholder="Email" readonly>
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-xs-3">Jabatan</label>
          <div class="col-xs-9">
            <input name="jabatan" id="jabatan" class="form-control" type="text" placeholder="jabatan" readonly>
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-xs-3">Instruktur Diklat</label>
          <div class="col-xs-9">
            <input name="diklat" id="diklat" class="form-control" type="text" placeholder="Diklat" readonly>
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-xs-3">No. KTP</label>
          <div class="col-xs-9">
            <input name="no_ktp" id="no_ktp" class="form-control" type="text" placeholder="-" readonly>
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-xs-3">No. NPWP</label>
          <div class="col-xs-9">
            <input name="no_npwp" id="no_npwp" class="form-control" type="text" placeholder="-" readonly>
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-xs-3">CV</label>
          <div class="col-xs-9">
            <input name="cv" id="cv" class="form-control" type="text" placeholder="-" readonly>
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-xs-3">Alamat</label>
          <div class="col-xs-9">
            <input name="alamat" id="alamat" class="form-control" type="text" placeholder="-" readonly>
          </div>
        </div>

        <hr>
        <div class="form-group">
          <div class="col-xs-9">
            <a id="file_ktp" class="btn btn-secondary" href="">File KTP</a>
            <a id="file_npwp" class="btn btn-secondary" href="">File NPWP</a>
          </div>
        </div>
        <hr>

        <div class="form-group" >
          <div class="col-xs-9" style="align:center;">
            <img id="foto_instruktur" src="" alt="your image" style="display: block;margin-left: auto;margin-right: auto;width: 50%;"/>
          </div>
        </div>

      </div>

      <div class="modal-footer">
        <button class="btn btn-dark" data-dismiss="modal" aria-hidden="true">Tutup</button>
      </div>
      </form>
    </div>
  </div>
</div>


<div class="modal fade" id="statusModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Data Tidak Ditemukan</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Akun ini tidak terhubung dengan data instruktur manapun</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Tutup</button>
        </div>
      </div>
    </div>
  </div>