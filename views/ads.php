<div class="row ads">
    <div class="col-6 map">
        <div id="ads-map"></div>
    </div>
    <div class="col-6 list">
        <div class="row">
            <?php foreach ($ads as $ad) : ?>
                <div class="col-6 ad-container">
                    <div class="ad">
                        <a href="../processes/ad.php?id=<?php echo $ad["id"]; ?>" target="_blank">
                            <img src="<?php $images = scandir($ad["images"]);
                                        echo $ad["images"] . $images[2]; ?>" alt="Ad image">
                            <h4><?php echo $ad["country"]; ?>, <?php echo $ad["city"]; ?></h4>
                            <h5>&#36;<?php echo $ad["price"]; ?></h5>
                            <h6><?php echo $ad["type"] === "for-rent" ? "For rent" : "For sale"; ?>, <?php echo $ad["bedrooms"]; ?> bds, <?php echo $ad["bathrooms"]; ?> be</h6>
                            <p><?php
                                echo strlen($ad["description"]) > 70 ? substr($ad["description"], 0, 70) . "..." : $ad["description"];
                                ?></p>
                        </a>
                        <a href="../processes/update.php?id=<?php echo $ad["id"]; ?>" class="update-icon"><i class="material-icons">edit</i></a>
                        <a href="../processes/delete.php?id=<?php echo $ad["id"]; ?>&images=<?php echo $ad["images"]; ?>" class="delete-icon"><i class="material-icons">delete</i></a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>