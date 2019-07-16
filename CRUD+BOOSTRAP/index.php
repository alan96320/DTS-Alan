<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DTS junior Web Developper</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="judul">
        <h1>KOMINFO</h1>
        <h2>Junior Web Developper</h2> 
    </div>
    <br/>
    <a class="tombol" href="input.php">+Tambah Data Baru</a>

    <h3>Data User</h3>
    <table border="1" class="table">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Pekerjaan</th>
            <th>Opsi</th>          
        </tr>

    <?php
        include "koneksi.php";
        $query_mysql = mysqli_query($db, "SELECT * FROM user") or die(mysqli_error());
        $nomor = 1;
        while($data = mysqli_fetch_array($query_mysql)){
    ?>
    <tr>
        <td><?php echo $nomor++; ?> </td>
        <td><?php echo $data['nama']; ?> </td>
        <td><?php echo $data['alamat']; ?> </td>
        <td><?php echo $data['pekerjaan']; ?> </td>
        <td>
            <a class="edit" href="edit.php?id= <?php echo $data['id']; ?>">Edit</a>
            <a class="hapus" href="hapus.php?id= <?php echo $data['id']; ?>">Hapus</a>
        </td>        
    </tr>
    <?php } ?>

    <?php
        if(isset($_GET['pesan'])){
            $pesan = $_GET['pesan'];
            if($pesan == "input"){
                echo "Data berhasil di input";
            } else if ($pesan == "update"){
                echo "Data berhasil di update.";
            } else if ($pesan == "hapus"){
                echo "Data berhasil di hapus.";
            }
        }
    ?>

    
</body>
</html>