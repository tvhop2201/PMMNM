<?php
$conn = mysqli_connect('localhost', 'root', '', 'dbnhom');
if (!$conn) {
    die('Ket noi that bai: ' . mysqli_connect_error());
}
