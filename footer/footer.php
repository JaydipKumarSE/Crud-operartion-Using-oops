<!DOCTYPE html>
<html>

<head>
    <title>Footer</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Syncopate:wght@700&family=Inter:wght@400;600;800&family=Space+Grotesk:wght@500;700&display=swap" rel="stylesheet">
    <!-- Font Awesome 6.5.1 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        :root {
            --glass-bg: rgba(15, 23, 42, 0.85);
            --glass-border: rgba(255, 255, 255, 0.15);
            --brand-gradient: linear-gradient(90deg, #f472b6 0%, #a855f7 50%, #6366f1 100%);
            --accent-glow: rgba(99, 102, 241, 0.4);
            --nav-text: #f8fafc;
        }


        body {
            font-family: 'Inter', sans-serif;
            background-color: #0f172a;
            color: white;
            padding-top: 120px;
            /* Space for fixed navbar */
        }

        .glass-footer {
            background: var(--glass-footer-bg);
            backdrop-filter: blur(25px) saturate(180%);
            -webkit-backdrop-filter: blur(25px) saturate(180%);
            border-top: 1px solid var(--glass-border);
            padding: 80px 0 30px;
            position: relative;
            overflow: hidden;
            color: white;
        }

        .glass-footer::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 2px;
            background: var(--brand-gradient);
            opacity: 0.5;
        }

        .footer-brand {
            font-family: 'Syncopate', sans-serif;
            font-weight: 700;
            font-size: 1.4rem;
            background: var(--brand-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .footer-logo {
            height: 45px;
            width: auto;
            filter: drop-shadow(0 0 10px var(--footer-glow));
        }

        .footer-heading {
            font-family: 'Space Grotesk', sans-serif;
            font-weight: 700;
            font-size: 1.1rem;
            margin-bottom: 25px;
            position: relative;
            padding-bottom: 10px;
        }

        .footer-heading::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 40px;
            height: 3px;
            background: var(--brand-gradient);
            border-radius: 2px;
        }

        .footer-links {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .footer-links li {
            margin-bottom: 15px;
        }

        .footer-links a {
            color: var(--text-muted);
            text-decoration: none;
            transition: all 0.3s ease;
            display: inline-block;
        }

        .footer-links a:hover {
            color: white;
            transform: translateX(5px);
        }

        .contact-info {
            display: flex;
            gap: 15px;
            margin-bottom: 20px;
            color: var(--text-muted);
        }

        .contact-icon {
            color: #a855f7;
            font-size: 1.2rem;
            width: 25px;
        }

        .social-links {
            display: flex;
            gap: 15px;
            margin-top: 30px;
        }

        .social-icon {
            width: 40px;
            height: 40px;
            border-radius: 12px;
            background: rgba(255, 255, 255, 0.05);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-decoration: none;
            border: 1px solid var(--glass-border);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }

        .social-icon:hover {
            background: var(--brand-gradient);
            transform: translateY(-5px) rotate(8deg);
            box-shadow: 0 10px 20px rgba(168, 85, 247, 0.3);
        }

        .footer-bottom {
            border-top: 1px solid var(--glass-border);
            margin-top: 60px;
            padding-top: 30px;
            text-align: center;
            color: var(--text-muted);
            font-size: 0.9rem;
        }

        .neon-text {
            color: #f472b6;
            font-weight: 600;
        }
    </style>
</head>

<body>

    <footer class="glass-footer">
        <div class="container">
            <div class="row gy-5">
                <!-- Brand Column -->
                <div class="col-lg-4">
                    <div class="footer-brand">
                        <img src="img/logo1.png" alt="Logo" class="footer-logo">
                        <span>SIDDHIK ENTERPRISES</span>
                    </div>
                    <p>
                        Empowering your business with cutting-edge solutions in advertising, tech, and beyond. Your vision, our mission.
                    </p>
                    <div class="social-links">
                        <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-x-twitter"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>

                <!-- Services section -->
                <div class="col-lg-3 col-md-6">
                    <h5 class="footer-heading">Core Services</h5>
                    <ul class="footer-links">
                        <li><a href="services.php">Advertising and Printing Agency</a></li>
                        <li><a href="services.php">Event Management Agency</a></li>
                        <li><a href="services.php">Food and Beverage Marketing</a></li>
                        <li><a href="services.php">Education and Job Consultant</a></li>
                        <li><a href="services.php">Cosmetic & Parlour Services</a></li>
                        <li><a href="services.php">Software & App Development</a></li>
                    </ul>
                </div>

                <!-- Quick Links section -->
                <div class="col-lg-2 col-md-6">
                    <h5 class="footer-heading">Quick Links</h5>
                    <ul class="footer-links">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about.php">About Us</a></li>
                        <li><a href="services.php">Our Services</a></li>
                        <li><a href="faq.php">FAQs</a></li>
                        <li><a href="contact.php">Contact Us</a></li>
                    </ul>
                </div>

                <!-- Contact section -->
                <div class="col-lg-3">
                    <h5 class="footer-heading">Get in Touch</h5>
                    <div class="contact-info">
                        <i class="fas fa-location-dot contact-icon"></i>
                        <span>Sheetla Sadan, Birsa Lane, Ranchi, Jharkhand 834006</span>
                    </div>
                    <div class="contact-info">
                        <i class="fas fa-phone contact-icon"></i>
                        <span>+91 XXX XXX XXXX</span>
                    </div>
                    <div class="contact-info">
                        <i class="fas fa-envelope contact-icon"></i>
                        <span>siddhikenterprises.com</span>
                    </div>
                    <!--  CTA -->
                    <a href="contact.php" class="btn mt-3" style="background: var(--brand-gradient); border: none; color: white; border-radius: 12px; padding: 10px 20px; font-weight: 600;">Let's Talk <i class="fas fa-arrow-right ms-2"></i></a>
                </div>
            </div>

            <div class="footer-bottom">
                <p>&copy; 2026 <span class="neon-text">Siddhik Enterprises</span>. All Rights Reserved. Designed & Developed With Love By <a style="color: white; text-decoration: none;" href="https://artisanssquarepvtltd.com/">ASPL</a></p>
            </div>
        </div>
    </footer>

</body>

</html>