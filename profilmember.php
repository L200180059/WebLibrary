<?php
    session_start();

    require "functions.php";

    error_reporting(E_ALL ^ E_NOTICE);
    $id = $_SESSION['id_user'];

    $sql = mysqli_query($conn, "SELECT * FROM user WHERE id=$id");
    $result = mysqli_fetch_row( $sql);

?>

<html>
    <head><title>Biodata Member</title></head>
    <body>
    <h3>BIODATA MEMBER</h3>
    <table>
        <tr>
            <td>Nama</td>
            <td> : </td>
            <td><?= $result[1]; ?></td>
        </tr>

        <tr>
            <td>Alamat</td>
            <td> : </td>
            <td><?= $result[2]; ?></td>
        </tr>

        <tr>
            <td>NIK</td>
            <td> : </td>
            <td><?= $result[3]; ?></td>
        </tr>

        <tr>
            <td>Email</td>
            <td> : </td>
            <td><?= $result[4]; ?></td>
        </tr>

        <tr>
            <td>Nomor HP</td>
            <td> : </td>
            <td><?= $result[5]; ?></td>
        </tr>
    </table>
    </body>
</html>