<?php
//koneksi ke database
$conn = mysqli_connect("localhost:3308","root","","wad_project3");

//ambil data dari tabel database / query data
$result = mysqli_query($conn,"SELECT * FROM students");

var_dump(mysqli_fetch_object($result));
//ambil data (fetch) data dari object $result
//mysqli_fetch_row() // mengembalikan array numerik
//mysqli_fetch_assoc() // mengembalikan array associative
//mysqli_fetch_array() // mengembalikan array keduanya
//mysqli_fetch_object() // mengembalikan objek

?>