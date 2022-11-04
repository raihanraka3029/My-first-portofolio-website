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
        <a class="nav-link" href="portofolio.php">Portofolio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Chat</a>
      </li>
    </ul>
  </div>
</nav>

<div class="container-fluid bg-primary text-center text-white p-5 bg-success">
        <h1>Contact Me</h1>
        <p>Mau bertanya, saran ataupun curhat? Isi form dibawah ini yaaa....</p>
    </div>
    <?php
    include "koneksi.php";
    $tombol ="";
    if (isset($_POST['id'])) {
        $firstName = $_POST['firstname'];
        $lastName = $_POST['lastname'];
        $email = $_POST['email'];

        include "koneksi.php";
       
       
       $query = "INSERT INTO biodata (firstname,lastname,email)
                VALUES ('$firstName','$lastName','$email')";
        //eksekusi query
        $execQuery = mysqli_query($conn,$query);
        if ($execQuery) {
            $tombol = "disabled";
            echo "
              <div class=\"container mt-3\">
            <div class=\"alert alert-success alert-dismissible\">
  <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
  <strong>Data berhasil </strong> diinput ke dalam Database
            </div>
            </div>";
        }
        else {
            echo "
            <div class=\"container mt-3\">
            <div class=\"alert alert-success alert-dismissible\">
  <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
  <strong>Data tidak berhasil </strong> diinput ke dalam Database
            </div>
            </div>";
        }

        mysqli_close($conn); 

    }
?>
<div class="container mt-3">
  <h2>Input Data <a href="view.php" class="btn btn-primary">Kembali</a> </h2>
  <form action="input.php" method="post">
    <div class="form-floating mb-3 mt-3">
       <Input
       type="text"
       class="form-control"
       id="id"
       name="id"
       placeholder="Input ID"
       <?= $tombol ?>
       >
       <Label for="id">Nama kamu </label> 
    
    <div class="form-floating mb-3 mt-3">
       <Input
       type="text"
       class="form-control"
       id="firstname"
       name="firstname"
       placeholder="Input Nama Depan"
       <?= $tombol ?>
       >
       <Label for="firstname">Email kamu </label> 

     <div class="form-floating mb-3 mt-3">
       <Input
       type="text"
       class="form-control"
       id="lastname"
       name="lastname"
       placeholder="Input Nama Belakang"
       <?= $tombol ?>
       >
       <Label for="lastname">Subjek (Judul) </label> 

     <div class="form-floating mb-3 mt-3">
       <Input
       type="text"
       class="form-control"
       id="email"
       name="email"
       placeholder="Input Email"
       <?= $tombol ?>
       >
       <Label for="email"> Isi Pesan</label> 
</div>
    </div>
</div>
       <input type="submit" class="btn btn-primary" value="simpan">
       
       

</form>
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</html>