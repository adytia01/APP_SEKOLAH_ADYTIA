<?php
include_once('config.php'); 
$id = isset($_GET['id'])?$_GET['id']:"";
    if($id!=""){
    $hapus = mysqli_query($conn, "delete from tbkelas where id=$id");
    if($hapus){
        echo "<script>alert('hapus berhasil');location.href='?hal=tampilkelas';</script>";
    }
    }
$sql = mysqli_query($conn,"SELECT * FROM tbkelas ORDER BY nama_kelas DESC, jurusan DESC");


?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viemport" content="width=device-width, initial-scale=1.0">
    <title>document</title>
</head>
<body>
    <h1 class="judul">DATA KELAS</h1>
    <center>
    <a class="link" href="?hal=tambahkelas" class="a">Tambah Data</a>
    <br><br>
    <table border="1" cellpadding="8" cellspacing="0" class="table">
        <tr>
            <th>NO</th>
            <th>KELAS</th>
            <th>JURUSAN</th>
            <th>EDIT</th>
            <th>HAPUS</th>
</tr>
<?php
$no = 1;
while($baris=mysqli_fetch_array($sql)) { ?>
<tr>
    <td><?= $no++ ?></td>
    <td><?= $baris['nama_kelas'] ?></td>
    <td><?= $baris['jurusan'] ?></td>
    <td><a href="?hal=editkelas&id=<?=$baris['id']?>">Edit</a></td>
    <td><a href="?hal=tampilkelas&id=<?=$baris['id']?>" onclick="return confirm('yakin akan dihapus?')">Hapus</a></td>
    </tr>        
        <?php } ?>
    </table>
</body>
</html>