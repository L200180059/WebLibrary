<?php
    require "functions.php";
    $sql = "SELECT user.nama, buku.judul, transaksi.jumlah, transaksi.tgl_pinjam, tgl_kembali FROM `transaksi`, user, buku WHERE user.id=transaksi.id_user AND buku.id=transaksi.id_buku";
    $result = mysqli_query($conn, $sql);
    
?>
<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Data Peminjaman Buku
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Nama Peminjam</th>
                                            <th>judul buku</th>
                                            <th>Jumlah buku</th>
                                            <th>Tanggal Pinjam</th>
                                            <th>Tanggal Kembali</th>
                                        </tr>
                                    </thead>
                                    <?php $i = 1; ?>
                                    <?php while ($row = mysqli_fetch_array($result)){ ?>

                                    <tr>
                                        <td><?= $i; ?></td>
                                        <td><?= $row["nama"]; ?></td>
                                        <td><?= $row["judul"]; ?></td>
                                        <td><?= $row["jumlah"]; ?></td>
                                        <td><?= $row["tgl_pinjam"]; ?></td>
                                        <td><?= $row["tgl_kembali"]; ?></td>
                                    </tr>
                                    <?php $i++; } ?>
                            </div>
                        </div>
                    </div>
                </div>
</div>
