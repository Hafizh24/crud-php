<?php
include_once("../connect.php");

$id_katalog = $_GET['id_katalog'];

// Fetch data based on id_katalog
$katalog_result = mysqli_query($mysqli, "SELECT * FROM katalog WHERE id_katalog='$id_katalog'");

while ($katalog_data = mysqli_fetch_array($katalog_result)) {
    $nama = $katalog_data['nama'];
}
?>

<html>

<head>
    <title>Edit Katalog</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
        integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>

<body>
    <a class="btn btn-secondary" href="index.php">Go to Home</a>
    <br /><br />

    <form action="edit.php?id_katalog=<?php echo $id_katalog; ?>" method="post" name="form1">
        <table class="table table-borderless" width="50%" align="center">
            <tr>
                <td>Nama</td>
                <td><input class="form-control" type="text" name="nama" value="<?php echo $nama; ?>" required></td>
            </tr>
            <tr>
                <td></td>
                <td><input class="btn btn-success" type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>

    <?php
    if (isset($_POST['update'])) {
        $nama = $_POST['nama'];

        $result = mysqli_query($mysqli, "UPDATE katalog SET nama='$nama' WHERE id_katalog='$id_katalog'");

        header("Location: index.php");
    }
    ?>
</body>

</html>