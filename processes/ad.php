<?php
$title = "Real Estate Ad";
include "../views/subviews/header.php";

# Fetch ad from database with id
include "../helpers/conn.php";
$id = $_GET["id"];
$sql = "SELECT * FROM ads WHERE id = $id";
$result = mysqli_query($conn, $sql);
$ad = $result->fetch_assoc();
$images = scandir($ad["images"]);
$images = array_slice($images, 2);
$latitude = $ad["latitude"];
$longitude = $ad["longitude"];
?>

<?php include "../views/ad.php"; ?>

<script type="text/javascript">
    var latitude = <?php echo $latitude; ?>;
    var longitude = <?php echo $longitude; ?>;
</script>
<script type="text/javascript" src="../assets/js/ad.js"></script>