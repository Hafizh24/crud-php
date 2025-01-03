<?php
include_once("../connect.php");
$id_pengarang = $_GET['id_pengarang'];

// Fetch current pengarang data
$pengarang = mysqli_query($mysqli, "SELECT * FROM pengarang WHERE id_pengarang='$id_pengarang'");

while ($pengarang_data = mysqli_fetch_array($pengarang)) {
    $nama_pengarang = $pengarang_data['nama_pengarang'];
    $email = $pengarang_data['email'];
    $telp = $pengarang_data['telp'];
    $alamat = $pengarang_data['alamat'];
}
?>

<html>

<head>
    <title>Edit Pengarang</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
        integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>

<body>
    <a class="btn btn-secondary" href="index.php">Go to Home</a>
    <br /><br />

    <form action="edit.php?id_pengarang=<?php echo $id_pengarang; ?>" method="post">
        <table class="table table-borderless" width="50%">
            <tr>
                <td>Nama Pengarang</td>
                <td><input class="form-control" type="text" name="nama_pengarang"
                        value="<?php echo $nama_pengarang; ?>"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input class="form-control" type="text" name="email" value="<?php echo $email; ?>"></td>
            </tr>
            <tr>
                <td>Telepon</td>
                <td><input class="form-control" type="text" name="telp" value="<?php echo $telp; ?>"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input class="form-control" type="text" name="alamat" value="<?php echo $alamat; ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><input class="btn btn-success" type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>

    <?php
    // Update the pengarang record in the database
    if (isset($_POST['update'])) {
        $nama_pengarang = $_POST['nama_pengarang'];
        $email = $_POST['email'];
        $telp = $_POST['telp'];
        $alamat = $_POST['alamat'];

        $result = mysqli_query($mysqli, "UPDATE pengarang SET nama_pengarang='$nama_pengarang', email='$email', telp='$telp', alamat='$alamat' WHERE id_pengarang='$id_pengarang'");

        header("Location: index.php");
    }
    ?>

</body>

</html>