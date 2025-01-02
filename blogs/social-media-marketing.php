<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADSKTM - Blog Post</title>
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
            margin-bottom: 30px;
        }

        .navbar-brand {
            display: flex;
            align-items: center;
        }

        .navbar-brand img {
            max-height: 50px;
            border-radius: 50%;
            border: 1px solid var(--accent-orange);
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

        .nav-link:hover {
            color: #fcae1e !important;
            transform: scale(1.05);
        }

        .blog-content {
            background-color: white;
            border-radius: 15px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            padding: 40px;
            margin: 30px auto;
            max-width: 1000px;
        }

        .blog-header {
            text-align: center;
            margin-bottom: 30px;
        }

        .blog-title {
            color: var(--primary-blue);
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 15px;
        }

        .blog-meta {
            color: #666;
            font-size: 1.1rem;
            margin-bottom: 20px;
        }

        .blog-image {
            width: 100%;
            max-height: 400px;
            object-fit: cover;
            border-radius: 10px;
            margin-bottom: 30px;
        }

        .blog-text {
            font-size: 1.1rem;
            line-height: 1.8;
            color: #333;
            margin-bottom: 30px;
        }

        .blog-section {
            margin-bottom: 30px;
        }

        .blog-section h2 {
            color: var(--primary-blue);
            font-size: 1.8rem;
            margin-bottom: 20px;
        }

        /* .share-section {
            border-top: 1px solid #eee;
            padding-top: 20px;
            margin-top: 40px;
        }

        .share-buttons {
            display: flex;
            gap: 10px;
            justify-content: center;
        }

        .share-button {
            background-color: var(--accent-orange);
            color: white;
            padding: 8px 20px;
            border-radius: 5px;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .share-button:hover {
            background-color: #D35400;
            color: white;
            transform: translateY(-2px);
        } */

        .footer {
            background: linear-gradient(45deg, #2C3E50 0%, #E67E22 100%);
            color: white;
            padding: 20px 0;
            margin-top: 50px;
        }

        @media (max-width: 768px) {
            .blog-content {
                padding: 20px;
                margin: 15px;
            }

            .blog-title {
                font-size: 2rem;
            }
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="../index.html">
                <img src="../images/adsktmlogo.png" alt="ADSKTM Logo">
                <span>ADSKTM</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="../index.html#services">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="../products.html">Our Products</a></li>
                    <li class="nav-item"><a class="nav-link" href="../about_us.html">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="../index.html#contact">Contact</a></li>
                    <li class="nav-item"><a class="nav-link" href="../blogs.html">Blogs</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Blog Content -->
    <div class="container">
        <article class="blog-content">
            <header class="blog-header">
                <h1 class="blog-title">Social Media Marketing</h1>
                <div class="blog-meta">
                    <span class="date">Published on December 15, 2024</span>
                    <span class="author"> | By ADSKTM Team</span>
                </div>
                <img src="../images/blog-placeholder.jpg" alt="Digital Marketing" class="blog-image">
            </header>

            <div class="blog-section">
                <h2>Introduction</h2>
                <p class="blog-text">
                Social media has become an indispensable tool for businesses to connect with their audience, build brand awareness, and drive engagement. This guide provides practical insights into creating an effective social media marketing strategy that helps you stand out in today's crowded digital space.
            </div>

            <div class="blog-section">
                <h2>Key Points</h2>
                <p class="blog-text">
                    <strong>Understanding Your Target Audience:</strong> Learn how to create detailed buyer personas and use data analytics to understand your audience's behavior, preferences, and pain points.
                </p>
                <p class="blog-text">
                    <strong>Content Strategy Development:</strong> Discover how to create engaging, valuable content that resonates with your audience. From blog posts to social media content, learn the art of storytelling that converts.
                </p>
                <p class="blog-text">
                    <strong>Mobile Optimization:</strong> With over 60% of web traffic coming from mobile devices, we'll explore essential strategies to ensure your digital presence is mobile-friendly and accessible.
                </p>
                <p class="blog-text">
                    <strong>Email Marketing Excellence:</strong> Master the fundamentals of email marketing, including list building, segmentation, and crafting compelling newsletters that drive engagement.
                </p>
            </div>

            <!-- <div class="share-section">
                <h3 class="text-center mb-3">Share this post</h3>
                <div class="share-buttons">
                    <a href="#" class="share-button">Facebook</a>
                    <a href="#" class="share-button">Twitter</a>
                    <a href="#" class="share-button">LinkedIn</a>
                </div>
            </div> -->
        </article>
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