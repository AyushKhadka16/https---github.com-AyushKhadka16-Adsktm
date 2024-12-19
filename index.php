<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADSKTM - Digital Marketing Solutions</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
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
            background: linear-gradient(45deg, #2C3E50 0%, #E67E22 100%);
            padding: 10px 0;
        }

        .navbar-brand {
            display: flex;
            align-items: center;
        }

        .navbar-brand img {
            max-height: 50px;
            /* Reduced logo size */
            border-radius: 50%;
            border: 1px solid var(--accent-orange);
            margin-right: 10px;
        }

        .navbar-brand span {
            color: white;
            font-size: 1.6rem;
            /* Reduced brand title size */
            font-weight: bold;
        }

        .nav-link {
            color: white !important;
            transition: all 0.3s ease;
            font-size: 1.1rem;
            /* Reduced nav links font size */
            margin: 0 5px;
            /* Reduced spacing between nav links */
        }

        .nav-link:hover {
            color: #fcae1e !important;
            transform: scale(1.05);
        }

        .hero-section {
            position: relative;
            height: 100vh;
            overflow: hidden;
        }

        .hero-section video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 98%;
            object-fit: cover;
        }

        .hero-section .btn-overlay {
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            padding-bottom: 0.5rem;
            text-align: center;
            z-index: 10;
        }

        .service-card {
            background-color: white;
            border-radius: 15px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
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
            background: linear-gradient(45deg, #2C3E50 0%, #E67E22 100%);
            color: white;
        }

        .service-card .text-primary {
            color: var(--accent-orange) !important;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="images/adsktmlogo.png" alt="ADSKTM Logo">
                <span>ADSKTM</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="products.php">Our Products</a></li>
                    <li class="nav-item"><a class="nav-link" href="about_us.php">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                    <li class="nav-item"><a class="nav-link" href="blogs.php">Blogs</a></li>

                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section">
        <video autoplay loop muted playsinline>
            <source src="assests/digital_marketing_video2.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="btn-overlay">
            <a href="#contact" class="btn btn-primary btn-lg mb-4">Get Started</a>
        </div>
    </section>

    <!-- Services Section -->
<section id="services" class="py-5">
    <div class="container">
        <h2 class="text-center mb-5">Our Services</h2>
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
                <a href="#" class="text-decoration-none">
                    <div class="service-card p-4 text-center">
                        <i class="fas fa-bullhorn mb-3 text-primary" style="font-size: 3rem;"></i>
                        <h3 class="text-dark">Social Media Marketing</h3>
                        <p class="text-muted">Engage your audience across multiple platforms.</p>
                    </div>
                </a>
            </div>
            <div class="col-md-4 mb-4">
                <a href="#" class="text-decoration-none">
                    <div class="service-card p-4 text-center">
                        <i class="fas fa-pen-nib mb-3 text-primary" style="font-size: 3rem;"></i>
                        <h3 class="text-dark">Content Strategy</h3>
                        <p class="text-muted">Create engaging content that delivers value.</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

    <!-- Contact Section -->
    <section id="contact" class="bg-light py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="contact-info mb-4">
                        <h2 class="mb-4">Our Contacts</h2>
                        <div class="contact-details">
                            <div class="mb-3">
                                <h5 class="text-primary"><i class="fas fa-envelope me-2"></i>Email</h5>
                                <p>info@adsktm.com <br>
                                adsktm@gmail.com</p>
                            </div>
                            <div class="mb-3">
                                <h5 class="text-primary"><i class="fas fa-phone me-2"></i>Phone</h5>
                                <p> +977 015590123 <br>
                                 +977 9841123456</p>
                            </div>
                            <div>
                                <h5 class="text-primary"><i class="fas fa-map-marker-alt me-2"></i>Address</h5>
                                <p>Corporate Office: <br>
                                New Baneshwor, Kathmandu</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="text-center mb-4">Send Us a Message</h2>
                            <form>
                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="Your Name" required>
                                </div>
                                <div class="mb-3">
                                    <input type="email" class="form-control" placeholder="Your Email" required>
                                </div>
                                <div class="mb-3">
                                    <textarea class="form-control" rows="4" placeholder="Your Message"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary w-100">Send Message</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer py-2 text-center">
        <div class="container">
            <p class="mb-0">&copy; 2024 ADSKTM Digital Marketing. All Rights Reserved.</p>
        </div>
    </footer>

    <!-- Bootstrap JS and Font Awesome -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</body>

</html>