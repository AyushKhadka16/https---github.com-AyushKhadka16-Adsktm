<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADSKTM - Digital Marketing Solutions</title>
    <!-- Adding Fevicon -->
    <link rel="icon" type="image/x-icon" href="images/adsktmlogo.png">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/index-contact.css">
    <link rel="stylesheet" href="css/index-responsive.css">
    <link rel="stylesheet" href="css/navbar.css">
    <style>
        /* Internal CSS */
        :root {
            --primary-blue: #2C3E50;
            --accent-orange: #E67E22;
            --secondary-blue: #34495E;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f6f9;
        }

        .navbar {
            background: var(--secondary-blue);
            padding: 0px 0;
        }

        .navbar-brand {
            display: flex;
            align-items: center;
            position: relative;
            /* left: -45px; */
        }

        .navbar-brand img {
            max-height: 60px;
            border-radius: 100%;
            border: 2px solid var(--accent-orange);
            margin-right: 10px;
        }

        .navbar-brand span {
            color: white;
            font-size: 1.6rem;
            font-weight: bold;
        }

        .nav-link {
            color: white !important;
            transition: all 0.3s ease;
            font-size: 1.1rem;
            margin: 0 5px;
        }

        .navbar-brand:hover {
            transform: scale(1.02);
        }

        .navbar-brand:hover span {
            color: #fcae1e !important;
        }

        .nav-link:hover {
            color: #fcae1e !important;
            transform: scale(1.05);
        }
        .hero-section {
        position: relative;
        width: 100%;
        height: auto;
        min-height: 60vh;
        overflow: hidden;
        margin-bottom: 20px;
    }

    .hero-section img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
    }

    .btn-overlay {
        position: absolute;
        bottom: 20%;
        left: 18%;
        transform: translateX(-50%);
        z-index: 1;
        width: auto;
        text-align: center;
    }

    /* Device-specific adjustments */
    @media (max-width: 1200px) {
        .hero-section {
            min-height: 50vh;
        }
    }

    @media (max-width: 992px) {
        .hero-section {
            min-height: 45vh;
        }
    }

    @media (max-width: 768px) {
        .hero-section {
            min-height: 40vh;
        }
        
        .hero-section img {
            object-position: center top;
        }

        .btn-overlay {
            bottom: 15%;
        }
    }

    @media (max-width: 576px) {
        .hero-section {
            min-height: 35vh;
        }

        .btn-overlay {
            bottom: 10%;
        }

        .btn-overlay .btn {
            padding: 8px 20px;
            font-size: 1rem;
        }
    }

    /* Handle extremely small devices */
    @media (max-width: 320px) {
        .hero-section {
            min-height: 30vh;
        }
    }

        .service-card {
            background-color: white;
            border-radius: 15px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .service-card .text-primary {
            color: var(--accent-orange) !important;
        }

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
        }

        .btn-primary {
            background-color: var(--accent-orange);
            border-color: var(--accent-orange);
        }

        .btn-primary:hover {
            background-color: #D35400;
            border-color: #D35400;
        }

        .footer {
            background: var(--secondary-blue);
            color: white;
        }

    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="images/adsktmlogo3.png" alt="ADSKTM Logo">
                <span>ADSKTM</span>
            </a>
            <!-- Modified hamburger button with close icon -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
                <span class="close-icon">&times;</span>
            </button>
            <!-- Side-sliding menu container (#2) -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php#services"><i>Our Services</i></a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php#products"><i>Our Products</i></a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php#contact"><i>Contact Us</i></a></li>
                    <li class="nav-item"><a class="nav-link" href="about_us.php"><i>About Us</i></a></li>
                    <li class="nav-item"><a class="nav-link" href="blogs.php"><i>Blogs</i></a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section">
        <img src="images/adsktm banner3.png" alt="Digital Marketing Banner">
        <div class="btn-overlay">
            <a href="#contact" class="btn btn-primary btn-lg mb-4">Get Started</a>
        </div>
    </section>
    <hr>

    <!-- Services Section -->
    <section id="services" class="py-2">
        <div class="container">
            <h2 class="text-center mb-3"><i>Our Services</i></h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <a href="services/search_engine_optimization.php" class="text-decoration-none">
                        <div class="service-card p-4 text-center">
                            <i class="fas fa-chart-line mb-3 text-primary" style="font-size: 3rem;"></i>
                            <h3 class="text-dark">SEO Optimization</h3>
                            <p class="text-muted">Boost your online visibility and search rankings.</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 mb-4">
                    <a href="services/email_marketing.php" class="text-decoration-none">
                        <div class="service-card p-4 text-center">
                            <i class="fas fa-envelope mb-3 text-primary" style="font-size: 3rem;"></i>
                            <h3 class="text-dark">Email Marketing</h3>
                            <p class="text-muted">Drive conversions with targeted email campaigns.</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 mb-4">
                    <a href="services/social_media_marketing.php" class="text-decoration-none">
                        <div class="service-card p-4 text-center">
                            <i class="fas fa-bullhorn mb-3 text-primary" style="font-size: 3rem;"></i>
                            <h3 class="text-dark">Social Media Marketing</h3>
                            <p class="text-muted">Engage your audience across multiple platforms.</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 mb-4">
                    <a href="services/content_strategy.php" class="text-decoration-none">
                        <div class="service-card p-4 text-center">
                            <i class="fas fa-pen-to-square mb-3 text-primary" style="font-size: 3rem;"></i>
                            <h3 class="text-dark">Content Strategy</h3>
                            <p class="text-muted">Create engaging content that delivers value.</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <hr>

    <!-- Products Section -->
    <section id="products" class="py-2">
        <div class="container">
            <h2 class="text-center mb-3"><i>Our Products</i></h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <a class="text-decoration-none">
                        <div class="service-card p-4 text-center">
                            <i class="fas fa-chart-column mb-3 text-primary" style="font-size: 3rem;"></i>
                            <h3 class="text-dark">SEO Analytics & Audit Package</h3>
                            <p class="text-muted">Boost your online visibility and search rankings.</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 mb-4">
                    <a class="text-decoration-none">
                        <div class="service-card p-4 text-center">
                            <i class="fas fa-users mb-3 text-primary" style="font-size: 3rem;"></i>
                            <h3 class="text-dark">Social Media Management Hub</h3>
                            <p class="text-muted">Drive conversions with targeted email campaigns.</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 mb-4">
                    <a class="text-decoration-none">
                        <div class="service-card p-4 text-center">
                            <i class="fas fa-file-lines -alt mb-3 text-primary" style="font-size: 3rem;"></i>
                            <h3 class="text-dark">Content Marketing Toolkit</h3>
                            <p class="text-muted">Engage your audience across multiple platforms.</p>
                        </div>
                    </a>
                </div>
            </div>
            <!-- See More Button -->
            <div class="text-center mt-2">
                <a href="products.php" class="btn btn-primary btn-lg">See More</a>
            </div> 
        </div>
    </section>
    <hr>

    <section id="contact" class="py-2">
    <div class="container">
        <h2 class="text-center mb-3"><i>Get In Touch</i></h2>
        <div class="row g-4 justify-content-center">
            <!-- Contact Information Cards -->
            <div class="col-lg-5 col-md-6">
                <div class="contact-info p-3 p-md-4 bg-white rounded-4 shadow-sm mb-4 mb-lg-0">
                    <h3 class="mb-4 text-center text"><i>Contact Details</i></h3>

                    <!-- Email Card -->
                    <div class="d-flex align-items-center mb-3 p-2 p-md-3 rounded-3 contact-card">
                        <div class="icon-box bg-primary bg-opacity-10 p-2 p-md-3 rounded-circle me-3">
                            <i class="fas fa-envelope text-primary fs-5"></i>
                        </div>
                        <div>
                            <h5 class="mb-1 fs-6">Email Us</h5>
                            <a href="mailto:info@adsktm.com" class="text-muted text-decoration-none small">info@adsktm.com</a><br>
                            <a href="mailto:adsktm@gmail.com" class="text-muted text-decoration-none small">adsktm@gmail.com</a>
                        </div>
                    </div>

                    <!-- Phone Card -->
                    <div class="d-flex align-items-center mb-3 p-2 p-md-3 rounded-3 contact-card">
                        <div class="icon-box bg-primary bg-opacity-10 p-2 p-md-3 rounded-circle me-3">
                            <i class="fas fa-phone text-primary fs-5"></i>
                        </div>
                        <div>
                            <h5 class="mb-1 fs-6">Call Us</h5>
                            <a href="tel:+977015501234" class="text-muted text-decoration-none small">+977 015501234</a><br>
                            <a href="tel:+9779841123456" class="text-muted text-decoration-none small">+977 9841123456</a>
                        </div>
                    </div>

                    <!-- Address Card -->
                    <div class="d-flex align-items-center p-2 p-md-3 rounded-3 contact-card">
                        <div class="icon-box bg-primary bg-opacity-10 p-2 p-md-3 rounded-circle me-3">
                            <i class="fas fa-map-marker-alt text-primary fs-5"></i>
                        </div>
                        <div>
                            <h5 class="mb-1 fs-6">Visit Us</h5>
                            <p class="text-muted mb-0 small">Corporate Office:<br>New Baneshwor, Kathmandu</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="col-lg-7 col-md-6">
                <div class="card border-0 rounded-4 shadow-sm">
                    <h3 class="mb-0 text-center text p-3"><i>Send Us a Message</i></h3>
                    <div class="card-body px-3 pb-3">
                        <form class="needs-validation" novalidate>
                            <div class="row g-3">
                                <div class="col-sm-6">
                                    <div class="form-floating mb-2">
                                        <input type="text" class="form-control" id="floatingName" placeholder="Your Name" required>
                                        <label for="floatingName">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating mb-2">
                                        <input type="email" class="form-control" id="floatingEmail" placeholder="Your Email" required>
                                        <label for="floatingEmail">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating mb-2">
                                        <input type="text" class="form-control" id="floatingSubject" placeholder="Subject">
                                        <label for="floatingSubject">Subject</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <textarea class="form-control" placeholder="Your Message" id="floatingMessage" style="height: 120px"></textarea>
                                        <label for="floatingMessage">Your Message</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary w-100 py-2 rounded-3">
                                        Send Message <i class="fas fa-paper-plane ms-2"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="footer py-3 text-center mt-4">
    <div class="container">
        <p class="mb-0">&copy; 2024 ADSKTM Digital Marketing. All Rights Reserved.</p>
    </div>
</footer>


    <!-- Bootstrap JS and Font Awesome -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</body>

</html>