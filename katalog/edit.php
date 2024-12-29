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
</head>

<body>
    <a href="index.php">Go to Home</a>
    <br /><br />

    <form action="edit.php?id_katalog=<?php echo $id_katalog; ?>" method="post" name="form1">
        <table width="25%" border="0">
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" value="<?php echo $nama; ?>" required></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="update" value="Update"></td>
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