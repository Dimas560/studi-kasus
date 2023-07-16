<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dimss | XII RPL 1</title>

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>

<body>
    <div style="background-color: #58151c;" class="container">
        <nav style="background-color: #ffc107;" class="navbar navbar-expand-lg navbar-light bg-light">
            <div style="background-color: #ffc107;" class="container-fluid">
                <a class="navbar-brand" href="#ffc107">HOTEL</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul style="background-color: #ffc107;" class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Logout</a>

                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="customer.php ">Customer</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="row mt-3">
            <div class="col-sm">
                <h3>Tabel Customer</h3>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <a href="tambahdata.php" class="btn btn-primary btn-sm d-flex justify-content-center">Tambah Data</a>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <table class="table table-striped table-hover table-sm">
                    <tr>
                        <th>No</th>
                        <th>ID Customer</th>
                        <th>username</th>
                        <th>jk</th>
                        <th>Alamat</th>
                        <th>Action</th>
                    </tr>
                    <?php
                    include 'koneksi.php';
                    $no = 1;
                    $hasil = $koneksi->query("SELECT * FROM customers");
                    ?>
                    <?php
                    while ($row = $hasil->fetch_assoc()) {
                    ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $row['idCustomer']; ?></td>
                            <td><?= $row['username']; ?></td>
                            <td><?= $row['jk']; ?></td>
                            <td><?= $row['Alamat']; ?></td>
                            <td>
                                <a href="editcustomer.php?edit=<?= $row['idCustomer']; ?>" class="btn btn-warning btn-sm">Edit</a>
                                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#hapusModal<?= $row['idCustomer']; ?>">
                                    Hapus
                                </button>
                            </td>
                        </tr>

                        <!-- Modal Hapus -->
                        <div class="modal fade" id="hapusModal<?= $row['idCustomer']; ?>" tabindex="-1" aria-labelledby="hapusModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="hapusModalLabel">Konfirmasi Hapus</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Apakah Anda yakin ingin menghapus data ini?</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                        <a href="koneksi.php?idCustomer=<?= $row['idCustomer']; ?>" class="btn btn-danger btn-sm">Hapus</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>

    <script src="assets/js/bootstrap.bundle.min.js"></script>