<?php
# Fetch all ads from database
include "../helpers/conn.php";
$search = $_GET["search"] ?? "";
$type = $_GET["type"] ?? "";
$sortBy = $_GET["sort-by"] ?? "";
$price = $_GET["price"] ?? 0;
$bedrooms = $_GET["bedrooms"] ?? 0;
$bathrooms = $_GET["bathrooms"] ?? 0;
if (isset($_GET["filter"])) $sql = "SELECT * FROM ads WHERE (country LIKE '%$search%' OR city LIKE '%$search%') AND type LIKE '%$type%' AND price >= $price AND bedrooms >= $bedrooms AND bathrooms >= $bathrooms ORDER BY $sortBy";
else $sql = "SELECT * FROM ads";
$result = mysqli_query($conn, $sql);
$ads = $result->fetch_all(MYSQLI_ASSOC);
mysqli_close($conn);
?>

<?php
$title = "Search Real Estate Ads";
include "../views/subviews/header.php";
?>

<?php include "../views/filter.php"; ?>

<?php include "../views/ads.php"; ?>

<script type="text/javascript">
    var ads = <?php echo json_encode($ads); ?>;
</script>
<script type="text/javascript" src="../assets/js/search.js"></script>