<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-
scale=1.0">

    <title>Edit Data Pasien</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row mt-3">
            <div class="col-4">
                <h3>UPDATE DATA CUSTOMER</h3>
                <?php
                include 'koneksi.php';
                $panggil = $koneksi->query("SELECT * FROM customers where idCustomer='$_GET[edit]'");
                ?>
                <?php
                while ($row = $panggil->fetch_assoc()) {
                ?>
                    <form action="koneksi.php" method="POST">
                        <div class="form-group">
                            <label for="idCustomer">ID Customer</label>

                            <input type="text" class="form-control mb-3" name="idCustomer" value="<?= $row['idCustomer'] ?>" readonly>

                        </div>
                        <div class="form-group">
                            <label for="username">username</label>

                            <input type="text" class="form-control mb-3" name="username" value="<?= $row['username'] ?>">

                        </div>

                        <div class="form-group">

                            <label for="jk">Jenis Kelamin</label>
                            <div class="form-check">

                                <input type="radio" class="form-check-input" name="jk" value="perempuan" <?php
                                                                                                            if (($row['jk']) === "perempuan") {
                                                                                                                echo "checked";
                                                                                                            }
                                                                                                            ?>> Perempuan
                            </div>

                            <div class="form-check">

                                <input type="radio" class="form-check-input" name="jk" value="laki-laki" <?php
                                                                                                            if (($row['jk']) === "laki-laki") {
                                                                                                                echo "checked";
                                                                                                            }
                                                                                                            ?>> Laki-laki
                            </div>
                            <div class="form-group mt-3">
                                <label for="Alamat">Alamat</label>

                                <textarea class="form-control" name="Alamat" id="Alamat" cols="5" rows="3" placeholder="Alamat"><?= $row['Alamat'] ?></textarea>
                            </div>

                            <div class="form-group mt-3">

                                <input type="submit" name="edit" value="Edit" class="form-control btn btn-primary">
                            </div>
                        </div>
                    </form>
                <?php } ?>
            </div>
        </div>
    </div>
</body>

</html>