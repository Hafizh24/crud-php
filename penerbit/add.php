<html>

<head>
    <title>Add Penerbit</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
        integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>

<body>
    <a class="btn btn-secondary" href="index.php">Go to Home</a>
    <br /><br />

    <form action="add.php" method="post" name="form1">
        <table class="table table-borderless" width="50%" align="center">
            <tr>
                <td>ID Penerbit</td>
                <td><input class="form-control" type="text" name="id_penerbit"></td>
            </tr>
            <tr>
                <td>Nama Penerbit</td>
                <td><input class="form-control" type="text" name="nama_penerbit"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input class="form-control" type="email" name="email"></td>
            </tr>
            <tr>
                <td>Telepon</td>
                <td><input class="form-control" type="text" name="telp"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input class="form-control" type="text" name="alamat"></td>
            </tr>
            <tr>
                <td></td>
                <td><input class="btn btn-success" type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>

    <?php

    // Check If form submitted, insert form data into penerbit table.
    if (isset($_POST['Submit'])) {
        $id_penerbit = $_POST['id_penerbit'];
        $nama_penerbit = $_POST['nama_penerbit'];
        $email = $_POST['email'];
        $telp = $_POST['telp'];
        $alamat = $_POST['alamat'];

        include_once("../connect.php");

        $result = mysqli_query($mysqli, "INSERT INTO `penerbit` (`id_penerbit`, `nama_penerbit`, `email`, `telp`, `alamat`) VALUES ('$id_penerbit', '$nama_penerbit', '$email', '$telp', '$alamat');");

        header("Location:index.php");
    }
    ?>
</body>

</html>