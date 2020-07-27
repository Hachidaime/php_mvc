<?php

/**
 * @desc this class will handle flash data
 * 
 * @class Flasher
 * @author Hachidaime
 */
class Flasher
{

  /**
   * @desc this method will handle set flash data
   * 
   * @method setFlash
   * @param string $pesan is flash data message
   * @param string $aksi is method action
   * @param string $type is bootstrap alert type
   */
  public static function setFlash(string $pesan, string $aksi, string $tipe)
  {
    $_SESSION['flash'] = [
      'pesan' => $pesan,
      'aksi' => $aksi,
      'tipe' => $tipe,
    ];
  }

  /**
   * @desc this method will handle show flash data
   * 
   * @method flash
   */
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
