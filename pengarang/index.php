<?php
include_once("../connect.php");
$pengarang = mysqli_query($mysqli, "SELECT * FROM pengarang ORDER BY nama_pengarang ASC");
?>

<html>

<head>
    <title>Pengarang</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
        integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
        integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous">
    </script>
</head>

<body>
    <center>
        <a class="btn btn-primary rounded" href="../index.php">Buku</a> |
        <a class="btn btn-primary rounded" href="../penerbit/index.php">Penerbit</a> |
        <a class="btn btn-primary rounded" href="index.php">Pengarang</a> |
        <a class="btn btn-primary rounded" href="../katalog/index.php">Katalog</a>
        <hr>
    </center>

    <a href="add.php" class="btn btn-success mb-3">Add New Pengarang</a><br />

    <table class="table" width='80%' border="1">
        <tr>
            <th>Nama Pengarang</th>
            <th>Email</th>
            <th>Telepon</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>
        <tbody>
            <?php
            while ($pengarang_data = mysqli_fetch_array($pengarang)) {
                echo "<tr>";
                echo "<td>" . $pengarang_data['nama_pengarang'] . "</td>";
                echo "<td>" . $pengarang_data['email'] . "</td>";
                echo "<td>" . $pengarang_data['telp'] . "</td>";
                echo "<td>" . $pengarang_data['alamat'] . "</td>";
                echo "<td>
                        <a class='btn btn-primary' href='edit.php?id_pengarang=" . $pengarang_data['id_pengarang'] . "'>Edit</a> 
                        | 
                        <a class='btn btn-danger' href='delete.php?id_pengarang=" . $pengarang_data['id_pengarang'] . "'>Delete</a>
                      </td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>

</html>