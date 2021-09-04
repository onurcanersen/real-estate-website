<?php
# Validate form inputs
$country = $_POST["country"];
if (!$country) array_push($errors, "Country can not be empty.");
$city = $_POST["city"];
if (!$city) array_push($errors, "City can not be empty.");
$address = $_POST["address"];
if (!$address) array_push($errors, "Address can not be empty.");
$latitude = $_POST["latitude"];
$longitude = $_POST["longitude"];
if (!$latitude || !$longitude) array_push($errors, "Select a location.");
$type = $_POST["type"];
$price = $_POST["price"];
if (!$price) array_push($errors, "Price can not be empty.");
$bedrooms = $_POST["bedrooms"];
if (!$bedrooms) array_push($errors, "Bedrooms can not be empty.");
$bathrooms = $_POST["bathrooms"];
if (!$bathrooms) array_push($errors, "Bathrooms can not be empty.");
$year = $_POST["year"];
if (!$year) array_push($errors, "Year can not be empty.");
$description = $_POST["description"];
if (!$description) array_push($errors, "Description can not be empty.");
$extensions = ["jpg", "jpeg", "png"];
foreach ($_FILES["images"]["tmp_name"] as $key => $value) {
    if ($_FILES["images"]["size"][$key] > 1_000_000) array_push($errors, "File size can not be more than 1mb.");
    $extension = pathinfo($_FILES["images"]["name"][$key], PATHINFO_EXTENSION);
    if (!in_array($extension, $extensions)) {
        if ($extension === "") array_push($errors, "Select at least 1 image.");
        else array_push($errors, "File extension .$extension is not supported.");
    }
}
