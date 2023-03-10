<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5">
    <a href="/" class="navbar-brand d-flex align-items-center">
        <h1 class="m-0">
            <img class="img-fluid me-3" src="/img/samnelat30Logo-removebg-preview.png" alt="" />
        </h1>
    </a>
    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav mx-auto bg-light rounded pe-4 py-3 py-lg-0">

            <a href="/" class="nav-item nav-link">Home</a>
            <a href="about" class="nav-item nav-link">About Us</a>

            {{-- <a href="/service" class="nav-item nav-link">Our Services</a> --}}



            <div class="nav-item dropdown">
                <a href="/general" href="3" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                    Insurance
                </a>

                <div class="dropdown-menu bg-light border-0 m-0">
                    <a href="/general" class="dropdown-item">General Insurance</a>
                    <a href="/health" class="dropdown-item">Health Insurance</a>
                    <a href="/life" class="dropdown-item">Life Insurance</a>
                </div>
            </div>

            <a href="/contact" class="nav-item nav-link">Contact Us</a>
            <a href="" class="nav-item nav-link">FAQ</a>
            <a href="" class="nav-item nav-link">Careers</a>
        </div>
    </div>

    {{-- <form action="#" class="search-form">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Search" />
        </div>
    </form> --}}


</nav>
