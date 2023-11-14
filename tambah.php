<?php
    require_once('config.php');
    if(isset($_POST{'simpan'})){
        extract($_POST);
        $insert = mysqli_query($conn,"insert into tbsiswa value(null,'$nis','$nisn','$nama','$alamat','$hp','$agama','$jk')");
        if($insert){
            ?>
                <script>
                    alert('simpan berhasil');
                    location.href='?hal=tampil';
                </script>
            <?php
        }
    }
?>
<html>
    <head>
        <title>tambah data</title>
</head>
<body>
    <a href="?hal=tampil">kembali ke home</a>
    <br>
    <br>
    <form action="?hal=tambah" method="post">
        <table>
            <tr>
                <td>NIS</td>
                <td><input type="text" name="nis" placeholder="nomor induk siswa" maxlength="20"></td>
            </tr>
            <tr>  
                <td>NISN</td>
                <td><input type="text" name="nisn" placeholder="nomor induk siswa nasional" maxlength="10"></td>
            </tr>
            <tr>
                <td>Nama Siswa</td>
                <td><input type="text" name="nama" placeholder="nama siswa" maxlength="50"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat" placeholder="Alamat"></td>
            </tr>
            <tr>
                <td>HP</td>
                <td><input type="text" name="hp" placeholder="HP" maxlength="15"></td>
            </tr>
            <tr>
                <td>Agama</td>
                <td>
                    <select name="agama">
                        <option value="">==PILIH agama==</option>
                        <option value="islam">islam</option>
                        <option value="kristen">kristen</option>
                        <option value="katholik">katholik</option>
                        <option value="hindu">hindu</option>
                        <option value="budha">budha</option>
                        <option value="konghucu">/konghucu</option>
                    </select>
                </td>
                <tr>
                <td>Jenis kelamin</td>
                <td>
                    <input type="radio" name="jk" value="LAKI-LAKI">laki-laki
                    <input type="radio" name="jk" value="PEREMPUAN">perempuan
                </td>
                <tr>
                    <td><button type="submit" name="simpan" value="simpan">simpan</button></td>
                    <td><button type="reset" name="reset">reset</button></td>
                </tr>
            </tr>
            </tr>
        </table>
    </form>
  </body>
</html>