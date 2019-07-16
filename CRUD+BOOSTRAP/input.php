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
    <h3>Input Data Baru</h3>
    <form action="input-aksi.php" name="mhs" method="post" onsubmit="return cekform()">
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="text" id="txtnama" name="nama"></td>                
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" id="txtalamat" name="alamat"></td>                
            </tr>
            <tr>
                <td>Pekerjaan</td>
                <td><input type="text" id="txtpekerjaan" name="pekerjaan"></td>                
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="simpan"></td>                
            </tr>
        </table>
    </form>
</body>
</html>