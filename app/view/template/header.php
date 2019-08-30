<?php
$kategori = query("SELECT * FROM kategori");
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Alfatih Property</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <link rel="icon" href="<?= BASE_URL.'admin/img/logo/logo.jpeg'?>">
    <!--icon-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="<?=BASE_URL. 'css/materialize.css'?>" type="text/css" rel="stylesheet" media="screen,projection" />
    <link href="<?=BASE_URL. 'css/style.css'?>" type="text/css" rel="stylesheet" media="screen,projection" />
  </head>
  <body>
    <nav class="white" role="navigation">
      <div class="nav-wrapper container">
        <a id="logo-container" href="<?=BASE_URL?>" class="brand-logo">
          <img src="<?= BASE_URL.'admin/img/logo/logo.jpeg'?>" style="max-width: 50px">
        </a>
        <ul class="right hide-on-med-and-down">
          <li><a href="<?= BASE_URL ?>">Beranda</a></li>
          <li><a href="<?= BASE_URL.'about' ?>">Tentang Kami</a></li>
          <li><a href="<?= BASE_URL.'cari' ?>">Cari</a></li>
          <li><a class="dropdown-trigger" href="" data-target="dropdown1">Kategori Produk<i class="material-icons right">arrow_drop_down</i></a></li>
        </ul>
        <ul id="dropdown1" class="dropdown-content">
          <?php foreach ($kategori as $row): ?>
          <li><a href="<?= BASE_URL.'kategori/'.$row['id_kategori'] ?>"><?= $row['nama_kategori']?></a></li>
          <?php endforeach ?>
        </ul>
        <ul id="nav-mobile" class="sidenav collapsible">
          <li><a href="<?= BASE_URL ?>">Beranda</a></li>
          <li><a href="<?= BASE_URL.'about' ?>">Tentang Kami</a></li>
          <li><a href="<?= BASE_URL.'cari' ?>">Cari</a></li>
          <li>
            <a class="collapsible-header">Kategori</a>
            <div class="collapsible-body">
              <?php foreach ($kategori as $row): ?>
              <li><a href="<?= BASE_URL.'kategori/'.$row['id_kategori'] ?>"><?= $row['nama_kategori']?></a></li>
              <?php endforeach ?>
            </div>
          </li>
        </ul>
        <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      </div>
    </nav>