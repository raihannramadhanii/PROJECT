<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="../css/bootstrap.css">
</head>
<body>
<?php
    include_once('../navbar.php');
    ?>

<div class="container">
    <div class="row mt-5">
        <div class="col-8m-auto">
        <div class="card">
  <div class="card-header">
    <h3 class="float-start"> Data Dosen</h3>
    
  </div>
  <div class="card-body">
  <form action="proses.php" method="POST" enctype="multipart/form-data">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">NIDN</label>
    <input type="text" name="nidn" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Nama Dosen</label>
    <input type="text" name="nama"  class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Jabatan</label>
    <select name="jabatan" class="form-control" id="">
    <option value="">--Pilih Jabatan--</option>
    <option value="Full Time">Full Time</option>
    <option value="Part Time">Part Time</option>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Email</label>
    <input type="text" name="email"  class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">No Hp</label>
    <input type="text" name="no_hp"  class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
  </div> 
  </div>
  </div>
</div>
</div>


   <script src="../js/bootstrap.js"></script> 
   <script src="../js/bootstrap.bundle.js"></script>
   <script src="../js/all.js"></script> 
   
</body>
</html>
</head>
<body>
    
</body>
</html>