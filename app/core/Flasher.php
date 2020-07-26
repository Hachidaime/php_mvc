<?php
class Flasher
{
  public static function setFlash($pesan, $aksi, $tipe)
  {
    $_SESSION['flash'] = [
      'pesan' => $pesan,
      'aksi' => $aksi,
      'tipe' => $tipe,
    ];
  }

  public static function flash()
  {
    if (isset($_SESSION['flash'])) {
      echo <<<EOF
        <div class="alert alert-{$_SESSION['flash']['tipe']} alert-dismissible fade show" role="alert">
        Data Mahasiswa <strong>{$_SESSION['flash']['pesan']}</strong> {$_SESSION['flash']['aksi']}.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>
      EOF;

      unset($_SESSION['flash']);
    }
  }
}
