<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DTS junior Web Developper</title>
    <link rel="stylesheet" type="text/css" href="style.css">

    <script language="javascript">
        function cekform(){
            //ini untuk ngecek formnya (semua form tidak boleh kosong)
            if(document.mhs.txtnama.value==""){
                alert('Nama Harus Diisi');
                document.mhs.txtnama.focus();
                return false;
            } else if(document.mhs.txtalamat.value==""){
                alert('Alamat Harus Diisi');
                document.mhs.txtalamat.focus();
                return false;
            } else if (document.mhs.txtpekerjaan.value==""){
                alert('Pekerjaan Harus Diisi');
                document.mhs.txtpekerjaan.focus();
                return false;
            } else {
                return true;
            }
        }
    </script>

</head>
<body>
    <div class="judul">
        <h1>KOMINFO</h1>
        <h2>Junior Web Developper</h2> 
    </div>
    <br/>
    <a href="index.php"> Lihat Semua Data </a>
    <br/>
    <h3>Edit Data</h3>
    <?php
        include "koneksi.php";
        $id = $_GET['id'];
        $query_mysql = mysqli_query($db,"SELECT * FROM id_user WHERE id='$id'")or die (mysql_error());
        $nomor = 1;
        while($data = mysqli_fetch_array($query_mysql)){
    ?>
    <form action="update.php" method="post">
            <table>
                <tr>
                    <td>Nama</td>
                    <td>
                        <input type="hidden" name="id" value="<?php echo $data['id']?>">
                        <input type="text" name="nama" value="<?php echo $data['nama']?>">
                    </td>                                        
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><input type="text" name="alamat" value="<?php echo $data['alamat']?>"></td>                                       
                </tr>
                <tr>
                    <td>Pekerjaan</td>
                    <td><input type="text" name="pekerjaan" value="<?php echo $data['pekerjaan']?>"></td>                                       
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Simpan"></td>                                       
                </tr>
            </table>
    </form>
    <?php } ?>
</body>
</html>