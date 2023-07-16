<?php
$koneksi = new mysqli('localhost', 'root', '', 'customer') or die(mysqli_error($koneksi));

if (isset($_POST['simpan'])) {
    $idCustomer = $_POST['idCustomer'];
    $username = $_POST['username'];
    $jk = $_POST['jk'];
    $alamat = $_POST['alamat'];
    $koneksi->query("INSERT INTO customers (idCustomer, username, jk, alamat) values ('$idCustomer','$username','$jk','$alamat')");

    header('location:customer.php');
}

if (isset($_GET['idCustomer'])) {
    $idCustomer = $_GET['idCustomer'];
    $koneksi->query("DELETE FROM customers where idCustomer = '$idCustomer'");
    header("location:customer.php");
}

if (isset($_POST['edit'])) {
    $idCustomer = $_POST['idCustomer'];
    $username = $_POST['username'];
    $jk = $_POST['jk'];
    $alamat = $_POST['alamat'];

    $koneksi->query("UPDATE customers SET idCustomer='$idCustomer',usernsme='$username',jk='$jk',alamat='$alamat'WHERE idCustomer=$idCustomer");
    header("location:customer.php");
}