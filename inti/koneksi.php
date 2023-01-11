<?php
$mysql = @mysqli_connect('localhost', 'root', '', 'db_pengaduan_masyarakat');
if (mysqli_connect_errno($mysql)){
    die(mysqli_connect_error($mysql));
}