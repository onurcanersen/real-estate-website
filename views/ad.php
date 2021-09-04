<div class="row ad">
    <div class="col-5">
        <img id="main-image" src="<?php echo $ad["images"] . $images[0]; ?>" alt="Ad image">
        <?php foreach ($images as $image) : ?>
            <img class="image" src="<?php echo $ad["images"] . $image; ?>" alt="Ad image">
        <?php endforeach; ?>
        <div id="ad-map"></div>
    </div>
    <div class="col-7">
        <h1><?php echo $ad["country"]; ?>, <?php echo $ad["city"]; ?></h1>
        <h2><?php echo $ad["address"]; ?></h2>
        <h6><?php echo $ad["date"]; ?></h6>
        <div class="row">
            <div class="col-3"><?php echo $ad["type"] === "for-rent" ? "For rent" : "For sale"; ?></div>
            <div class="col-3">&#36;<?php echo $ad["price"]; ?></div>
            <div class="col-2"><?php echo $ad["bedrooms"]; ?> bds</div>
            <div class="col-2"><?php echo $ad["bathrooms"]; ?> ba</div>
            <div class="col-2"><?php echo $ad["year"]; ?></div>
        </div>
        <p><?php echo $ad["description"]; ?></p>
    </div>
</div>