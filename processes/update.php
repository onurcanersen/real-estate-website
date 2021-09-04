<?php
# Fetch ad from database with id
include "../helpers/conn.php";
$id = $_GET["id"];
$sql = "SELECT * FROM ads WHERE id = $id";
$result = mysqli_query($conn, $sql);
$ad = $result->fetch_assoc();
include "../helpers/cols.php";
$errors = [];
if (isset($_POST["submit"])) {
    include "../helpers/valdn.php";
    if (empty($errors)) {
        # Update ad from database
        $sql = "UPDATE ads SET country = '$country', city = '$city', address = '$address', latitude = $latitude, longitude = $longitude, type = '$type', price = $price, bedrooms = $bedrooms, bathrooms = $bathrooms, year = '$year', description = '$description' WHERE id = $id";
        if (!mysqli_query($conn, $sql)) array_push($errors, mysqli_error($conn));
        mysqli_close($conn);
        if (empty($errors)) {
            # Delete old images
            $images = scandir($ad["images"]);
            for ($i = 2; $i < sizeof($images); $i++) {
                unlink($ad["images"] . $images[$i]);
            }
            # Upload images
            foreach ($_FILES["images"]["tmp_name"] as $key => $value) {
                $extension = pathinfo($_FILES["images"]["name"][$key], PATHINFO_EXTENSION);
                move_uploaded_file($_FILES["images"]["tmp_name"][$key], $ad["images"] . uniqid() . "." . $extension);
            }
            header("Location: search.php?success");
        }
    }
}
?>

<?php
$title = "Update Real Estate Ad";
include "../views/subviews/header.php";
?>
<div class="update">
    <h1>Update Real Estate Ad</h1>
    <?php include "../views/errors.php"; ?>
    <?php include "../views/form.php"; ?>
</div>