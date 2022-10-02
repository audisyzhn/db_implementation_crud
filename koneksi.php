<?php

$conn = mysqli_connect("localhost", "root", "", "db_koleksibuku");

if (!$conn) {
    // echo "Koneksi Gagal";
    die();
} else {
    // echo "Koneksi Berhasil";
}
