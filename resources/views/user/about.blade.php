<!DOCTYPE html>
<html lang="en">
@include('inc.header')

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->

    <!-- Topbar Start -->
    @include('inc.topbar')
    <!-- Topbar End -->

    <!-- Navbar Start -->
    @include('inc.nav')
    <!-- Navbar End -->

    <!-- Page Header Start -->
    <div class="container-fluid page-header-about   wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-4 animated slideInDown mb-4 color-about text-center ">About Us</h1>

            <nav aria-label="breadcrumb animated slideInDown color-about">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item"><a href="">Pages</a></li>
                    <li class="breadcrumb-item active  " aria-current="page">
                        About Us
                    </li>
                </ol>
            </nav>


        </div>
    </div>
    <!-- Page Header End -->

    <!-- About Start -->
    @include('user.homeabout')
    <!-- About End -->


    <!-- Facts Start -->
    @include('user.facts')
    <!-- Facts End -->



    <!-- Footer Start -->
    @include('inc.footer')
    <!-- Footer End -->


</body>

</html>
