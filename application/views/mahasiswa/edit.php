<div class="container">
  <div class="row mt-5">
    <div class="col">

      <div class="card w-75">
        <div class="card-body">
          <h5 class="card-title">Form Edit Data Mahasiswa</h5>
          <hr>
          <form action="" method="post">
            <input type="hidden" name="id" value="<?= $mahasiswa['id']; ?>">
            <div class="form-group">
              <label for="nama">Nama</label>
              <input type="text" class="form-control" id="nama" name="nama" value="<?= $mahasiswa['nama']; ?>" autocomplete="off">
              <small class="form-text text-danger"><?= form_error('nama'); ?></small>
            </div>
            <div class="form-group">
              <label for="nim">NIM</label>
              <input type="number" class="form-control" id="nim" name="nim" value="<?= $mahasiswa['nim']; ?>" autocomplete="off">
              <small class="form-text text-danger"><?= form_error('nim'); ?></small>
            </div>
            <div class="form-group">
              <label for="jurusan">Jurusan</label>
              <select class="form-control" id="jurusan" name="jurusan">
                <?php foreach ($jurusan as $j) : ?>
                  <?php if ($j == $mahasiswa['jurusan']) : ?>
                    <option value="<?= $j; ?>" selected><?= $j; ?></option>
                  <?php else : ?>
                    <option value="<?= $j; ?>"><?= $j; ?></option>
                  <?php endif; ?>
                <?php endforeach; ?>
              </select>
            </div>
            <button type="submit" name="ubah" class="btn btn-primary float-right mt-3">Edit</button>
          </form>
        </div>
      </div>

    </div>
  </div>
</div>