<div class="container-fluid bg-light sticky-top p-0">
    <nav class="navbar navbar-expand-lg navbar-light p-0">
        <a href="index.php" class="navbar-brand bg-primary py-4 px-5 me-0">
            <h1 class="mb-0">Elegance Salon <i class="bi bi-scissors"></i></h1>
        </a>

        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse"
            data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse p-3" id="navbarCollapse">
            <div class="navbar-nav mx-auto">

                <a href="index.php" class="nav-item nav-link">Home</a>
                <a href="about.php" class="nav-item nav-link">About</a>
                <a href="service.php" class="nav-item nav-link">Service</a>
                <a href="price.php" class="nav-item nav-link">Price</a>
                <a href="shop.php" class="nav-item nav-link">Shop</a>
                <a href="appointment.php" class="nav-item nav-link">Book Now</a>
                <a href="login.php" class="nav-item nav-link">Login</a>
                <!-- <div class="nav-item dropdown">
                        <div class="dropdown-menu bg-light mt-2">
                            <a href="contact.php" class="dropdown-item">Contact Us</a>
                            <a href="team.php" class="dropdown-item">Our Team</a>
                            <a href="reviews.php" class="dropdown-item">Reviews</a>
                        </div>
                </div> -->

            </div>
        </div>
    </nav>
</div>

<!-- ACTIVE LINK SCRIPT -->
<script>
    const currentPage = location.pathname.split("/").pop();
    document.querySelectorAll(".navbar-nav .nav-link").forEach(link => {
        if (link.getAttribute("href") === currentPage) {
            link.classList.add("active");
        }
    });
</script>

     