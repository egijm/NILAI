<?php
include_once('config.php');
$id = $_GET['id'];
$sql = "DELETE FROM siswa WHERE id = '$id'";
$result = mysqli_query($con, $sql);
if ($result) {
    header('location: index.php?m=siswa&s=view');
} else {
    include "index.php?m=siswa&s=view";
    echo '<script language="JavaScript">';
        echo 'alert("Data Gagal Ditambahkan.")';
    echo '</script>';
}