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
            <div class="col-12 col-md-8 col-lg-9 bg-dark">
                <p>a</p>
            </div>
        </div>
    </div>
</section>
<!-- End Side Navigation -->

<!-- Js Scripts -->
<?php include "./frontend/includes/_js-scripts.php"; ?>