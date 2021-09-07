<?php
# Delete ad from database
include "../helpers/conn.php";
$id = $_GET["id"];
$images = $_GET["images"];
$sql = "DELETE FROM ads WHERE id = $id";
$success;
if (mysqli_query($conn, $sql)) $success = true;
else $success = false;
mysqli_close($conn);
if ($success) {
    if (is_dir($images)) {
        $temp = scandir($images);
        for ($i = 2; $i < sizeof($temp); $i++) {
            unlink($images . $temp[$i]);
        }
        rmdir($images);
    }
    header("Location: search.php?success");
} else header("Location: search.php?failure");
