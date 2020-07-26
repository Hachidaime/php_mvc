<div class="row">
  <div class="com-lg-6">
    <?php Flasher::flash() ?>
  </div>
</div>
<div class="row">
  <div class="col-lg-6">
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#formModal">
      Tambah Data Mahasiswa
    </button>
    <br>
    <br>
    <h3>Daftar Mahasiswa</h3>
    <ul class="list-group">
      <?php foreach ($data['mhs'] as $mhs) : ?>
        <li class="list-group-item d-flex justify-content-between align-items-center">
          <?= $mhs['nama']; ?>
          <span>
            <a href="<?= BASE_URL; ?>/Mahasiswa/detail/<?= $mhs['id']; ?>" class="badge badge-info ">Info</a>
            <a href="<?= BASE_URL; ?>/Mahasiswa/hapus/<?= $mhs['id']; ?>" class="badge badge-danger " onclick="return confirm('yakin?')">Hapus</a>
          </span>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel">Tambah Data Mahasiswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= BASE_URL; ?>/Mahasiswa/tambah" method="POST">
        <div class="modal-body">
          <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama">
          </div>

          <div class="form-group">
            <label for="nrp">NRP</label>
            <input type="number" class="form-control" id="nrp" name="nrp">
          </div>

          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email">
          </div>

          <div class="form-group">
            <label for="jurusan">State</label>
            <select class="custom-select" id="jurusan" name="jurusan">
              <option selected disabled value="">Choose...</option>
              <option value="reintermediate plug-and-play mindshare">reintermediate plug-and-play mindshare</option>
              <option value="facilitate vertical channels">facilitate vertical channels</option>
              <option value="reinvent bleeding-edge paradigms">reinvent bleeding-edge paradigms</option>
              <option value="target transparent deliverables">target transparent deliverables</option>
              <option value="reinvent virtual communities">reinvent virtual communities</option>
              <option value="deploy integrated bandwidth">deploy integrated bandwidth</option>
            </select>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>