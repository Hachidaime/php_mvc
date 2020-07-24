<?php

class About
{
  public function index($nama = 'Cold', $pekerjaan = 'Web Developer')
  {
    echo "Halo nama saya {$nama}, saya seorang {$pekerjaan}";
  }

  public function page()
  {
    echo 'About/page';
  }
}
