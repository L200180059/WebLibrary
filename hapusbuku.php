<?php

require "functions.php";

$id = $_GET['id'];

$result = mysqli_query($conn, "DELETE FROM buku WHERE id=$id");

?>
<script>
    alert('data berhasil dihapus');
        document.location.href = 'index.php?page=buku';
</script>
