<?php
include_once("../connect.php");
$id_penerbit = $_GET['id_penerbit'];

$penerbit = mysqli_query($mysqli, "SELECT * FROM penerbit WHERE id_penerbit='$id_penerbit'");

while ($penerbit_data = mysqli_fetch_array($penerbit)) {
    $nama_penerbit = $penerbit_data['nama_penerbit'];
    $email = $penerbit_data['email'];
    $telp = $penerbit_data['telp'];
    $alamat = $penerbit_data['alamat'];
}
?>

<html>

<head>
    <title>Edit Penerbit</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
        integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>

<body>
    <a class="btn btn-secondary" href="index.php">Go to Home</a>
    <br /><br />

    <form action="edit.php?id_penerbit=<?php echo $id_penerbit; ?>" method="post">
        <table class="table table-borderless" width="50%" align="center">
            <tr>
                <td>ID Penerbit</td>
                <td><?php echo $id_penerbit; ?> </td>
            </tr>
            <tr>
                <td>Nama Penerbit</td>
                <td><input class="form-control" type="text" name="nama_penerbit" value="<?php echo $nama_penerbit; ?>">
                </td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input class="form-control" type="email" name="email" value="<?php echo $email; ?>"></td>
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

    // Check If form submitted, update data in the penerbit table.
    if (isset($_POST['update'])) {

        $nama_penerbit = $_POST['nama_penerbit'];
        $email = $_POST['email'];
        $telp = $_POST['telp'];
        $alamat = $_POST['alamat'];

        include_once("connect.php");

        $result = mysqli_query($mysqli, "UPDATE penerbit SET nama_penerbit = '$nama_penerbit', email = '$email', telp = '$telp', alamat = '$alamat' WHERE id_penerbit = '$id_penerbit';");

        header("Location:index.php");
    }
    ?>
</body>

</html>