<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Social Media Marketing - ADSKTM Digital Marketing</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Reusing the same CSS from the main page */
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

         
    /* Container and Layout Styles */
    .row {
        background-color: #f8f9fa;
        border-radius: 10px;
        padding: 30px 15px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
    }

    /* Headings */
    .text-primary {
        color: #007bff !important;
        font-weight: 600;
        border-bottom: 2px solid #007bff;
        padding-bottom: 10px;
        margin-bottom: 20px !important;
    }

    /* List Styles */
    .list-group-item {
        background-color: transparent;
        border: none;
        padding: 10px 15px;
        transition: background-color 0.3s ease;
    }

    .list-group-item:hover {
        background-color: rgba(0, 123, 255, 0.05);
    }

    /* Unordered List Styles */
    .list-group-flush {
        border-radius: 8px;
    }

    .list-group-flush .list-group-item {
        position: relative;
        padding-left: 30px;
    }

    .list-group-flush .list-group-item::before {
        content: '✓';
        position: absolute;
        left: 0;
        color: #28a745;
        font-weight: bold;
    }

    /* Ordered List Styles */
    .list-group-numbered .list-group-item {
        counter-increment: list-counter;
        position: relative;
        padding-left: 40px;
    }

    .list-group-numbered .list-group-item::before {
        content: counter(list-counter) '.';
        position: absolute;
        left: 0;
        color: #007bff;
        font-weight: bold;
        width: 30px;
        text-align: right;
        margin-right: 10px;
    }

    /* Responsive Adjustments */
    @media (max-width: 768px) {
        .row {
            flex-direction: column;
        }
        
        .col-md-6 {
            width: 100%;
            margin-bottom: 20px;
        }
    }

        .service-details {
            background-color: white;
            border-radius: 15px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            padding: 30px;
            margin-bottom: 30px;
        }

        .pricing-card {
            border: 1px solid #e0e0e0;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
            transition: transform 0.3s ease;
        }

        .pricing-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="../index.php">
                <img src="../images/adsktmlogo.png" alt="ADSKTM Logo">
                <span>ADSKTM</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="../index.php#services">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="../products.php">Our Products</a></li>
                    <li class="nav-item"><a class="nav-link" href="../about_us.php">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="../index.php#contact">Contact</a></li>
                    <li class="nav-item"><a class="nav-link" href="../blogs.php">Blogs</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Social Media Marketing Service Details -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="service-details">
                        <h1 class="text-center mb-4">Social Media Marketing Services</h1>
                        
                        <div class="row">
                            <div class="col-md-8 offset-md-2">
                                <p class="lead text-center mb-5">
                                    Revolutionize your digital presence with our strategic social media marketing solutions that drive engagement, build brand loyalty, and generate measurable results.
                                </p>
                            </div>
                        </div>

                        <div class="mb-5">
                            <h3 class="text-primary mb-3">Comprehensive Service Offerings</h3>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Custom Social Media Strategy Development</li>
                                <li class="list-group-item">Platform-Specific Content Creation</li>
                                <li class="list-group-item">Advanced Audience Targeting</li>
                                <li class="list-group-item">Influencer Marketing Campaigns</li>
                                <li class="list-group-item">Social Media Advertising Management</li>
                                <li class="list-group-item">Comprehensive Analytics and Reporting</li>
                                <li class="list-group-item">Community Engagement and Management</li>
                            </ul>
                        </div>

                        <div class="row mb-5">
                            <div class="col-md-6">
                                <h3 class="text-primary mb-3">Strategic Business Benefits</h3>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Amplified Brand Visibility</li>
                                    <li class="list-group-item">Targeted Audience Reach</li>
                                    <li class="list-group-item">Increased Web Traffic</li>
                                    <li class="list-group-item">Higher Conversion Rates</li>
                                    <li class="list-group-item">Real-Time Customer Insights</li>
                                    <li class="list-group-item">Cost-Effective Marketing Solution</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <h3 class="text-primary mb-3">Our Proven Methodology</h3>
                                <ol class="list-group list-group-numbered">
                                    <li class="list-group-item">Comprehensive Social Media Audit</li>
                                    <li class="list-group-item">Detailed Audience Persona Development</li>
                                    <li class="list-group-item">Strategic Content Planning</li>
                                    <li class="list-group-item">Multi-Platform Campaign Execution</li>
                                    <li class="list-group-item">Continuous Performance Optimization</li>
                                    <li class="list-group-item">Data-Driven Strategy Refinement</li>
                                </ol>
                            </div>
                        </div>

                        <div class="mb-5">
                            <h3 class="text-primary text-center mb-4">Social Marketing Packages</h3>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="pricing-card text-center">
                                        <h4>Starter Package</h4>
                                        <p class="h2 text-primary mb-3">Rs.4599/month</p>
                                        <ul class="list-unstyled">
                                            <li>2 Social Media Platforms</li>
                                            <li>Weekly Content Creation</li>
                                            <li>Monthly Performance Report</li>
                                            <li>Basic Community Management</li>
                                            <li>Up to 5 Posts Per Platform</li>
                                        </ul>
                                        <a href="../index.php#contact" class="btn btn-primary mt-3">Get Started</a>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="pricing-card text-center">
                                        <h4>Growth Package</h4>
                                        <p class="h2 text-primary mb-3">Rs.11,199/month</p>
                                        <ul class="list-unstyled">
                                            <li>4 Social Media Platforms</li>
                                            <li>Custom Content Strategy</li>
                                            <li>Bi-Weekly Performance Reports</li>
                                            <li>Advanced Community Management</li>
                                            <li>Social Media Advertising</li>
                                            <li>Influencer Outreach</li>
                                        </ul>
                                        <a href="../index.php#contact" class="btn btn-primary mt-3">Get Started</a>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="pricing-card text-center">
                                        <h4>Enterprise Package</h4>
                                        <p class="h2 text-primary mb-3">Rs.17,499/month</p>
                                        <ul class="list-unstyled">
                                            <li>All Social Media Platforms</li>
                                            <li>Full-Scale Content Production</li>
                                            <li>Weekly Performance Reports</li>
                                            <li>Dedicated Social Media Manager</li>
                                            <li>Comprehensive Ad Campaigns</li>
                                            <li>Advanced Analytics</li>
                                            <li>Quarterly Strategy Workshops</li>
                                        </ul>
                                        <a href="../index.php#contact" class="btn btn-primary mt-3">Get Started</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="text-center">
                            <h3 class="text-primary mb-4">Why Choose ADSKTM for Social Media Marketing?</h3>
                            <div class="row justify-content-center">
                                <div class="col-md-8">
                                    <p class="lead">
                                        We don't just manage social media; we craft digital experiences that resonate with your target audience. Our data-driven approach ensures that every post, campaign, and strategy is aligned with your business goals, delivering measurable results and sustainable growth.
                                    </p>
                                </div>
                            </div>
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