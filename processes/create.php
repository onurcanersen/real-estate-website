<?php
include "../helpers/cols.php";
$errors = [];
if (isset($_POST["submit"])) {
    include "../helpers/valdn.php";
    if (empty($errors)) {
        # Make a directory to upload images
        $images = "";
        do {
            $images = "../assets/uploads/" . uniqid() . "/";
        } while (!mkdir($images));
        # Insert ad to database
        include "../helpers/conn.php";
        $sql = "INSERT INTO ads (country, city, address, latitude, longitude, type, price, bedrooms, bathrooms, year, images, description) VALUES ('$country', '$city', '$address', $latitude, $longitude, '$type', $price, $bedrooms, $bathrooms, '$year', '$images', '$description')";
        if (!mysqli_query($conn, $sql)) array_push($errors, mysqli_error($conn));
        mysqli_close($conn);
        if (empty($errors)) {
            # Upload images
            foreach ($_FILES["images"]["tmp_name"] as $key => $value) {
                $extension = pathinfo($_FILES["images"]["name"][$key], PATHINFO_EXTENSION);
                move_uploaded_file($_FILES["images"]["tmp_name"][$key], $images . uniqid() . "." . $extension);
            }
            header("Location: ../index.php?success");
        } else {
            if (is_dir($images)) {
                rmdir($images);
            }
        }
    }
}
?>

<?php
$title = "Create Real Estate Ad";
include "../views/subviews/header.php";
?>

<div class="create">
    <h1>Create New Real Estate Ad</h1>
    <?php include "../views/errors.php"; ?>
    <?php include "../views/form.php"; ?>
</div>