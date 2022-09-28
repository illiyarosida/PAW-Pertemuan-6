<?php

// Create connection
$koneksi = mysqli_connect ("localhost", "root", "", "paw");

// Check Connection
if ($koneksi) {
    echo "Berhasil melakukan koneksi";
}