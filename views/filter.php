<form action="" method="GET" class="filter">
    <input type="text" name="search" placeholder="Search" value="<?php echo $search; ?>">
    <label for="type">Type</label>
    <select name="type" id="type">
        <option value="" <?php echo $type === "" ? "selected" : ""; ?>>All</option>
        <option value="for-rent" <?php echo $type === "for-rent" ? "selected" : ""; ?>>For Rent</option>
        <option value="for-sale" <?php echo $type === "for-sale" ? "selected" : ""; ?>>For Sale</option>
    </select>
    <button type="button" id="more">More</button>
    <button type="submit" name="filter">Filter</button>
    <div id="more-container">
        <label for="sort-by">Sort by</label>
        <select name="sort-by" id="sort-by">
            <option value="date" <?php echo $sortBy === "date" ? "selected" : ""; ?>>Date</option>
            <option value="price" <?php echo $sortBy === "price" ? "selected" : ""; ?>>Price</option>
        </select>
        <br>
        <label for="price">Min price</label>
        <input type="number" name="price" value="<?php echo $price; ?>">
        <br>
        <label for="bedrooms">Bedrooms</label>
        <select name="bedrooms" id="bedrooms">
            <option value="0" <?php echo $bedrooms === "0" ? "selected" : ""; ?>>All</option>
            <option value="1" <?php echo $bedrooms === "1" ? "selected" : ""; ?>>1+</option>
            <option value="2" <?php echo $bedrooms === "2" ? "selected" : ""; ?>>2+</option>
            <option value="3" <?php echo $bedrooms === "3" ? "selected" : ""; ?>>3+</option>
            <option value="4" <?php echo $bedrooms === "4" ? "selected" : ""; ?>>4+</option>
            <option value="5" <?php echo $bedrooms === "5" ? "selected" : ""; ?>>5+</option>
        </select>
        <br>
        <label for="bathrooms">Bathrooms</label>
        <select name="bathrooms" id="bathrooms">
            <option value="0" <?php echo $bathrooms === "0" ? "selected" : ""; ?>>All</option>
            <option value="1" <?php echo $bathrooms === "1" ? "selected" : ""; ?>>1+</option>
            <option value="2" <?php echo $bathrooms === "2" ? "selected" : ""; ?>>2+</option>
            <option value="3" <?php echo $bathrooms === "3" ? "selected" : ""; ?>>3+</option>
            <option value="4" <?php echo $bathrooms === "4" ? "selected" : ""; ?>>4+</option>
            <option value="5" <?php echo $bathrooms === "5" ? "selected" : ""; ?>>5+</option>
        </select>
    </div>
</form>