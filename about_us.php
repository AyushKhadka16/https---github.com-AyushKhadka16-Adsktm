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
            scroll-behavior: smooth;
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

        .page-nav {
            background-color: #fff;
            padding: 15px 0;
            box-shadow: 0 2px 4px rgba(0.5,0.5,0.9,0.5);
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .page-nav ul {
            list-style: none;
            display: flex;
            justify-content: left;
            padding: 0;
            margin: 0;
        }

        .page-nav li {
            margin: 0 20px;
        }

        .page-nav a {
            color: var(--primary-blue);
            text-decoration: none;
            font-weight: 600;
            padding: 5px 15px;
            border-radius: 20px;
            transition: all 0.3s ease;
        }

        .page-nav a:hover {
            background-color: var(--accent-orange);
            color: white;
        }
        

        .main-title {
            text-align: center;
            color: var(--primary-blue);
            font-size: 2.5rem;
            font-weight: 700;
            margin: 20px 0;
            padding-bottom: 20px;
            position: relative;
        }

        .main-title:after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 3px;
            background: var(--accent-orange);
        }

        .section-content {
            background-color: white;
            border-radius: 15px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            padding: 40px;
            margin-bottom: 40px;
        }

        .section-title {
            color: var(--primary-blue);
            font-size: 1.8rem;
            font-weight: 600;
            margin-bottom: 25px;
            padding-bottom: 15px;
            border-bottom: 2px solid var(--accent-orange);
        }

        .section-text {
            font-size: 1.1rem;
            line-height: 1.8;
            color: #2c3e50;
            margin-bottom: 20px;
        }

        .why-choose-section {
            background-color: white;
            color: white;
            padding: 40px;
            border-radius: 15px;
            margin-top: 40px;
        }

        .why-choose-section .section-title {
            color: var(--primary-blue);
            border-bottom-color: var(--accent-orange);
        }

        .scroll-padding {
            scroll-margin-top: 100px;
        }

        /* team members */
.team-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 30px;
    margin-top: 30px;
}
.team-member {
    background: white;
    border-radius: 15px;
    padding: 25px;
    text-align: center;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
    transition: transform 0.3s ease;
}
.team-member:hover {
    transform: translateY(-10px);
}

.member-image {
    width: 200px;
    height: 200px;
    border-radius: 50%;
    margin: 0 auto 20px;
    overflow: hidden;
    border: 3px solid var(--accent-orange);
}

.member-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}
.member-name {
    color: var(--primary-blue);
    font-size: 1.5rem;
    font-weight: 700;
    margin-bottom: 5px;
}
.member-position {
    color: var(--accent-orange);
    font-weight: 700;
    margin-bottom: 15px;
    font-size: 1.1rem;
}

.member-specialization {
    color: var(--secondary-blue);
    font-size: 1rem;
    margin-bottom: 15px;
    font-weight: 500;
}

.member-quote {
    font-style: italic;
    color: #666;
    font-size: 0.95rem;
    font-weight: 600;
    line-height: 1.6;
    padding: 15px;
    background: #f0efe7;
    border-radius: 10px;
    margin-top: 15px;
}

