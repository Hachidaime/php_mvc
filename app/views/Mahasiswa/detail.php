<div class="card mt-5" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?= $data['mhs']['nama']; ?></h5>
    <h6 class="card-subtitle mb-2 text-muted"><?= $data['mhs']['nrp']; ?></h6>
    <p class="card-text"><?= $data['mhs']['jurusan']; ?></p>
    <p class="card-text"><?= $data['mhs']['email']; ?></p>
    <a href="<?= BASE_URL; ?>/Mahasiswa" class="card-link">Kembali</a>
  </div>
</div>