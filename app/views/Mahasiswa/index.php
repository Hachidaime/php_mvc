<div class="row mt-5">
  <div class="col-6">
    <h3>Daftar Mahasiswa</h3>
    <?php foreach ($data['mhs'] as $mhs) : ?>
      <ul>
        <li><?= $mhs['nama'] ?></li>
        <li><?= $mhs['nrp'] ?></li>
        <li><?= $mhs['jurusan'] ?></li>
        <li><?= $mhs['email'] ?></li>
      </ul>
    <?php endforeach; ?>
  </div>
</div>