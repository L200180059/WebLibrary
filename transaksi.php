<?php
    session_start();
    require "functions.php";

    error_reporting(E_ALL ^ E_NOTICE);
    $id_buku = $_GET["id"];
    $judul = $_GET["judul"];
    $jumlah = ($_POST["jumlah"]);
    $tgl_pinjam = ($_POST["tgl_pinjam"]);
    $tgl_kembali = ($_POST["tgl_kembali"]);
    $id_user = $_SESSION['id_user'];
    //cek tombol submit sudah ditekan atau belum
    // echo $id_user;
    if (isset($_POST["simpan"])) {
        $insert = "INSERT INTO transaksi VALUES('', '$id_user', '$id_buku', '$jumlah', '$tgl_pinjam', '$tgl_kembali')";
        mysqli_query($conn, $insert);
        // cek jika data berhasil ditambahkan
            echo "
                <script>
                    alert('data berhasil ditambahkan');
                    document.location.href = 'indexmember.php?page=peminjamanmember';
                </script>
            ";
    }

?>

<div class="panel panel-default">
<div class="panel-heading">
    Tambah Data Buku
</div>
<div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    
                                    <form method="POST">
                                        <div class="form-group">
                                            <label>Judul Buku</label>
                                            <input type="text" class="form-control" name="judul" value="<?= $judul; ?>" readonly />
                                        </div>

                                        <div class="form-group">
                                            <label>Jumlah Buku</label>
                                            <input class="form-control" type="number" name="jumlah" />
                                        </div>

                                        <div class="form-group">
                                            <label>Tanggal Pinjam</label>
                                            <input type="date" class="form-control" name="tgl_pinjam" />
                                        </div>

                                        <div class="form-group">
                                            <label>Tanggal Kembali</label>
                                            <input type="date" class="form-control" name="tgl_kembali" />
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