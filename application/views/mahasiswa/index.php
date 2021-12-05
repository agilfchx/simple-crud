<div class="container">

  <div class="row mt-4">
    <div class="col-md-6">
      <h2>Daftar Mahasiswa</h2>
    </div>
  </div>

  <?php if ($this->session->flashdata('flash')) : ?>
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
    <?php $this->session->unset_userdata('flash'); ?>
  <?php endif; ?>

  <div class="row mt-3">
    <div class="col-md-6">
      <form action="" method="POST">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Search Mahasiswa" name="keyword">
          <div class="input-group-append">
            <button class="btn btn-primary" type="submit" id="search">Search</button>
          </div>
        </div>

      </form>
    </div>
  </div>

  <div class="row mt-2">
    <div class="col-md-6">
      <a href="<?= base_url(); ?>mahasiswa/tambah" class="btn btn-primary"> Tambah Data Mahasiswa </a>
    </div>
  </div>

  <?php if (empty($mahasiswa)) : ?>
    <div class="alert alert-danger mt-3" role="alert">
      Data mahasiswa tidak ditemukan
    </div>
  <?php endif; ?>

  <ul class="list-group list-group-flush mt-4">
    <?php foreach ($mahasiswa as $mhs) : ?>
      <li class="list-group-item">
        <?= $mhs['nama']; ?>
        <a href="<?= base_url(); ?>mahasiswa/hapus/<?= $mhs['id']; ?>" class="badge badge-danger float-right tombol-hapus"">Hapus</a>
        <a href=" <?= base_url(); ?>mahasiswa/edit/<?= $mhs['id']; ?>" class="badge badge-success float-right mr-2" ;">Edit</a>
        <a href="<?= base_url(); ?>mahasiswa/detail/<?= $mhs['id']; ?>" class="badge badge-primary float-right mr-2" ;">Details</a>
      </li>
    <?php endforeach; ?>
  </ul>

</div>