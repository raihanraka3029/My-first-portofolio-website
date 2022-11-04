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

<div class="container mt-3">
  <h2>View Data <a href="contact.php" class="btn btn-primary">Input Data</a> </h2>
  <p>Surat Sayang dari wankawan</p>            
  <table class="table table-hover">
    <thead>
      <tr>
        <th>ID</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
 <?php
include "koneksi.php";

//query untu select data
$query = "SELECT * FROM biodata";
//eksekusi query
$execQuery = mysqli_query($conn,$query);
//Cek data apakah ada dalam database atau tidak
$jmlData = mysqli_num_rows($execQuery);
if ($jmlData > 0) {
  //ambil data lalu masukan masing-masing ke array row
  while ($row = mysqli_fetch_assoc($execQuery)) {
    $id = $row['id'];
    $firstName = $row['firstname'];
    $lastName = $row['lastname'];
    $email = $row['email'];


 ?>
      <tr>
        <td><?= $id ?></td>
        <td><?= $firstName?></td>
        <td><?= $lastName ?></td>
        <td><?= $email ?></td>
      </tr>
      </tr>
 <?php
  }
}

?>
    </tbody>
  </table>
</div>

</body>
</html>
