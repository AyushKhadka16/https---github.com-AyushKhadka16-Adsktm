<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADSKTM - Blogs</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/navbar.css">
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

        /* Main Content Styles */
        .main-container {
            background-color: #f8f9fa;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
        }

        h1.page-title {
            color: var(--primary-blue);
            font-weight: 600;
            border-bottom: 2px solid #007bff;
            padding-bottom: 10px;
            margin-bottom: 30px;
            display: inline-block;
        }

        .blog-post {
            background-color: white;
            border-radius: 15px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
            padding: 30px;
            margin-bottom: 30px;
            transition: transform 0.3s ease;
        }

        .blog-post:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.5);
        }

        .blog-post h2 {
            color: var(--primary-blue);
            margin-bottom: 15px;
            font-weight: 600;
        }

        .blog-post .text-muted {
            font-size: 0.9rem;
            margin-bottom: 15px;
        }

        .blog-post p {
            color: #666;
            line-height: 1.6;
            margin-bottom: 20px;
        }

        /* Button Styles */
        .btn-primary {
            background-color: var(--accent-orange);
            border-color: var(--accent-orange);
            color: white;
            padding: 8px 20px;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #D35400;
            border-color: #D35400;
            transform: translateY(-2px);
        }

        /* Footer Styles */
        .footer {
            background: var(--secondary-blue);
            color: white;
        }

        /* Responsive Adjustments */
        @media (max-width: 768px) {
            .main-container {
                padding: 15px;
            }

            .blog-post {
                padding: 20px;
            }

            .navbar-brand span {
                font-size: 1.4rem;
            }
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

    <!-- Main Content -->
    <div class="container main-container">
        <h1 class="page-title text-center">ADSKTM Blogs</h1>

        <div class="blog-post">
            <h2>Digital Marketing Tips</h2>
            <p class="text-muted">Published on Dec 15, 2024</p>
            <p>Learn simple strategies to improve your online marketing.</p>
            <a href="blogs/digital-marketing-tips.php" class="btn btn-primary">Read More</a>
        </div>

        <div class="blog-post">
            <h2>SEO Basics</h2>
            <p class="text-muted">Published on Nov 28, 2024</p>
            <p>Understanding search engine optimization for beginners.</p>
            <a href="blogs/seo-basics.php" class="btn btn-primary">Read More</a>
        </div>

        <div class="blog-post">
            <h2>Social Media Marketing</h2>
            <p class="text-muted">Published on Oct 15, 2024</p>
            <p>Quick tips for social media content creation.</p>
            <a href="blogs/social-media-marketing.php" class="btn btn-primary">Read More</a>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer py-2 text-center">
        <div class="container">
            <p class="mb-0">&copy; 2024 ADSKTM Digital Marketing. All Rights Reserved.</p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
   
</body>

</html>