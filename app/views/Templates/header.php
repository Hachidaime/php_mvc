<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $data['judul']; ?></title>

  <link rel="stylesheet" href="<?= BASE_URL; ?>/css/bootstrap.min.css" crossorigin="anonymous">
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="<?= BASE_URL; ?>">PHP MVC</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-item nav-link active" href="<?= BASE_URL; ?>">Home</a>
          <a class="nav-item nav-link" href="<?= BASE_URL; ?>/About">About</a>
          <a class="nav-item nav-link" href="<?= BASE_URL; ?>/Mahasiswa">Mahasiswa</a>
        </div>
      </div>
    </div>
  </nav>

  <div class="container">