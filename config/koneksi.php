<?php 

$conn = mysqli_connect('localhost', 'root', '', 'db_inventory_refa');

if(!$conn){
    die("koneksi gagal". mysqli_connect_error());
}