<?php
include './config/koneksi.php';
$result = mysqli_query($conn, "DESCRIBE content");
echo "<pre>";
while ($row = mysqli_fetch_assoc($result)) {
    print_r($row);
}
echo "</pre>";
