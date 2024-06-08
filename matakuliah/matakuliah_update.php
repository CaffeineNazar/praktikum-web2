<?php
if (isset($_POST['update'])) {
    $id = $_POST['id_matkul'];
    $kode = $_POST['kode'];
    $nama = $_POST['nama'];
    $sks = $_POST['sks'];
    $semester = $_POST['semester'];
    // update user data
    $result = mysqli_query($con, "UPDATE matakuliah SET kode='$kode',nama='$nama',sks='$sks',semester='$semester' WHERE id_matkul=$id")
        or die(mysqli_error($con));
    // Redirect to homepage to display updated user in list
    header("Location:?page=matakuliah-show");
}