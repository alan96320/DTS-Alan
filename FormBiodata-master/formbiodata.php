<!DOCTYPE HTML>  
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
</head>
<body>
<?php
// define variables and set to empty values
$nama = $alamat = $TTL = $JenisKelamin = $usia = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nama = test_input($_POST["nama"]);
  $alamat = test_input($_POST["alamat"]);
  $TTL = test_input($_POST["TTL"]);
  $JenisKelamin = test_input($_POST["JenisKelamin"]);
  $usia = test_input($_POST["usia"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<header>
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
            <h2 class="page-header">PHP Form Validation Example</h2>
                <div class="row">
                    <div class="col-4">
                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
                      <div class="form-group">
                        <label for="exampleFormControlInput1">Nama : </label>
                        <input type="text" name="nama" class="form-control" id="exampleFormControlInput1" placeholder="Nama Anda">
                      </div>
                      
                      <div class="form-group">
                        <label for="exampleFormControlInput2">Alamat : </label>
                        <input type="text" name="alamat" class="form-control" id="exampleFormControlInput2" placeholder="Alamat Anda">
                      </div>
                      <div class="form-group">
                        <label for="exampleFormControlInput3">Tempat, Tanggal Lahir : </label>
                        <input type="text" name="TTL" class="form-control" id="exampleFormControlInput3" placeholder="Tempat, Tanggal Lahir Anda">
                      </div>
                      <div class="form-group">
                        <label for="exampleFormControlInput1">Usia : </label>
                        <input type="text" name="usia" class="form-control" id="exampleFormControlInput1" placeholder="Usia">
                      </div>

                      <div class="form-group">
                      <label for="exampleFormControlInput1">Jenis Kelamin : </label>
                          <input type="radio" name="JenisKelamin" value="Perempuan">Perempuan
                          <input type="radio" name="JenisKelamin" value="Laki-laki">Laki-laki
                          <br><br>
                          <input type="submit" name="submit" value="Submit"> 
                      </div>
                  </form>

                    <?php
                    echo "<h2>Your Input:</h2>";
                    echo $nama;
                    echo "<br>";
                    echo $alamat;
                    echo "<br>";
                    echo $TTL;
                    echo "<br>";
                    echo $usia;
                    echo "<br>";
                    echo $JenisKelamin;
                    ?>
                    </div>
                </div>
            </div>
        </div>
</header>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>