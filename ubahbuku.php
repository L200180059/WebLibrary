<?php
    require "functions.php";
    $id = $_GET["id"];
    $result = mysqli_query($conn, "SELECT * FROM buku WHERE id=$id");
    $p = mysqli_fetch_array($result); 

    error_reporting(E_ALL ^ E_NOTICE);
    $judul = $_POST["judul"];
    $pengarang = $_POST["pengarang"];
    $penerbit = $_POST["penerbit"];
    $tahun_terbit = $_POST["tahun_terbit"];
    $isbn = $_POST["isbn"];
    $jumlah_buku = $_POST["jumlah_buku"];
    $tgl_input = $_POST["tgl_input"];

    $query = "UPDATE buku SET judul = '$judul', pengarang = '$pengarang', penerbit = '$penerbit', tahun_terbit = '$tahun_terbit', isbn = '$isbn', jumlah_buku = '$jumlah_buku', tgl_input = '$tgl_input' WHERE id = '$id'";

    //cek tombol submit sudah ditekan atau belum
    if (isset($_POST["simpan"])) {
        echo "asa";
        mysqli_query($conn, $query);
        // cek jika data berhasil ditambahkan
            echo "
                <script>
                    alert('data berhasil diubah');
                    document.location.href = 'index.php?page=buku';
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
                                            <label>Judul</label>
                                            <input type="text" class="form-control" name="judul" value="<?= $p['judul']; ?>" />
                                        </div>

                                        <div class="form-group">
                                            <label>Pengarang</label>
                                            <input type="text" class="form-control" name="pengarang" value="<?= $p['pengarang']; ?>" />
                                        </div>

                                        <div class="form-group">
                                            <label>Penerbit</label>
                                            <input type="text" class="form-control" name="penerbit" value="<?= $p['penerbit']; ?>" />
                                        </div>

                                        <div class="form-group">
                                            <label>Tahun Terbit</label>
                                            <select  class="form-control" name="tahun_terbit" value="<?= $p['tahun_terbit']; ?>" >
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
                                            <input type="text" class="form-control" name="isbn" value="<?= $p['isbn']; ?>" />
                                        </div>

                                        <div class="form-group">
                                            <label>Jumlah Buku</label>
                                            <input  class="form-control" type="number" name="jumlah_buku" value="<?= $p['jumlah_buku']; ?>" />
                                        </div>

                                        <div class="form-group">
                                            <label>Tanggal Input</label>
                                            <input type="text" class="form-control" name="tgl_input" value="<?= $p['tgl_input']; ?>" />
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