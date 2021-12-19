<?php
    require "functions.php";

    error_reporting(E_ALL ^ E_NOTICE);
    $judul = ($_POST["judul"]);
    $pengarang = ($_POST["pengarang"]);
    $penerbit = ($_POST["penerbit"]);
    $tahun_terbit = ($_POST["tahun_terbit"]);
    $isbn = ($_POST["isbn"]);
    $jumlah_buku = ($_POST["jumlah_buku"]);
    $tgl_input = ($_POST["tgl_input"]);

    //cek tombol submit sudah ditekan atau belum
    if (isset($_POST["simpan"])) {

        $insert = "INSERT INTO buku VALUES('', '$judul', '$pengarang', '$penerbit', '$tahun_terbit', '$isbn', '$jumlah_buku', '$tgl_input')";
        mysqli_query($conn, $insert);
        // cek jika data berhasil ditambahkan
            echo "
                <script>
                    alert('data berhasil ditambahkan');
                    document.location.href = '?page=buku';
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
                                            <label>Judul</label>
                                            <input type="text" class="form-control" name="judul" />
                                        </div>

                                        <div class="form-group">
                                            <label>Pengarang</label>
                                            <input type="text" class="form-control" name="pengarang" />
                                        </div>

                                        <div class="form-group">
                                            <label>Penerbit</label>
                                            <input type="text" class="form-control" name="penerbit" />
                                        </div>

                                        <div class="form-group">
                                            <label>Tahun Terbit</label>
                                            <select class="form-control" name="tahun_terbit">
                                                <?php
                                                    $tahun_terbit = date("Y");

                                                    for ($i=$tahun_terbit-25; $i  <= $tahun_terbit; $i++){
                                                        echo '
                                                            <option value="'.$i.'">'.$i.'</option>
                                                        ';
                                                    }
                                                ?>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>ISBN</label>
                                            <input type="text" class="form-control" name="isbn" />
                                        </div>

                                        <div class="form-group">
                                            <label>Jumlah Buku</label>
                                            <input class="form-control" type="number" name="jumlah_buku" />
                                        </div>

                                        <div class="form-group">
                                            <label>Tanggal Input</label>
                                            <input type="date" class="form-control" name="tgl_input" />
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