<!DOCTYPE html>
<html lang="en">
<head>
  <title>Website Portofolio</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
  <style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
  </style>
</head>
<body>

<div class="p-5 bg-info text-black text-center">
  <h1>Hi, I'm Ray!</h1>
  <p>And This is My first Portofolio Website !</p> 
</div>

<nav class="navbar navbar-expand-sm bg-warning navbar-white">
  <div class="container-fluid">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link active" href="#">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="aboutme.php">About Me</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="experience.php">Experience</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="portofolio.php">Portofolio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Chat</a>
      </li>
    </ul>
  </div>
</nav>

<div class="container mt-5">
  <div class="row">
    <div class="col-sm-4">
      <h2>OVERVIEW</h2>
      <h5>Glimpse Of Website</h5>
<?php
include "koneksi.php";
$querySQL = "SELECT * FROM about WHERE id=1";
$execQuerySQL = mysqli_query($conn, $querySQL);
if (mysqli_num_rows($execQuerySQL) > 0) {
    while ($row = mysqli_fetch_assoc($execQuerySQL)){
?>
      <div class="fakeimg">
        <img style="width:100%; height: 100%;" src="images/profil.jpg"/>
      </div>
      <p align="justify" > Welcome to my personal website, i hope we will become closer after you surfing here. Enjoy :)</p>
<?php
    }
}
?>
      <h3 class="mt-4">Lookup for me?</h3>
      <p>Here's links</p>
      <ul class="nav nav-pills flex-column">
<?php
    $querySQL = "SELECT * FROM link";
    $execQuerySQL = mysqli_query($conn, $querySQL);
    if (mysqli_num_rows($execQuerySQL) > 0) {
     while ($row = mysqli_fetch_assoc($execQuerySQL)){
?>
        <li class="nav-item">
          <a class="nav-link" target="_blank" href="<?= $row['url'] ?>"><?= $row
          ['nama'] ?></a>
        </li>
<?php
    }
}
?>

      </ul>
      <hr class="d-sm-none">
    </div>

<!-- Carousel -->
<div id="demo" class=col-sm-8 class="carousel slide" data-bs-ride="carousel">

<!-- The slideshow/carousel -->
<div class="carousel-inner">
  <div class="carousel-item active">
    <?php
      $querySQL = "SELECT * FROM karosel";
      $execQuerySQL = mysqli_query($conn, $querySQL);
      if (mysqli_num_rows($execQuerySQL) > 0) {
       while ($row = mysqli_fetch_assoc(
        $execQuerySQL)){
    ?>
    <img src=<?= $row['img1'] ?>>
    <h2><?= $row['judul1'] ?></h2>
    <h5><?= $row['deskripsi1'] ?>,<?= $row['tgl'] ?></h5>
  </div>
  <?php
    }
  }
  ?>

  <div class="carousel-item">
  <?php
      $querySQL = "SELECT * FROM karosel";
      $execQuerySQL = mysqli_query($conn, $querySQL);
      if (mysqli_num_rows($execQuerySQL) > 0) {
       while ($row = mysqli_fetch_assoc(
        $execQuerySQL)){
    ?>
    <img src=<?= $row['img2'] ?>>
    <h2><?= $row['judul2'] ?></h2>
    <h5><?= $row['deskripsi2'] ?>,<?= $row['tgl'] ?></h5>
  </div>
  <?php
    }
  }
  ?>
<div class="carousel-item">
  <?php
      $querySQL = "SELECT * FROM karosel";
      $execQuerySQL = mysqli_query($conn, $querySQL);
      if (mysqli_num_rows($execQuerySQL) > 0) {
       while ($row = mysqli_fetch_assoc(
        $execQuerySQL)){
    ?>$
    <img src=<?= $row['img3'] ?>>
    <h2><?= $row['judul3'] ?></h2>
    <h5><?= $row['deskripsi3'] ?>,<?= $row['tgl'] ?></h5>
  </div>
  <?php
    }
  }
  ?>

</div>

<div class="mt-12 p-4 bg-dark text-white text-center">
  <p>Footer</p>
</div>


</body>
</html>