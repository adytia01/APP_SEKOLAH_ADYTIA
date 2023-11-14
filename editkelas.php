<?php
    require_once('config.php');
    if(isset($_POST['update'])){
        extract($_POST);
        $update = mysqli_query($conn,"update tbkelas set nama_kelas='$nama_kelas', jurusan='$jurusan' where id=$id");
        var_dump($update);
        if($update){
            echo "<script>alert('simpan berhasil');location.href='?hal=tampilkelas';</script>";
        }else{
            echo "<script>alert('update GAGAL');location.href='?hal=tampilkelas';</script>";
        }
    }

    $id = isset($_GET['id'])?$_GET['id']:"";
    if($id == ""){
        echo "<script>alert('data tidak ditemukan');location.href='?hal=tampilkelas';</script>";
    }else{
        $query = mysqli_query($conn,"select * from tbkelas where id=$id");
        $baris = mysqli_fetch_array($query);
    }
?>
<html>
    <head>
        <title>edit data</title>
</head>
<body>
    <a href="?hal=tampilkelas">kembali ke home</a>
    <br>
    <br>
    <form action="?hal=editkelas" method="post">
        <table>
        <input type="hidden" name="id" value="<?=$baris['id']?>">
            <tr>
                <td>kelas</td>
                <td><input type="text" name="nama_kelas" placeholder="kelas" value="<?=$baris['nama_kelas']?>"></td>
            </tr>
            <tr>
                <td>jurusan</td>
                <td>
                    <select name="jurusan"> 
                        <option value="">==PILIH jurusan==</option>
                        <option value="bd">bisnis digital</option>
                        <option value="mp">menejemen perkantoran</option>
                        <option value="dkv">desain komukasi visual</option>
                        <option value="ak">akutansi keuangan</option>
                        <option value="rpl">rekayasa perangkat lunak</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><button type="submit" name="update">Update</button></td>
                <td></td>
            </tr>
            </table>
        </form>
    </body>
</html>