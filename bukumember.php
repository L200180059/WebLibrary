<?php
    require "functions.php";
    $result = mysqli_query($conn, "SELECT * FROM buku");
    
?>
<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Data Buku
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Judul</th>
                                            <th>Pengarang</th>
                                            <th>Penerbit</th>
                                            <th>isbn</th>
                                            <th>jumlah buku</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <?php $i = 1; ?>
                                    <?php while ($row = mysqli_fetch_array($result)){ ?>

                                    <tr>
                                        <td><?= $i; ?></td>
                                        <td><?= $row["judul"]; ?></td>
                                        <td><?= $row["pengarang"]; ?></td>
                                        <td><?= $row["penerbit"]; ?></td>
                                        <td><?= $row["isbn"]; ?></td>
                                        <td><?= $row["jumlah_buku"]; ?></td>
                                        <td><a href="transaksi.php?id=<?= $row["id"];?>&judul=<?= $row["judul"] ?>" class="btn btn-success">Pinjam</a>
                                    </tr>
                                    <?php $i++; } ?>
                            </div>
                        </div>
                    </div>
                </div>
</div>
