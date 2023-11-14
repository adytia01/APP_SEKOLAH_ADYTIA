<?php  
    include_once('config.php');
    if(isset($_POST['simpan'])){
        extract($_POST);
        if($password1 == $password2){
            //simpat data
            $pass = password_hash($password1,PASSWORD_DEFAULT);
            $insert = mysqli_query($conn, "insert into tbuser values(null,'$nama','$username','$pass')");
            if($insert){
                echo "<script>alert('simpan berhasil');location.href='?hal=tampiluser';</script>";
            }
                }else{
                    //peringatan password tidak sama
                    echo "<script>alert('password tidak sama!!!');location.href='?hal=tambahuser';</script>";
                }
        }
?>
<form action="?hal=tambahuser" method="post">
    <table>
        <tr>
            <td>nama user</td>
            <td>
                <input type="text" name="nama" placeholder="nama user" required>
    </td>
    </tr>
    <tr>
        <td>username</td>
        <td>
            <input type="text" name="username" placeholder ="username" required>
        </td>
    </tr>
    <tr>
        <td>password</td>
        <td>
            <input type="password" name="password1" placeholder ="password" required>
        </td>
    </tr>
    <tr>
        <td>konfirmasi password</td>
        <td>
            <input type="password" name="password2" placeholder ="password" required>
        </td>
    </tr>
    <tr>
        <td>
            <button type="submit" name="simpan" value="simpan">simpan</button>
    </td>
    <td>
        <button type="reset">reset</button>
    </td>
    </tr>
    </table>
    </form>