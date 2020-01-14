<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- font-awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" />
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/cart.css">
</head>
<!-- Start Header -->
<header>
    <!-- Start Logo, Search-bar, Account Icons -->
    <div class="container py-3">
        <div class="row align-items-center">
            <?php include "../includes/nav/_top-nav.php"; ?>
        </div>
    </div>
    <!-- End Logo, Search-bar, Account Icons -->
</header>
<!-- End Header -->
<!-- Start Main-Nav -->
<section class="main-navbar d-none d-md-block">
    <div class="container">
        <div class="row">
            <?php include "../includes/nav/_main-nav.php"; ?>
        </div>
    </div>
</section>
<!-- End Main-Nav -->
<!-- Start Section Product Cart -->
<section>
    <?php include "../includes/_cart-product.php"; ?>
</section>
<!-- End Section Product Cart -->
<!-- Start Footer -->
<footer class="footer pt-5">
    <div class="container">
        <div class="row">
            <?php include "../includes/_footer.php"; ?>
        </div>
    </div>
</footer>
<!-- End Footer -->

<body>

</body>

</html>