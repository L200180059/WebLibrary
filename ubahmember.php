<?php
    require "functions.php";
    $id = $_GET["id"];
    $result = mysqli_query($conn, "SELECT * FROM user WHERE id=$id");
    $p = mysqli_fetch_array($result); 

    error_reporting(E_ALL ^ E_NOTICE);
    $nama = $_POST["nama"];
    $alamat = $_POST["alamat"];
    $nik = $_POST["nik"];
    $email = $_POST["email"];
    $no_hp = $_POST["no_hp"];
    $username = $_POST["username"];
    $password = $_POST["password"];

    $query = "UPDATE user SET nama = '$nama', alamat = '$alamat', nik = '$nik', email = '$email', no_hp = '$no_hp', username = '$username', password = '$password' WHERE id = '$id'";

    //cek tombol submit sudah ditekan atau belum
    if (isset($_POST["simpan"])) {
        echo "asa";
        mysqli_query($conn, $query);
        // cek jika data berhasil ditambahkan
            echo "
                <script>
                    alert('data berhasil diubah');
                    document.location.href = 'index.php?page=datamember';
                </script>
            ";
            
    }

?>

<div class="panel panel-default">
<div class="panel-heading">
    edit Data Buku
</div>
<div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    
                                    <form method="POST" action="?id=<?php echo $id; ?>">
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input type="text" class="form-control" name="nama" value="<?= $p['nama']; ?>" />
                                        </div>

                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <input type="text" class="form-control" name="alamat" value="<?= $p['alamat']; ?>" />
                                        </div>

                                        <div class="form-group">
                                            <label>NIK</label>
                                            <input type="text" class="form-control" name="nik" value="<?= $p['nik']; ?>" />
                                        </div>

                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="text" class="form-control" name="email" value="<?= $p['email']; ?>" />
                                        </div>

                                        <div class="form-group">
                                            <label>Nomor HP</label>
                                            <input type="text" class="form-control" name="no_hp" value="<?= $p['no_hp']; ?>" />
                                        </div>

                                        <div class="form-group">
                                            <label>Username</label>
                                            <input  class="form-control" type="text" name="username" value="<?= $p['username']; ?>" />
                                        </div>

                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" class="form-control" name="password" value="<?= $p['password']; ?>" />
                                        </div>

                                        <div>
                                            <input type="submit" name="simpan" value="simpan" class="btn btn-primary">
                                        </div>
                                    </form>
                                </div>
                            </div>
</div>
</div>
</div>