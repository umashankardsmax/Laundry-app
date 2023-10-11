<style>
    .active i{
        color: #51A7D9;
    }
</style>

<!-- Menubar -->
<div class="menubar-area footer-fixed rounded-0">
    <div class="toolbar-inner menubar-nav">
        <a href="index.html" class="nav-link active">
            <i class="icon feather icon-home"><span>Home</span></i>

        </a>
        <a href="wishlist.html" class="nav-link">
            <i class="icon feather icon-shopping-cart"><span>cart</span></i>

        </a>
        <a href="cart.html" class="nav-link cart-handle">
            <div class="hexad-menu">

                <img src="{{asset('frontend/images/menu-shape-dark.svg')}}" class="shape-dark" alt="">
                <img src="{{asset('frontend/images/menu-shape-light.svg')}}" class="shape-light" alt="">
                <i class="icon feather icon-shopping-bag"></i>
            </div>
        </a>
        <a href="category.html" class="nav-link">
            <i class="icon feather icon-grid"><span>Categories</span></i>

        </a>

        <a href="profile.html" class="nav-link">
            <i class="icon feather icon-user"><span>Profile</span></i>

        </a>
    </div>
</div>
<!-- Menubar -->
<!-- PWA Offcanvas -->
<div class="offcanvas offcanvas-bottom pwa-offcanvas">
    <div class="container">
        <div class="offcanvas-body small">
            <img class="logo dark" src="assets/images/logo.png" alt="">
            <img class="logo light" src="assets/images/logo-white.png" alt="">
            <h5 class="title">W3Cart - Ecommerce Mobile Shop on Your Home Screen</h5>
            <p class="pwa-text">Install "W3Cart Ecommerce Mobile App" template to your home screen for easy access, just like any other app</p>
            <button type="button" class="btn btn-sm btn-primary pwa-btn">Add to Home Screen</button>
            <button type="button" class="btn btn-sm pwa-close btn-secondary ms-2 text-white">Maybe later</button>
        </div>
    </div>
</div>
<div class="offcanvas-backdrop pwa-backdrop"></div>
<!-- PWA Offcanvas End -->


</div>
<!--**********************************
Scripts
***********************************-->
<script src="{{asset('frontend/js/jquery.js')}}" src="assets/js/jquery.js"></script>
<script src="{{asset('frontend/vendor/bootstrap/js/bootstrap.bundle.min.js')}}" src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('frontend/vendor/swiper/swiper-bundle.min.js')}}" src="assets/vendor/swiper/swiper-bundle.min.js"></script><!-- Swiper -->
<script src="{{asset('frontend/vendor/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js')}}" src="assets/vendor/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js"></script><!-- Swiper -->
<script src="{{asset('frontend/js/dz.carousel.js')}}" src="assets/js/dz.carousel.js"></script><!-- Swiper -->
<script src="{{asset('frontend/js/settings.js')}}" src="assets/js/settings.js"></script>
<script src="{{asset('frontend/js/custom.js')}}" src="assets/js/custom.js"></script>
<script src="{{asset('index.js')}}" src="index.js"></script>
</body>

<!-- Mirrored from w3cart.w3itexpert.com/xhtml/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Oct 2023 05:06:20 GMT -->
</html>
