<!DOCTYPE html> 
<html lang="en">
<head>
  <title>CRUD - View Data</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
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
       <Label for="id">ID </label> 
    
    <div class="form-floating mb-3 mt-3">
       <Input
       type="text"
       class="form-control"
       id="firstname"
       name="firstname"
       placeholder="Input Nama Depan"
       <?= $tombol ?>
       >
       <Label for="firstname">Nama Depan </label> 

     <div class="form-floating mb-3 mt-3">
       <Input
       type="text"
       class="form-control"
       id="lastname"
       name="lastname"
       placeholder="Input Nama Belakang"
       <?= $tombol ?>
       >
       <Label for="lastname">Nama Belakang </label> 

     <div class="form-floating mb-3 mt-3">
       <Input
       type="text"
       class="form-control"
       id="email"
       name="email"
       placeholder="Input Email"
       <?= $tombol ?>
       >
       <Label for="email"> Email </label> 
</div>
    </div>
</div>
       <input type="submit" class="btn btn-primary" value="simpan">
       
       

</form>
</div>


</body>
</html>