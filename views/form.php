<form action="" method="POST" class="form" enctype="multipart/form-data">
    <div class="row">
        <div class="col-3">
            <label for="country">Country</label>
            <br>
            <input type="text" name="country" value="<?php echo $country; ?>">
        </div>
        <div class="col-3">
            <label for="city">City</label>
            <br>
            <input type="text" name="city" value="<?php echo $city; ?>">
        </div>
        <div class="col-3">
            <label for="address">Address</label>
            <br>
            <input type="text" name="address" value="<?php echo $address; ?>">
        </div>
        <div class="col-3">
            <label for="type">Type</label>
            <br>
            <select name="type" id="type">
                <option value="for-rent" <?php echo $type === "for-rent" ? "selected" : ""; ?>>For Rent</option>
                <option value="for-sale" <?php echo $type === "for-sale" ? "selected" : ""; ?>>For Sale</option>
            </select>
        </div>
    </div>
    <div class="row">
        <div class="col-3">
            <label for="price">Price</label>
            <br>
            <input type="number" name="price" value="<?php echo $price; ?>">
        </div>
        <div class="col-3">
            <label for="bedrooms">Bedrooms</label>
            <br>
            <input type="number" name="bedrooms" value="<?php echo $bedrooms; ?>">
        </div>
        <div class="col-3">
            <label for="bathrooms">Bathrooms</label>
            <br>
            <input type="number" name="bathrooms" value="<?php echo $bathrooms; ?>">
        </div>
        <div class="col-3">
            <label for="year">Year</label>
            <br>
            <input type="number" name="year" value="<?php echo $year; ?>">
        </div>
    </div>
    <div class="row">
        <div class="col-6 map-container">
            <label>Click to Select a Location</label>
            <br>
            <div id="form-map"></div>
        </div>
        <input id="latitude" type="hidden" name="latitude" value="<?php echo $latitude; ?>">
        <input id="longitude" type="hidden" name="longitude" value="<?php echo $longitude; ?>">
        <div class="col-6 description-container">
            <label for="description">Description</label>
            <br>
            <textarea id="description" name="description"><?php echo $description; ?></textarea>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <label for="images[]">Select Images</label>
            <input type="file" name="images[]" multiple>
        </div>
        <div class="col-6">
            <input type="submit" name="submit" value="Submit">
        </div>
    </div>
</form>
<script src="/real-estate-website/assets/js/form.js"></script>