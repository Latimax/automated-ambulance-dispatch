<body>

    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <!-- Topbar Start -->
    <div class="container-fluid topbar bg-secondary d-none d-xl-block w-100">
        <div class="container">
            <div class="row gx-0 align-items-center" style="height: 45px;">
                <div class="col-lg-6 text-center text-lg-start mb-lg-0">
                    <div class="d-flex flex-wrap">
                        <a href="requests.php" class="text-muted me-4"><i class="fas fa-map-marker-alt text-primary me-2"></i>Make a Request</a>
                        <a href="tel:+234 703 220 1006" class="text-muted me-4"><i class="fas fa-phone-alt text-primary me-2"></i>+234 703 220 1006</a>
                        <a href="mailto:ambulance@buk.edu.ng" class="text-muted me-0"><i class="fas fa-envelope text-primary me-2"></i>ambulance@buk.edu.ng</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar & Hero Start -->
    <div class="container-fluid nav-bar sticky-top px-0 px-lg-4 py-2 py-lg-0">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a href="" class="navbar-brand p-0">
                    <h1 class="display-6 text-primary"><i class="fas fa-car-alt me-3"></i></i>AADS-BUK</h1>
                    <!-- <img src="assets/img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav mx-auto py-0">
                        <a href="index.php" class="nav-item nav-link <?php echo $page == 'home' ?  'active' : ''; ?>">Home</a>
                        <?php if (isset($_SESSION['role_id']) && $_SESSION['role_id'] == 1) : ?>
                            <a href="users.php" class="nav-item nav-link <?php echo $page == 'users' ?  'active' : ''; ?>">Manage Users</a>
                            <a href="manage_ambulances.php" class="nav-item nav-link <?php echo $page == 'manage_ambulances' ?  'active' : ''; ?>">Manage Ambulances</a>
                            <a href="manage_requests.php" class="nav-item nav-link <?php echo $page == 'manage_requests' ?  'active' : ''; ?>">Manage Requests</a>
                        <?php else : ?>
                            <a href="about.php" class="nav-item nav-link <?php echo $page == 'about' ?  'active' : ''; ?>">About</a>
                            <a href="service.php" class="nav-item nav-link <?php echo $page == 'service' ?  'active' : ''; ?>">Service</a>
                            <a href="requests.php" class="nav-item nav-link <?php echo $page == 'requests' ?  'active' : ''; ?>">Requests</a>

                        <?php endif; ?>

                        <a href="contact.php" class="nav-item nav-link <?php echo $page == 'contact' ?  'active' : ''; ?> ">Contact</a>
                    </div>
                    <?php if (isset($_SESSION['role_id'])) : ?>
                        <a href="logout.php" class="btn btn-primary rounded-pill py-2 px-4">Logout</a>
                    <?php else : ?>
                        <a href="login.php" class="btn btn-primary rounded-pill py-2 px-4">Login</a>
                    <?php endif; ?>

                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar & Hero End -->