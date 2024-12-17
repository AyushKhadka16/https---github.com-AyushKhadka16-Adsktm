<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADSKTM - About Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
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
        .card{
            margin-bottom: 15px;
        }
        .card-body {
    border: 1px solid #E67E22;
}

    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="images/adsktmlogo.png" alt="ADSKTM Logo">
                <span>ADSKTM</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php#services">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="products.php">Our Products</a></li>
                    <li class="nav-item"><a class="nav-link active" href="about_us.php">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php#contact">Contact</a></li>
                    <li class="nav-item"><a class="nav-link" href="blogs.php">Blogs</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- About Us Section -->
    <div class="container py-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h1 class="text-center mb-5">About ADSKTM</h1>
                <div class="card">
                    <div class="card-body">
                        <p>ADSKTM is a cutting-edge digital marketing agency dedicated to transforming businesses through innovative online strategies. Founded in 2020, we've been at the forefront of digital marketing solutions.</p>
                        
                        <h4 class="mt-4">Our Mission</h4>
                        <p>To empower businesses of all sizes with data-driven, creative digital marketing strategies that drive real, measurable growth.</p>
                        
                        <h4 class="mt-4">Our Team</h4>
                        <p>Our team consists of experienced digital marketing professionals, data analysts, content creators, and SEO experts who are passionate about helping businesses succeed online.</p>
                        
                        <h4 class="mt-4">Our Approach</h4>
                        <p>We believe in personalized, strategic marketing that goes beyond generic solutions. Each client receives a tailored approach designed to meet their unique business objectives.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>