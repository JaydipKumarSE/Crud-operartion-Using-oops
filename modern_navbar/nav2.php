<!-- Bootstrap 5 CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Google Fonts: Syncopate & Clash Display (fallback to Montserrat) & Inter -->
<link href="https://fonts.googleapis.com/css2?family=Syncopate:wght@700&family=Inter:wght@400;600;800&family=Space+Grotesk:wght@500;700&display=swap" rel="stylesheet">
<!-- Font Awesome 6 -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

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
    }

    .nav-wrapper {
        position: fixed;
        top: 30px;
        left: 0;
        right: 0;
        z-index: 1100;
        padding: 0 20px;
    }

    .navbar {
        background: var(--glass-bg);
        backdrop-filter: blur(20px) saturate(180%);
        -webkit-backdrop-filter: blur(20px) saturate(180%);
        border: 1px solid var(--glass-border);
        border-radius: 24px;
        padding: 10px 30px;
        box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5), 
                    inset 0 1px 1px rgba(255,255,255,0.1);
        transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
        position: relative;
        overflow: hidden;
    }

    .navbar::before {
        content: '';
        position: absolute;
        top: -2px; left: -2px; right: -2px; bottom: -2px;
        background: var(--brand-gradient);
        z-index: -1;
        opacity: 0.2;
        transition: opacity 0.5s ease;
    }

    .navbar:hover::before {
        opacity: 0.5;
    }

    .navbar-brand {
        font-family: 'Syncopate', sans-serif;
        font-weight: 700;
        font-size: 1.3rem;
        text-transform: uppercase;
        letter-spacing: 2px;
        display: flex;
        align-items: center;
        background: var(--brand-gradient);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        transition: all 0.3s ease;
    }

    .navbar-brand:hover {
        letter-spacing: 4px;
        filter: drop-shadow(0 0 8px var(--accent-glow));
    }

    .brand-dot {
        height: 8px;
        width: 8px;
        background: #f472b6;
        border-radius: 50%;
        display: inline-block;
        margin-left: 5px;
        box-shadow: 0 0 15px #f472b6;
        animation: pulse 2s infinite;
    }

    @keyframes pulse {
        0% { transform: scale(0.9); box-shadow: 0 0 0 0 rgba(244, 114, 182, 0.7); }
        70% { transform: scale(1); box-shadow: 0 0 0 10px rgba(244, 114, 182, 0); }
        100% { transform: scale(0.9); box-shadow: 0 0 0 0 rgba(244, 114, 182, 0); }
    }

    .nav-link {
        color: var(--nav-text) !important;
        font-weight: 600;
        font-size: 0.9rem;
        text-transform: uppercase;
        letter-spacing: 1px;
        padding: 10px 18px !important;
        border-radius: 12px;
        transition: all 0.3s ease;
        position: relative;
    }

    .nav-link:hover, .nav-link.active {
        background: rgba(255, 255, 255, 0.05);
        color: white !important;
        transform: translateY(-2px);
    }

    .nav-link::after {
        content: '';
        position: absolute;
        bottom: 8px;
        left: 18px;
        right: 18px;
        height: 2px;
        background: var(--brand-gradient);
        transform: scaleX(0);
        transition: transform 0.3s ease;
    }

    .nav-link:hover::after, .nav-link.active::after {
        transform: scaleX(1);
    }

    .navbar-toggler {
        border: none;
        background: rgba(255,255,255,0.1);
        border-radius: 12px;
        padding: 8px 12px;
    }

    .navbar-toggler:focus {
        box-shadow: none;
    }

    .unique-cta {
        background: var(--brand-gradient);
        color: white !important;
        border-radius: 50px;
        padding: 12px 28px !important;
        font-weight: 800;
        font-size: 0.85rem;
        text-transform: uppercase;
        border: none;
        position: relative;
        text-decoration: none;
        z-index: 1;
        box-shadow: 0 10px 20px -5px rgba(168, 85, 247, 0.5);
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    }

    .unique-cta:hover {
        transform: scale(1.05) translateY(-3px);
        box-shadow: 0 15px 30px -5px rgba(168, 85, 247, 0.7);
    }

 
    @media (max-width: 991.98px) {
        .navbar-collapse {
            background: rgba(15, 23, 42, 0.98);
            border: 1px solid var(--glass-border);
            margin-top: 20px;
            padding: 30px;
            border-radius: 24px;
            backdrop-filter: blur(25px);
        }
        .nav-link {
            padding: 15px 0 !important;
            text-align: center;
            font-size: 1.1rem;
        }
    }
</style>

<div class="nav-wrapper">
    <div class="container-fluid px-lg-5">
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="index.php">
                SIDDHIK<span class="brand-dot"></span>
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#extremeNav">
                <span class="fas fa-grid-2 text-white"><i class="fas fa-bars"></i></span>
            </button>

            <div class="collapse navbar-collapse" id="extremeNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a class="nav-link " href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="services.php">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
                    <!-- <li class="nav-item"><a class="nav-link" href="projects.php">FAQs</a></li> -->
                </ul>
                
                <div class="d-flex align-items-center">
                    <a href="contact.php" class="unique-cta">contact <i class="fas fa-chevron-right ms-2"></i></a>
                </div>
            </div>
        </nav>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
