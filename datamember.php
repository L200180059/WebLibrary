<?php
    require "functions.php";
    $result = mysqli_query($conn, "SELECT * FROM user WHERE level='member'");
    
?>
<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data member
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Nama</th>
                                            <th>Alamat</th>
                                            <th>NIK</th>
                                            <th>Email</th>
                                            <th>Nomor HP</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <?php $i = 1; ?>
                                    <?php while ($row = mysqli_fetch_array($result)){ ?>

                                    <tr>
                                        <td><?= $i; ?></td>
                                        <td><?= $row["nama"]; ?></td>
                                        <td><?= $row["alamat"]; ?></td>
                                        <td><?= $row["nik"]; ?></td>
                                        <td><?= $row["email"]; ?></td>
                                        <td><?= $row["no_hp"]; ?></td>
                                        <td><a href="ubahmember.php?id=<?= $row["id"];?>" class="btn btn-info">Ubah</a>
                                        <a href="hapusmember.php?id=<?= $row["id"];?>" class="btn btn-danger" onclick="return confirm('apakah anda ingin menghapus?')">Hapus</a></td>
                                    </tr>
                                    <?php $i++; } ?>
                            </div>
                        </div>
                    </div>
                </div>
</div>