@media (max-width: 768px) {
    .team-grid {
        grid-template-columns: 1fr;
    }
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

    <!-- Page Navigation -->
    <div class="page-nav">
        <ul>
            <!-- <li><a href="#about">About</a></li> -->
            <li><a href="#mission">Mission</a></li>
            <li><a href="#team">Team</a></li>
            <li><a href="#approach">Approach</a></li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="container">
        <h1 class="main-title">About ADSKTM</h1>
        
        <!-- About Section -->
        <section id="about" class="section-content scroll-padding">
            <div class="section-text">
                <p>ADSKTM is a pioneering digital marketing agency at the forefront of transforming businesses through innovative online strategies. Founded in 2020, we've rapidly established ourselves as a leader in the digital marketing landscape, combining cutting-edge technology with creative expertise to deliver exceptional results for our clients.</p>
                <p>Our comprehensive suite of services includes SEO optimization, social media marketing, content strategy development, and advanced analytics. We pride ourselves on staying ahead of digital trends and leveraging the latest technologies to give our clients a competitive edge in the ever-evolving digital marketplace.</p>
            </div>
        </section>

        <!-- Mission Section -->
        <section id="mission" class="section-content scroll-padding">
            <h2 class="section-title">Our Mission</h2>
            <div class="section-text">
                <p>At ADSKTM, our mission is to empower businesses of all sizes with data-driven, creative digital marketing strategies that drive real, measurable growth. We believe in democratizing access to effective digital marketing solutions, ensuring that both emerging startups and established enterprises can thrive in the digital age.</p>
                <p>We're committed to delivering measurable results through transparent, ethical practices and innovative solutions. Our goal is to not just meet but exceed our clients' expectations by consistently delivering ROI-focused campaigns that drive sustainable business growth.</p>
            </div>
        </section>

        <!-- Team Section
        <section id="team" class="section-content scroll-padding">
            <h2 class="section-title">Our Team</h2>
            <div class="section-text">
                <p>Our team comprises seasoned digital marketing professionals, innovative data analysts, creative content creators, and expert SEO specialists who share a common passion for digital excellence. Each team member brings unique expertise and perspectives, creating a dynamic environment where creativity meets technical proficiency.</p>
                <p>We maintain a culture of continuous learning and innovation, ensuring our team stays at the cutting edge of digital marketing trends and technologies. Our professionals regularly participate in industry conferences, workshops, and certification programs to enhance their skills and bring fresh perspectives to our clients' campaigns.</p>
                <p>The collaborative nature of our team allows us to approach each project from multiple angles, ensuring comprehensive solutions that address all aspects of digital marketing needs.</p>
            </div>
        </section> -->

        <section id="team" class="section-content scroll-padding">
    <h2 class="section-title">Our Team</h2>
    <div class="section-text">
        <p>Our team comprises seasoned digital marketing professionals, innovative data analysts, creative content creators, and expert SEO specialists who share a common passion for digital excellence. Each team member brings unique expertise and perspectives, creating a dynamic environment where creativity meets technical proficiency.</p>
    </div>
    
    <div class="team-grid">
        <!-- Social Media Marketing Lead -->
        <div class="team-member">
            <div class="member-image">
                <img src="images/profile_pic.jpg" alt="Aarati Sharma">
            </div>
            <h3 class="member-name">Aarati Sharma</h3>
            <div class="member-position">Social Media Marketing Lead</div>
            <div class="member-specialization">Specialization: Instagram & TikTok Strategy</div>
            <div class="member-quote">"In social media, authenticity and timing are everything. We don't just create content; we create conversations."</div>
        </div>

        <!-- Social Media Marketing Specialist -->
        <div class="team-member">
            <div class="member-image">
                <img src="images/profile_pic.jpg" alt="Ayush Khadka">
            </div>
            <h3 class="member-name">Ayush Khadka</h3>
            <div class="member-position">Social Media Marketing Specialist</div>
            <div class="member-specialization">Specialization: Facebook & LinkedIn Campaigns</div>
            <div class="member-quote">"Building meaningful connections through social media requires understanding both data and human psychology."</div>
        </div>

        <!-- SEO Expert -->
        <div class="team-member">
            <div class="member-image">
                <img src="images/profile_pic.jpg" alt="Binod Poudel">
            </div>
            <h3 class="member-name">Binod Poudel</h3>
            <div class="member-position">SEO Expert</div>
            <div class="member-specialization">Specialization: Technical SEO & Analytics</div>
            <div class="member-quote">"SEO is a marathon, not a sprint. We focus on sustainable, long-term growth strategies."</div>
        </div>

        <!-- Content Strategy Director -->
        <div class="team-member">
            <div class="member-image">
                <img src="images/profile_pic.jpg" alt="Pratima Shrestha">
            </div>
            <h3 class="member-name">Pratima Shrestha</h3>
            <div class="member-position">Content Strategy Director</div>
            <div class="member-specialization">Specialization: Content Planning & Brand Voice</div>
            <div class="member-quote">"Great content tells a story that resonates with your audience while driving meaningful business results."</div>
        </div>
    </div>
</section>


        <!-- Approach Section -->
        <section id="approach" class="section-content scroll-padding">
            <h2 class="section-title">Our Approach</h2>
            <div class="section-text">
                <p>ADSKTM's approach to digital marketing is built on three core principles: personalization, data-driven decision-making, and continuous optimization. We begin each client relationship with a thorough analysis of their business objectives, target audience, and current digital presence.</p>
                <p>Our strategic process involves creating customized solutions that align with each client's unique goals and market position. We utilize advanced analytics and market research to develop targeted campaigns that resonate with specific audience segments and drive meaningful engagement.</p>
                <p>Through constant monitoring and optimization, we ensure that our strategies evolve with changing market conditions and consumer behaviors, maintaining optimal performance and ROI for our clients.</p>
            </div>
        </section>

        <!-- Why Choose Section -->
        <section class="why-choose-section">
            <h2 class="section-title">Why Choose ADSKTM?</h2>
            <div class="section-text">
                <p>Choosing ADSKTM means partnering with a team that's dedicated to your success. We stand out in the digital marketing landscape through our commitment to innovation, transparency, and results-driven strategies. Our proven track record of success across various industries demonstrates our ability to deliver meaningful results for businesses of all sizes.</p>
                <p>We pride ourselves on building lasting partnerships with our clients, becoming an extension of their team rather than just a service provider. Our comprehensive understanding of digital marketing, combined with our passionate approach to client success, makes us the ideal partner for businesses looking to thrive in the digital age.</p>
            </div>
        </section>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>