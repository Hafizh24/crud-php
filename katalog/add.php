<?php
include_once("../connect.php");
?>

<html>

<head>
    <title>Add Katalog</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
        integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>

<body>
    <a class="btn btn-secondary" href="index.php">Go to Home</a>
    <br /><br />

    <form action="add.php" method="post" name="form1">
        <table class="table table-borderless" width="50%" align="center">
            <tr>
                <td>ID Katalog</td>
                <td><input class="form-control" type="text" name="id_katalog"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input class="form-control" type="text" name="nama" required></td>
            </tr>
            <tr>
                <td></td>
                <td><input class="btn btn-success" type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>

    <?php
    if (isset($_POST['Submit'])) {
        $id_katalog = $_POST['id_katalog'];
        $nama = $_POST['nama'];

        $result = mysqli_query($mysqli, "INSERT INTO katalog (id_katalog, nama) VALUES('$id_katalog', '$nama')");

        header("Location:index.php");
    }
    ?>
</body>

</html>