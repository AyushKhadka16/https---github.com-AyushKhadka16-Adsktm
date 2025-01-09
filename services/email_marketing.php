<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Marketing - ADSKTM Digital Marketing</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/navbar.css">
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

        /* Container and Layout Styles */
        .row {
            background-color: #f8f9fa;
            border-radius: 10px;
            padding: 30px 15px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        /* Headings */
        .text-primary {
            color: var(--primary-blue) !important;
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
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>

<body>
   <!-- Navbar -->
   <nav class="navbar navbar-expand-lg navbar-dark" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="../index.php">
                <img src="../images/adsktmlogo3.png" alt="ADSKTM Logo">
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
                    <li class="nav-item"><a class="nav-link" href="../index.php#services"><i>Our Services</i></a></li>
                    <li class="nav-item"><a class="nav-link" href="../index.php#products"><i>Our Products</i></a></li>
                    <li class="nav-item"><a class="nav-link" href="../index.php#contact"><i>Contact Us</i></a></li>
                    <li class="nav-item"><a class="nav-link" href="../about_us.php"><i>About Us</i></a></li>
                    <li class="nav-item"><a class="nav-link" href="../blogs.php"><i>Blogs</i></a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Email Marketing Optimization Service Details -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="service-details">
                        <h1 class="text-center mb-4">Email Marketing Services</h1>

                        <div class="row">
                            <div class="col-md-8 offset-md-2">
                                <p class="lead text-center mb-5">
                                    Transform your customer engagement and drive conversions with our strategic email marketing solutions.
                                </p>
                            </div>
                        </div>

                        <div class="mb-5">
                            <h3 class="text-primary mb-3">What We Provide</h3>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Email campaign strategy and planning</li>
                                <li class="list-group-item">Custom email template design</li>
                                <li class="list-group-item">List segmentation and management</li>
                                <li class="list-group-item">A/B testing and optimization</li>
                                <li class="list-group-item">Automated email sequences</li>
                                <li class="list-group-item">Performance analytics and reporting</li>
                                <li class="list-group-item">Newsletter content creation</li>
                            </ul>
                        </div>

                        <div class="row mb-5">
                            <div class="col-md-6">
                                <h3 class="text-primary mb-3">Benefits to Your Organization</h3>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Higher customer engagement rates</li>
                                    <li class="list-group-item">Increased sales and conversions</li>
                                    <li class="list-group-item">Better customer retention</li>
                                    <li class="list-group-item">Personalized customer communication</li>
                                    <li class="list-group-item">Measurable marketing ROI</li>
                                    <li class="list-group-item">Building lasting customer relationships</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <h3 class="text-primary mb-3">Our Approach</h3>
                                <ol class="list-group list-group-numbered">
                                    <li class="list-group-item">Audience analysis and segmentation</li>
                                    <li class="list-group-item">Campaign strategy development</li>
                                    <li class="list-group-item">Content creation and design</li>
                                    <li class="list-group-item">Testing and optimization</li>
                                    <li class="list-group-item">Campaign execution</li>
                                    <li class="list-group-item">Performance analysis and improvement</li>
                                </ol>
                            </div>
                        </div>

                        <div class="mb-5">
                            <h3 class="text-primary text-center mb-4">Email Marketing Packages</h3>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="pricing-card text-center">
                                        <h4>Basic Package</h4>
                                        <p class="h2 text-primary mb-3">Rs.1,999/month</p>
                                        <ul class="list-unstyled">
                                            <li>Up to 5,000 Subscribers</li>
                                            <li>Basic Email Templates</li>
                                            <li>Monthly Newsletter</li>
                                            <li>Basic Segmentation</li>
                                            <li>Performance Reports</li>
                                        </ul>
                                        <a href="../index.php#contact" class="btn btn-primary mt-3">Get Started</a>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="pricing-card text-center">
                                        <h4>Professional Package</h4>
                                        <p class="h2 text-primary mb-3">Rs.3,999/month</p>
                                        <ul class="list-unstyled">
                                            <li>Up to 15,000 Subscribers</li>
                                            <li>Custom Email Templates</li>
                                            <li>Bi-weekly Newsletters</li>
                                            <li>Advanced Segmentation</li>
                                            <li>A/B Testing</li>
                                            <li>Automated Sequences</li>
                                        </ul>
                                        <a href="../index.php#contact" class="btn btn-primary mt-3">Get Started</a>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="pricing-card text-center">
                                        <h4>Enterprise Package</h4> 
                                        <p class="h2 text-primary mb-3">Rs7,599/month</p>
                                        <ul class="list-unstyled">
                                            <li>Unlimited Subscribers</li>
                                            <li>Premium Custom Templates</li>
                                            <li>Weekly Newsletters</li>
                                            <li>Advanced Automation</li>
                                            <li>Priority Support</li>
                                            <li>Detailed Analytics</li>
                                            <li>CRM Integration</li>
                                        </ul>
                                        <a href="../index.php#contact" class="btn btn-primary mt-3">Get Started</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="text-center">
                            <h3 class="text-primary mb-4">Why Choose ADSKTM for Email Marketing?</h3>
                            <div class="row justify-content-center">
                                <div class="col-md-8">
                                    <p class="lead">
                                        We don't just send emails; we craft engaging conversations that convert. Our data-driven approach to email marketing combines creative content with strategic automation to deliver personalized experiences that resonate with your audience. We focus on building and nurturing customer relationships while driving measurable business results through targeted email campaigns.
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