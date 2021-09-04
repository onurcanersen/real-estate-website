<?php
$title = "Real Estate";
include "views/subviews/header.php";
?>

<div class="banner">
    <video autoplay muted loop>
        <source src="assets/videos/banner-background.mp4" type="video/mp4">
    </video>
    <h1>Find your dream home</h1>
    <form action="processes/search.php" method="GET">
        <input type="text" name="search" placeholder="Search">
        <input type="hidden" name="sort-by" value="date">
        <button type="submit" name="filter"><i class="material-icons">search</i></button>
    </form>
</div>
<div class="row cards">
    <div class="col-4">
        <div class="card">
            <img src="assets/images/men-shaking-hands.jpg" alt="Men shaking hands">
            <h3>Lorem Ipsum</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tellus tellus, finibus id rhoncus quis, imperdiet sed elit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis.</p>
        </div>
    </div>
    <div class="col-4">
        <div class="card">
            <img src="assets/images/a-realtor-talking-to-a-client.jpg" alt="A realtor talking to a client">
            <h3>Lorem Ipsum</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tellus tellus, finibus id rhoncus quis, imperdiet sed elit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis.</p>
        </div>
    </div>
    <div class="col-4">
        <div class="card">
            <img src="assets/images/person-holding-silver-key.jpg" alt="Person holding silver key">
            <h3>Lorem Ipsum</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tellus tellus, finibus id rhoncus quis, imperdiet sed elit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis.</p>
        </div>
    </div>
</div>
<div class="row info">
    <div class="col-7">
        <img src="assets/images/person-holding-a-miniature-house.jpg" alt="Person holding a miniature house">
    </div>
    <div class="col-5">
        <h2>Lorem Ipsum</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sit amet rhoncus metus. Quisque a augue consequat est tempus molestie eget id nisl. Curabitur pellentesque mauris sed mauris ultricies egestas. Ut interdum porta justo, sit amet efficitur dui. Integer a purus rutrum, efficitur nibh nec, pulvinar ante. Quisque ipsum erat, maximus a odio eget, consequat placerat urna. Ut cursus rutrum risus et suscipit. Aenean vel felis dictum, vestibulum libero sit.</p>
    </div>
</div>
<div class="row info">
    <div class="col-7">
        <img src="assets/images/realtor-posting-a-sold-sticker.jpg" alt="Realtor posting a sold sticker">
    </div>
    <div class="col-5">
        <h2>Lorem Ipsum</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sit amet rhoncus metus. Quisque a augue consequat est tempus molestie eget id nisl. Curabitur pellentesque mauris sed mauris ultricies egestas. Ut interdum porta justo, sit amet efficitur dui. Integer a purus rutrum, efficitur nibh nec, pulvinar ante. Quisque ipsum erat, maximus a odio eget, consequat placerat urna. Ut cursus rutrum risus et suscipit. Aenean vel felis dictum, vestibulum libero sit.</p>
    </div>
</div>
<div class="row realtors">
    <h1>Our Realtors</h1>
    <div class="col-3">
        <img src="assets/images/janene-baldwin.jpg" alt="Realtor">
        <h3>Janene Baldwin</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris pretium velit vitae est sollicitudin volutpat. Fusce eros orci, accumsan tristique.</p>
    </div>
    <div class="col-3">
        <img src="assets/images/luanna-carlisle.jpg" alt="Realtor">
        <h3>Luanna Carlisle</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris pretium velit vitae est sollicitudin volutpat. Fusce eros orci, accumsan tristique.</p>
    </div>
    <div class="col-3">
        <img src="assets/images/terry-leavitt.jpg" alt="Realtor">
        <h3>Terry Leavitt</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris pretium velit vitae est sollicitudin volutpat. Fusce eros orci, accumsan tristique.</p>
    </div>
    <div class="col-3">
        <img src="assets/images/jackson-bourne.jpg" alt="Realtor">
        <h3>Jackson Bourne</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris pretium velit vitae est sollicitudin volutpat. Fusce eros orci, accumsan tristique.</p>
    </div>
</div>

<?php include "views/subviews/footer.php"; ?>