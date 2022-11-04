<!DOCTYPE html>
<html lang="en">
<head>
  <title>Website Portofolio</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
  </style>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-warning navbar-white">
  <div class="container-fluid">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link active" href="template.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="aboutme.php">About Me</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="experience.php">Experience</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Portofolio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Chat</a>
      </li>
    </ul>
  </div>
</nav>

<div class="container-fluid bg-primary text-center text-white p-5 bg-success">
        <h1>My Portofolio</h1>
        <p>I'm So Glad to Have These</p>
</div>


<div id="demo" class="carousel slide" data-bs-ride="carousel" align="middle">

<!-- The slideshow/carousel -->
<div class="carousel-inner">
  <div class="carousel-item active">
    <?php
    include "koneksi.php";
      $querySQL = "SELECT * FROM portofolio";
      $execQuerySQL = mysqli_query($conn, $querySQL);
      if (mysqli_num_rows($execQuerySQL) > 0) {
       while ($row = mysqli_fetch_assoc(
        $execQuerySQL)){
    ?>
    <img src=<?= $row['img1'] ?>>
    <h2><?= $row['judul1'] ?></h2>
    <h5><?= $row['deskripsi1'] ?></h5>
  </div>
  <?php
    }
  }
  ?>

  <div class="carousel-item">
  <?php
      $querySQL = "SELECT * FROM portofolio";
      $execQuerySQL = mysqli_query($conn, $querySQL);
      if (mysqli_num_rows($execQuerySQL) > 0) {
       while ($row = mysqli_fetch_assoc(
        $execQuerySQL)){
    ?>
    <img src=<?= $row['img2'] ?>>
    <h2><?= $row['judul2'] ?></h2>
    <h5><?= $row['deskripsi2'] ?></h5>
  </div>
  <?php
    }
  }
  ?>
<div class="carousel-item">
  <?php
      $querySQL = "SELECT * FROM portofolio";
      $execQuerySQL = mysqli_query($conn, $querySQL);
      if (mysqli_num_rows($execQuerySQL) > 0) {
       while ($row = mysqli_fetch_assoc(
        $execQuerySQL)){
    ?>$
    <img src=<?= $row['img3'] ?>>
    <h2><?= $row['judul3'] ?></h2>
    <h5><?= $row['deskripsi3'] ?></h5>
  </div>
  <?php
    }
  }
  ?>
<div class="carousel-item">
  <?php
      $querySQL = "SELECT * FROM portofolio";
      $execQuerySQL = mysqli_query($conn, $querySQL);
      if (mysqli_num_rows($execQuerySQL) > 0) {
       while ($row = mysqli_fetch_assoc(
        $execQuerySQL)){
    ?>$
    <img src=<?= $row['img4'] ?>>
    <h2><?= $row['judul4'] ?></h2>
    <h5><?= $row['deskripsi4'] ?></h5>
  </div>
  <?php
    }
  }
  ?>

</div>


</body>
</html>