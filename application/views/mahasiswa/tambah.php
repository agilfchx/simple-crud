<div class="container">
  <div class="row mt-5">
    <div class="col">

      <div class="card w-75">
        <div class="card-body">
          <h5 class="card-title">Form Tambah Data Mahasiswa</h5>
          <hr>
          <form action="" method="post">
            <div class="form-group">
              <label for="nama">Nama</label>
              <input type="text" class="form-control" id="nama" name="nama" autocomplete="off">
              <small class="form-text text-danger"><?= form_error('nama'); ?></small>
            </div>
            <div class="form-group">
              <label for="nim">NIM</label>
              <input type="number" class="form-control" id="nim" name="nim" autocomplete="off">
              <small class="form-text text-danger"><?= form_error('nim'); ?></small>
            </div>
            <div class="form-group">
              <label for="jurusan">Jurusan</label>
              <select class="form-control" id="jurusan" name="jurusan">
                <option value="Teknik Pengembala">Teknik Pengembala</option>
                <option value="Teknik Listrik">Teknik Listrik</option>
                <option value="Teknik Air">Teknik Air</option>
                <option value="Teknik Api">Teknik Api</option>
                <option value="Teknik Bumi">Teknik Bumi</option>
              </select>
            </div>
            <button type="submit" name="tambah" class="btn btn-primary float-right mt-3">Tambah</button>
          </form>
        </div>
      </div>

    </div>
  </div>
</div>