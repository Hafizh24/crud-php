<html>

<head>
    <title>Add Pengarang</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
        integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>

<body>
    <a class="btn btn-secondary" href="index.php">Go to Home</a>
    <br /><br />

    <form action="add.php" method="post" name="form1">
        <table class="table table-borderless" width="50%">
            <tr>
                <td>ID Pengarang</td>
                <td><input class="form-control" type="text" name="id_pengarang"></td>
            </tr>
            <tr>
                <td>Nama Pengarang</td>
                <td><input class="form-control" type="text" name="nama_pengarang"></td>
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

    // Check If form submitted, insert form data into pengarang table.
    if (isset($_POST['Submit'])) {
        $id_pengarang = $_POST['id_pengarang'];
        $nama_pengarang = $_POST['nama_pengarang'];
        $email = $_POST['email'];
        $telp = $_POST['telp'];
        $alamat = $_POST['alamat'];

        include_once("../connect.php");

        $result = mysqli_query($mysqli, "INSERT INTO pengarang (id_pengarang, nama_pengarang, email, telp, alamat) VALUES ('$id_pengarang', '$nama_pengarang', '$email', '$telp', '$alamat');");

        header("Location:index.php");
    }
    ?>
</body>

</html>