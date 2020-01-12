<!-- start logo -->
<div class="col-6 col-md-3 col-lg-2 order-1">
    <a class="logo text-clipped" href="index.html">E-STORE</a>
</div>
<!-- end logo -->
<!-- start search-bar -->
<div class="col-12 col-md-5 order-3 order-md-2">
    <form action="results.php" class="search-form d-flex align-items-center justify-content-center">
        <input type="text" name="search" placeholder="ex: category, brand, model" />
        <button type="submit">
            <i class="fas fa-search medium-icon text-clipped"></i>
        </button>
    </form>
</div>
<!-- end search-bar -->
<!-- start user && acount info -->
<div class="col-6 col-md-4 col-lg-5 order-2 order-md-3 d-flex align-items-center justify-content-around top-icons">
    <!-- user info -->
    <div class="d-flex align-items-center justify-content-center drop">
        <i class="fa fa-user big-icon text-clipped"></i>
        <p class="d-none d-lg-block">
            account
        </p>
        <i class="fas fa-chevron-down chevron-down small-icon d-none d-lg-block"></i>
        <!-- dropdown list -->
        <div class="dropdown-list">
            <ul>
                <li class="d-flex justify-content-between align-items-center list">
                    <i class="fas fa-lock medium-icon text-clipped"></i>
                    <a class="medium-link pl-1" href="login.php">Your Account</a>
                </li>
                <li class="d-flex justify-content-between align-items-center list">
                    <i class="fas fa-user-plus medium-icon text-clipped"></i>
                    <a class="medium-link pl-1" href="register.php">New Account</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- favourite info -->
    <div class="d-flex align-items-center justify-content-center">
        <i class="fa fa-heart big-icon text-clipped"></i>
        <p class="d-none d-lg-block">
            favourite
        </p>
    </div>
    <!-- cart info -->
    <div class="d-flex align-items-center justify-content-center drop">
        <div class="cart">
            <i class="fas fa-shopping-cart big-icon text-clipped"></i>
            <span class="badge">3</span>
        </div>
        <p class="d-none d-lg-block">
            cart: 00.00
        </p>
        <i class="fas fa-chevron-down chevron-down d-none d-lg-block small-icon"></i>
        <!-- dropdown list -->
        <div class="dropdown-list">
            <ul>
                <li class="d-flex justify-content-between align-items-center list">
                    <i class="fas fa-shopping-cart text-clipped medium-icon"></i>
                    <a class="medium-link pl-1" href="login.php">View cart</a>
                </li>
                <li class="d-flex justify-content-between align-items-center list">
                    <i class="fas fa-cart-arrow-down text-clipped medium-icon"></i>
                    <a class="medium-link pl-1" href="register.php">Checkout</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- mobile nav icon -->
    <div class="d-flex align-items-center justify-content-center mobile-icon">
        <i class="fa fa-align-justify big-icon text-clipped d-block d-md-none"></i>
    </div>
</div>
<!-- end user && account info -->