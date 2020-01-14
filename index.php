<!-- Head -->
<?php include "./frontend/includes/_header.php" ?>
<!-- Start Header -->
<header>
    <!-- Start Free Shipping Info -->
    <div class="container-fluid free-shipping">
        <p>
            Free delevery for orders over
            <span class="text-clipped">$100</span>
        </p>
    </div>
    <!-- End Free Shipping Info -->
    <!-- Start Logo, Search-bar, Account Icons -->
    <div class="container py-3">
        <div class="row align-items-center">
            <?php include "./frontend/includes/nav/_top-nav.php"; ?>
        </div>
    </div>
    <!-- End Logo, Search-bar, Account Icons -->
</header>
<!-- End Header -->
<!-- Start Main-Nav -->
<section class="main-navbar d-none d-md-block">
    <div class="container">
        <div class="row">
            <?php include "./frontend/includes/nav/_main-nav.php"; ?>
        </div>
    </div>
</section>
<!-- End Main-Nav -->
<!-- Start Side Navigation & Slider -->
<section class="side-nav">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4 col-lg-3 categories-nav p-0 d-md-block">
                <?php include "./frontend/includes/nav/_side-nav.php"; ?>
            </div>
            <div class="col-12 col-md-8 col-lg-9 p-0  bg-danger">
                <?php include "./frontend/includes/_slider.php" ?>
            </div>
        </div>
    </div>
</section>
<!-- End Side Navigation -->
<!-- Start Services Section -->
<section class="services">
    <div class="container my-5">
        <div class="row text-center">
            <?php include "./frontend/includes/_services.php"; ?>
        </div>
    </div>
</section>
<!-- End Services Section -->
<!-- Start Latest Products -->
<section>
    <div class="container">
        <?php include "./frontend/includes/_latest-products.php"; ?>
    </div>
</section>
<!-- End Latest Products -->
<!-- Start Daily Offer -->
<section>
    <div class="container">
        <?php include "./frontend/includes/_daily-offer.php"; ?>
    </div>
</section>
<!-- End Daily Offer -->
<!-- Start Collection Offer -->
<section class="bg-light py-5">
    <div class="container">
        <div class="row">
            <?php include "./frontend/includes/_new-collection.php"; ?>
        </div>
    </div>
</section>
<!-- End Collection Offer -->
<!-- Start Picked For You -->
<section>
    <div class="container">
        <?php include "./frontend/includes/_picked-products.php"; ?>
    </div>
</section>
<!-- End End Picked For You -->
<!-- Start Newsletter -->
<section class="newsletter my-3">
    <div class="container">
        <div class="row">
            <?php include "./frontend/includes/_newsletter.php"; ?>
        </div>
    </div>
</section>
<!-- End Newsletter -->
<!-- Start Returns Products-->
<section>
    <div class="container">
        <?php include "./frontend/includes/_returns.php"; ?>
    </div>
</section>
<!-- End Returns Products -->
<!-- Start Footer -->
<footer class="footer pt-5">
    <div class="container">
        <div class="row">
            <?php include "./frontend/includes/_footer.php"; ?>
        </div>
    </div>
</footer>
<!-- End Footer -->
<!-- Js Scripts -->
<?php include "./frontend/includes/_js-scripts.php"; ?>