<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADSKTM - Our Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/navbar.css">
    <style>
        :root {
            --primary-blue: #2C3E50;
            --accent-orange: #E67E22;
            --secondary-blue: #34495E;
        }
        
        .card {
            border: 2px solid #E67E22;
            transition: transform 0.3s ease;
            height: 100%;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(230, 126, 34, 0.3);
        }

        .package-type {
            position: absolute;
            top: 0;
            right: 0;
            background: var(--accent-orange);
            color: white;
            padding: 0px 5px;
            border-bottom-left-radius: 10px;
        }

        .feature-list {
            list-style: none;
            padding-left: 0;
        }

        .feature-list li {
            padding: 8px 0;
            border-bottom: 1px solid #eee;
        }

        .feature-list li:last-child {
            border-bottom: none;
        }

        .feature-list li::before {
            content: "✓";
            color: var(--accent-orange);
            margin-right: 8px;
        }

        .pricing {
            margin-top: 20px;
            padding-top: 20px;
            border-top: 1px solid #eee;
        }

        .pricing a p {
            transition: color 0.3s ease;
        }

        .pricing a:hover p {
            color: var(--primary-blue) !important;
        }

        .btn-custom {
            background: linear-gradient(45deg, #2C3E50 0%, #E67E22 100%);
            color: white;
            border: none;
            padding: 10px 20px;
            transition: all 0.3s ease;
        }

        .btn-custom:hover {
            transform: scale(1.05);
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

    <!-- Products Section -->
    <div class="container py-5">
        <h1 class="text-center mb-3">Our Digital Marketing Products</h1>
        <p class="text-center mb-5">Enhance your digital marketing strategy with our professional tools and solutions</p>

        <!-- Basic Package Row -->
        <h2 class="mb-4">Basic Packages</h2>
        <div class="row mb-5">
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="package-type">Basic</div>
                    <div class="card-body">
                        <h5 class="card-title">SEO Analytics & Audit Package</h5>
                        <ul class="feature-list">
                            <li>Comprehensive site audit reports</li>
                            <li>Basic keyword ranking tracker</li>
                            <li>Simple competitor analysis</li>
                            <li>Monthly performance reports</li>
                            <li>Basic SEO recommendations</li>
                        </ul>
                        <div class="pricing">
                            <h4 class="text-center mb-3">Rs.1749/month</h4>
                            <a href="index.php#contact" class="btn btn-custom w-100">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="package-type">Basic</div>
                    <div class="card-body">
                        <h5 class="card-title">Social Media Management Hub</h5>
                        <ul class="feature-list">
                            <li>Basic content scheduling</li>
                            <li>Performance analytics</li>
                            <li>2 platform management</li>
                            <li>Basic engagement tracking</li>
                            <li>Monthly insights report</li>
                        </ul>
                        <div class="pricing">
                            <h4 class="text-center mb-3">Rs.1899/month</h4>
                            <a href="index.php#contact" class="btn btn-custom w-100">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="package-type">Basic</div>
                    <div class="card-body">
                        <h5 class="card-title">Content Marketing Toolkit</h5>
                        <ul class="feature-list">
                            <li>Basic content calendar</li>
                            <li>Topic research tools</li>
                            <li>Basic SEO guidelines</li>
                            <li>Content performance metrics</li>
                            <li>Monthly content analysis</li>
                        </ul>
                        <div class="pricing">
                            <h4 class="text-center mb-3">Rs.1999/month</h4>
                            <a href="index.php#contact" class="btn btn-custom w-100">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Enterprise Package Row -->
        <h2 class="mb-4">Enterprise Packages</h2>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="package-type">Enterprise</div>
                    <div class="card-body">
                        <h5 class="card-title">Enterprise SEO Suite</h5>
                        <ul class="feature-list">
                            <li>Advanced site audit system</li>
                            <li>Real-time keyword tracking</li>
                            <li>Advanced competitor analysis</li>
                            <li>Backlink monitoring</li>
                            <li>Technical SEO tools</li>
                            <li>Weekly performance reports</li>
                            <li>Priority support</li>
                        </ul>
                        <div class="pricing">
                            <a href="services/search_engine_optimization.php">
                                <p class="text-center text-success mb-2"><b><i><u>Included with Enterprise Service</u></i></b></p>
                            </a>
                            <a href="index.php#contact" class="btn btn-custom w-100">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="package-type">Enterprise</div>
                    <div class="card-body">
                        <h5 class="card-title">Enterprise Social Hub</h5>
                        <ul class="feature-list">
                            <li>Advanced content scheduling</li>
                            <li>Real-time analytics</li>
                            <li>Multi-platform management</li>
                            <li>Advanced engagement tracking</li>
                            <li>AI-powered insights</li>
                            <li>Campaign ROI tracking</li>
                            <li>Priority support</li>
                        </ul>
                        <div class="pricing">
                            <a href="services/social_media_marketing.php">
                                <p class="text-center text-success mb-2"><b><i><u>Included with Enterprise Service</u></i></b></p>
                            </a>
                            <a href="index.php#contact" class="btn btn-custom w-100">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="package-type">Enterprise</div>
                    <div class="card-body">
                        <h5 class="card-title">Enterprise Content Suite</h5>
                        <ul class="feature-list">
                            <li>Advanced content calendar</li>
                            <li>AI-powered topic research</li>
                            <li>Advanced SEO integration</li>
                            <li>Real-time performance tracking</li>
                            <li>Content gap analysis</li>
                            <li>Editorial guidelines</li>
                            <li>Priority support</li>
                        </ul>
                        <div class="pricing">
                            <a href="services/content_strategy.php">
                                <p class="text-center text-success mb-2"><b><i><u>Included with Enterprise Service</u></i></b></p>
                            </a>
                            <a href="index.php#contact" class="btn btn-custom w-100">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>