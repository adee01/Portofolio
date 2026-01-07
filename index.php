<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ade - Creative Digital Designer</title>
    <link rel="icon" href="data:image/svg+xml,
<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'>
<text y='.9em' font-size='90'>💻</text>
</svg>">

    <!-- <link href="style.css" rel="stylesheet"> -->
   <style>
    * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --primary: #00ff88;
            --secondary: #00d4ff;
            --dark: #0a0a0a;
            --dark-light: #1a1a1a;
            --text: #ffffff;
            --text-gray: #a0a0a0;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #0a0a0a 0%, #1a1a2e 100%);
            color: var(--text);
            overflow-x: hidden;
            line-height: 1.6;
        }

        /* Animated Background */
        .bg-animation {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            opacity: 0.3;
        }

        .particle {
            position: absolute;
            background: var(--primary);
            border-radius: 50%;
            animation: float 20s infinite;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0) translateX(0); }
            25% { transform: translateY(-100px) translateX(50px); }
            50% { transform: translateY(-200px) translateX(-50px); }
            75% { transform: translateY(-100px) translateX(-100px); }
        }

        /* Navigation */
        nav {
            position: fixed;
            top: 0;
            width: 100%;
            padding: 20px 5%;
            background: rgba(10, 10, 10, 0.8);
            backdrop-filter: blur(10px);
            z-index: 1000;
            transition: all 0.3s;
        }

        nav.scrolled {
            padding: 15px 5%;
            box-shadow: 0 5px 30px rgba(0, 255, 136, 0.1);
        }

        .nav-container {
            max-width: 1400px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 24px;
            font-weight: bold;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            cursor: pointer;
            transition: transform 0.3s;
        }

        .logo:hover {
            transform: scale(1.05);
        }

        .nav-links {
            display: flex;
            gap: 30px;
            list-style: none;
        }

        .nav-links a {
            color: var(--text);
            text-decoration: none;
            font-size: 16px;
            position: relative;
            transition: color 0.3s;
        }

        .nav-links a::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--primary);
            transition: width 0.3s;
        }

        .nav-links a:hover {
            color: var(--primary);
        }

        .nav-links a:hover::after {
            width: 100%;
        }

        /* Mobile Menu Toggle */
        .menu-toggle {
            display: none;
            flex-direction: column;
            cursor: pointer;
            gap: 5px;
        }

        .menu-toggle span {
            width: 25px;
            height: 3px;
            background: var(--primary);
            transition: all 0.3s;
            border-radius: 3px;
        }

        .menu-toggle.active span:nth-child(1) {
            transform: rotate(45deg) translate(8px, 8px);
        }

        .menu-toggle.active span:nth-child(2) {
            opacity: 0;
        }

        .menu-toggle.active span:nth-child(3) {
            transform: rotate(-45deg) translate(7px, -7px);
        }

        /* Mobile Menu Styles */
        @media (max-width: 768px) {
            .menu-toggle {
                display: flex;
            }

            .nav-links {
                position: fixed;
                top: 70px;
                right: -100%;
                width: 70%;
                max-width: 300px;
                height: calc(100vh - 70px);
                background: rgba(10, 10, 10, 0.95);
                backdrop-filter: blur(20px);
                flex-direction: column;
                padding: 30px;
                gap: 20px;
                transition: right 0.3s;
                border-left: 1px solid rgba(0, 255, 136, 0.2);
            }

            .nav-links.active {
                right: 0;
            }

            .nav-links li {
                width: 100%;
            }

            .nav-links a {
                display: block;
                padding: 15px 0;
                font-size: 18px;
                border-bottom: 1px solid rgba(0, 255, 136, 0.1);
            }
        }

        /* Hero Section */
        .hero {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 100px 5%;
            position: relative;
        }

        .hero-content {
            max-width: 1400px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
        }

        .hero-text h1 {
            font-size: 56px;
            margin-bottom: 20px;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: fadeInUp 1s;
        }

        .hero-text .subtitle {
            font-size: 24px;
            color: var(--text-gray);
            margin-bottom: 30px;
            animation: fadeInUp 1s 0.2s backwards;
        }

        .hero-text p {
            font-size: 18px;
            color: var(--text-gray);
            margin-bottom: 40px;
            animation: fadeInUp 1s 0.4s backwards;
        }

        .cta-buttons {
            display: flex;
            gap: 20px;
            animation: fadeInUp 1s 0.6s backwards;
        }

        .btn {
            padding: 15px 35px;
            border: none;
            border-radius: 50px;
            font-size: 16px;
            cursor: pointer;
            transition: all 0.3s;
            text-decoration: none;
            display: inline-block;
        }

        .btn-primary {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: var(--dark);
            font-weight: bold;
        }

        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 30px rgba(0, 255, 136, 0.3);
        }

        .btn-secondary {
            background: transparent;
            border: 2px solid var(--primary);
            color: var(--primary);
        }

        .btn-secondary:hover {
            background: var(--primary);
            color: var(--dark);
        }

        /* WhatsApp Button Hover */
        #sendWhatsApp:hover {
            background: #128C7E !important;
            transform: translateY(-3px);
            box-shadow: 0 10px 30px rgba(37, 211, 102, 0.3);
        }

        .hero-image {
            position: relative;
            animation: fadeInRight 1s;
        }

        .profile-card {
            background: rgba(26, 26, 30, 0.6);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(0, 255, 136, 0.2);
            border-radius: 30px;
            padding: 40px;
            text-align: center;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            transition: transform 0.3s;
        }

        .profile-card:hover {
            transform: translateY(-10px);
        }

        .profile-img {
            width: 250px;
            height: 250px;
            border-radius: 50%;
            margin: 0 auto 30px;
            border: 5px solid var(--primary);
            box-shadow: 0 0 30px rgba(0, 255, 136, 0.5);
            overflow: hidden;
            position: relative;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 80px;
            color: white;
            flex-shrink: 0;
        }

        .profile-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            position: absolute;
            top: 0;
            left: 0;
        }

        .social-links {
            display: flex;
            gap: 15px;
            justify-content: center;
            margin-top: 20px;
        }

        .social-links a {
            width: 45px;
            height: 45px;
            border-radius: 50%;
            background: rgba(0, 255, 136, 0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--primary);
            text-decoration: none;
            transition: all 0.3s;
        }

        .social-links a:hover {
            background: var(--primary);
            color: var(--dark);
            transform: translateY(-3px);
        }

        /* Skills Section */
        .section {
            padding: 100px 5%;
            max-width: 1400px;
            margin: 0 auto;
        }

        .section-title {
            font-size: 48px;
            text-align: center;
            margin-bottom: 60px;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .skills-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
        }

        .skill-card {
            background: rgba(26, 26, 30, 0.6);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(0, 255, 136, 0.2);
            border-radius: 20px;
            padding: 40px;
            text-align: center;
            transition: all 0.3s;
            cursor: pointer;
        }

        .skill-card:hover {
            transform: translateY(-10px);
            border-color: var(--primary);
            box-shadow: 0 20px 40px rgba(0, 255, 136, 0.2);
        }

        .skill-icon {
            width: 80px;
            height: 80px;
            margin: 0 auto 20px;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 36px;
            transition: transform 0.3s;
        }

        .skill-card:hover .skill-icon {
            transform: rotateY(360deg);
        }

        .skill-card h3 {
            font-size: 24px;
            margin-bottom: 15px;
        }

        .skill-card p {
            color: var(--text-gray);
            font-size: 14px;
        }

        /* Portfolio Section */
        .portfolio-filters {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-bottom: 50px;
            flex-wrap: wrap;
        }

        .filter-btn {
            padding: 10px 25px;
            background: rgba(26, 26, 30, 0.6);
            border: 1px solid rgba(0, 255, 136, 0.2);
            color: var(--text);
            border-radius: 50px;
            cursor: pointer;
            transition: all 0.3s;
        }

        .filter-btn:hover, .filter-btn.active {
            background: var(--primary);
            color: var(--dark);
            border-color: var(--primary);
        }

        .portfolio-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 30px;
        }

        .portfolio-item {
            position: relative;
            border-radius: 20px;
            overflow: hidden;
            cursor: pointer;
            height: 300px;
            background: rgba(26, 26, 30, 0.6);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(0, 255, 136, 0.2);
            transition: all 0.3s;
        }

        .portfolio-item:hover {
            transform: translateY(-5px);
            border-color: var(--primary);
            box-shadow: 0 10px 40px rgba(0, 255, 136, 0.3);
        }

        .portfolio-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s;
        }

        .portfolio-item:hover .portfolio-img {
            transform: scale(1.1);
        }

        /* Placeholder gradient when no image */
        .portfolio-placeholder {
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 60px;
        }

        .portfolio-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(0, 255, 136, 0.9), rgba(0, 212, 255, 0.9));
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: opacity 0.3s;
            padding: 20px;
            text-align: center;
        }

        .portfolio-item:hover .portfolio-overlay {
            opacity: 1;
        }

        .portfolio-item:hover .portfolio-img {
            transform: scale(1.1);
        }

        .portfolio-overlay h3 {
            font-size: 24px;
            margin-bottom: 10px;
            color: var(--dark);
        }

        .portfolio-overlay p {
            color: var(--dark);
            font-size: 14px;
            margin-bottom: 15px;
        }

        .portfolio-overlay .view-btn {
            padding: 10px 25px;
            background: var(--dark);
            color: var(--primary);
            border: none;
            border-radius: 25px;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s;
        }

        .portfolio-overlay .view-btn:hover {
            transform: scale(1.1);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        }

        /* Modal Styles */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.9);
            z-index: 10000;
            align-items: center;
            justify-content: center;
            padding: 20px;
            backdrop-filter: blur(10px);
            animation: fadeIn 0.3s;
        }

        .modal.active {
            display: flex;
        }

        .modal-content {
            background: rgba(26, 26, 30, 0.95);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(0, 255, 136, 0.3);
            border-radius: 20px;
            max-width: 900px;
            width: 100%;
            max-height: 90vh;
            overflow-y: auto;
            position: relative;
            animation: slideUp 0.3s;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes slideUp {
            from { 
                opacity: 0;
                transform: translateY(50px);
            }
            to { 
                opacity: 1;
                transform: translateY(0);
            }
        }

        .modal-close {
            position: absolute;
            top: 20px;
            right: 20px;
            width: 40px;
            height: 40px;
            background: rgba(255, 0, 0, 0.8);
            border: none;
            border-radius: 50%;
            color: white;
            font-size: 24px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s;
            z-index: 10;
        }

        .modal-close:hover {
            background: red;
            transform: rotate(90deg);
        }

        .modal-header {
            position: relative;
            height: 400px;
            overflow: hidden;
            border-radius: 20px 20px 0 0;
        }

        .modal-header img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .modal-body {
            padding: 40px;
        }

        .modal-title {
            font-size: 32px;
            margin-bottom: 10px;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .modal-category {
            color: var(--text-gray);
            font-size: 16px;
            margin-bottom: 20px;
        }

        .modal-description {
            color: var(--text);
            font-size: 16px;
            line-height: 1.8;
            margin-bottom: 30px;
        }

        .modal-tech {
            margin-bottom: 30px;
        }

        .modal-tech h4 {
            color: var(--primary);
            font-size: 18px;
            margin-bottom: 15px;
        }

        .tech-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        .tech-tag {
            padding: 8px 16px;
            background: rgba(0, 255, 136, 0.1);
            border: 1px solid rgba(0, 255, 136, 0.3);
            border-radius: 20px;
            color: var(--primary);
            font-size: 14px;
        }

        .modal-links {
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
        }

        .modal-link {
            padding: 12px 30px;
            border-radius: 25px;
            text-decoration: none;
            font-weight: bold;
            transition: all 0.3s;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        .modal-link.primary {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: var(--dark);
        }

        .modal-link.secondary {
            background: transparent;
            border: 2px solid var(--primary);
            color: var(--primary);
        }

        .modal-link:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 20px rgba(0, 255, 136, 0.3);
        }

        /* Scrollbar Styling for Modal */
        .modal-content::-webkit-scrollbar {
            width: 8px;
        }

        .modal-content::-webkit-scrollbar-track {
            background: rgba(0, 0, 0, 0.2);
            border-radius: 10px;
        }

        .modal-content::-webkit-scrollbar-thumb {
            background: var(--primary);
            border-radius: 10px;
        }

        .modal-content::-webkit-scrollbar-thumb:hover {
            background: var(--secondary);
        }

        /* Contact Section */
        .contact-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
        }

        .contact-info h3 {
            font-size: 32px;
            margin-bottom: 20px;
        }

        .contact-info p {
            color: var(--text-gray);
            margin-bottom: 30px;
        }

        .contact-details {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .contact-details a {
            text-decoration: none;
        }

        .contact-item {
            display: flex;
            align-items: center;
            gap: 15px;
            padding: 20px;
            background: rgba(26, 26, 30, 0.6);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(0, 255, 136, 0.2);
            border-radius: 15px;
            transition: all 0.3s;
            cursor: pointer;
            text-decoration: none;
            color: var(--text);
        }

        .contact-item:hover {
            border-color: var(--primary);
            transform: translateX(10px);
            box-shadow: 0 5px 20px rgba(0, 255, 136, 0.3);
        }

        .contact-item:hover .contact-icon {
            transform: scale(1.1) rotate(5deg);
        }

        .contact-item strong {
            display: block;
            margin-bottom: 3px;
            font-size: 18px;
            line-height: 1.2;
        }

        .contact-item span {
            line-height: 1.4;
        }

        .contact-text {
            display: flex;
            flex-direction: column;
            gap: 3px;
        }

        .contact-icon {
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            flex-shrink: 0;
            transition: transform 0.3s;
        }

        .contact-form {
            background: rgba(26, 26, 30, 0.6);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(0, 255, 136, 0.2);
            border-radius: 20px;
            padding: 40px;
        }

        .form-group {
            margin-bottom: 25px;
        }

        .form-group label {
            display: block;
            margin-bottom: 10px;
            color: var(--primary);
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 15px;
            background: rgba(10, 10, 10, 0.5);
            border: 1px solid rgba(0, 255, 136, 0.2);
            border-radius: 10px;
            color: var(--text);
            font-size: 16px;
            transition: all 0.3s;
        }

        .form-group input:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 20px rgba(0, 255, 136, 0.2);
        }

        .form-group textarea {
            resize: vertical;
            min-height: 150px;
        }

        /* Footer */
        footer {
            background: rgba(10, 10, 10, 0.8);
            padding: 40px 5%;
            text-align: center;
            border-top: 1px solid rgba(0, 255, 136, 0.2);
        }

        .footer-content p {
            color: var(--text-gray);
            margin-bottom: 20px;
        }

        /* Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInRight {
            from {
                opacity: 0;
                transform: translateX(30px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        /* Responsive Design */
        
        /* Extra Large Desktop (1920px+) */
        @media (min-width: 1920px) {
            .section {
                max-width: 1600px;
            }
            
            .hero-text h1 {
                font-size: 64px;
            }
        }

        /* Large Desktop (1440px - 1919px) */
        @media (max-width: 1440px) {
            .hero-text h1 {
                font-size: 48px;
            }
            
            .section-title {
                font-size: 42px;
            }
        }

        /* Standard Desktop/Laptop (1024px - 1439px) */
        @media (max-width: 1200px) {
            .nav-container {
                padding: 0 20px;
            }
            
            .hero-text h1 {
                font-size: 44px;
            }
            
            .skills-grid {
                grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            }
            
            .portfolio-grid {
                grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            }
        }

        /* Tablet Landscape (768px - 1023px) */
        @media (max-width: 1024px) {
            .hero-content {
                gap: 40px;
            }
            
            .hero-text h1 {
                font-size: 40px;
            }
            
            .hero-text .subtitle {
                font-size: 20px;
            }
            
            .profile-img {
                width: 200px;
                height: 200px;
                font-size: 60px;
            }

            .profile-img img {
                object-fit: cover;
            }
            
            .section {
                padding: 80px 5%;
            }
            
            .section-title {
                font-size: 38px;
                margin-bottom: 40px;
            }
            
            .skill-card {
                padding: 30px;
            }
            
            .contact-container {
                gap: 40px;
            }
        }

        /* Tablet Portrait (600px - 767px) */
        @media (max-width: 768px) {
            nav {
                padding: 15px 5%;
            }
            
            .logo {
                font-size: 20px;
            }
            
            .hero {
                padding: 80px 5%;
                min-height: auto;
            }
            
            .hero-content {
                grid-template-columns: 1fr;
                gap: 30px;
            }
            
            .hero-text {
                text-align: center;
            }
            
            .hero-text h1 {
                font-size: 36px;
            }
            
            .hero-text .subtitle {
                font-size: 18px;
            }
            
            .hero-text p {
                font-size: 16px;
            }
            
            .cta-buttons {
                justify-content: center;
            }
            
            .profile-card {
                padding: 30px;
            }
            
            .profile-img {
                width: 180px;
                height: 180px;
                font-size: 50px;
            }

            .profile-img img {
                object-fit: cover;
            }
            
            .section {
                padding: 60px 5%;
            }
            
            .section-title {
                font-size: 32px;
                margin-bottom: 30px;
            }
            
            .skills-grid {
                grid-template-columns: 1fr;
                gap: 20px;
            }
            
            .portfolio-filters {
                gap: 10px;
            }
            
            .filter-btn {
                padding: 8px 20px;
                font-size: 14px;
            }
            
            .portfolio-grid {
                grid-template-columns: 1fr;
                gap: 20px;
            }
            
            .portfolio-item {
                height: 250px;
            }
            
            .contact-container {
                grid-template-columns: 1fr;
                gap: 30px;
            }
            
            .contact-info h3 {
                font-size: 28px;
            }
            
            .contact-form {
                padding: 30px;
            }
            
            .scroll-indicator {
                display: none;
            }
        }

        /* Mobile Landscape (480px - 599px) */
        @media (max-width: 600px) {
            .hero-text h1 {
                font-size: 32px;
            }
            
            .hero-text .subtitle {
                font-size: 16px;
            }
            
            .btn {
                padding: 12px 28px;
                font-size: 14px;
            }
            
            .cta-buttons {
                flex-direction: column;
                gap: 15px;
            }
            
            .section-title {
                font-size: 28px;
            }
            
            .skill-card {
                padding: 25px;
            }
            
            .skill-icon {
                width: 60px;
                height: 60px;
                font-size: 28px;
            }
            
            .skill-card h3 {
                font-size: 20px;
            }
            
            .portfolio-item {
                height: 220px;
            }
            
            .portfolio-overlay h3 {
                font-size: 20px;
            }
        }

        /* Small Mobile (320px - 479px) */
        @media (max-width: 480px) {
            nav {
                padding: 12px 4%;
            }
            
            .logo {
                font-size: 18px;
            }
            
            .hero {
                padding: 70px 4%;
            }
            
            .hero-text h1 {
                font-size: 28px;
                line-height: 1.2;
            }
            
            .hero-text .subtitle {
                font-size: 14px;
                margin-bottom: 20px;
            }
            
            .hero-text p {
                font-size: 14px;
                margin-bottom: 30px;
            }
            
            .btn {
                padding: 10px 24px;
                font-size: 13px;
                width: 100%;
            }
            
            .profile-card {
                padding: 20px;
            }
            
            .profile-img {
                width: 150px;
                height: 150px;
                font-size: 40px;
            }

            .profile-img img {
                object-fit: cover;
            }
            
            .social-links a {
                width: 40px;
                height: 40px;
                font-size: 16px;
            }
            
            .section {
                padding: 50px 4%;
            }
            
            .section-title {
                font-size: 24px;
                margin-bottom: 25px;
            }
            
            .skill-card {
                padding: 20px;
            }
            
            .skill-icon {
                width: 50px;
                height: 50px;
                font-size: 24px;
            }
            
            .skill-card h3 {
                font-size: 18px;
            }
            
            .skill-card p {
                font-size: 13px;
            }
            
            .portfolio-filters {
                gap: 8px;
            }
            
            .filter-btn {
                padding: 6px 15px;
                font-size: 12px;
            }
            
            .portfolio-item {
                height: 200px;
            }
            
            .portfolio-overlay h3 {
                font-size: 18px;
            }
            
            .portfolio-overlay p {
                font-size: 12px;
            }
            
            .contact-info h3 {
                font-size: 24px;
            }
            
            .contact-info p {
                font-size: 14px;
            }
            
            .contact-item {
                padding: 15px;
            }
            
            .contact-icon {
                width: 40px;
                height: 40px;
                font-size: 16px;
            }

            .contact-item strong {
                font-size: 16px;
            }

            .contact-item span {
                font-size: 13px;
            }
            
            .contact-form {
                padding: 20px;
            }
            
            .form-group label {
                font-size: 14px;
            }
            
            .form-group input,
            .form-group textarea {
                padding: 12px;
                font-size: 14px;
            }
            
            footer {
                padding: 30px 4%;
            }
            
            footer p {
                font-size: 13px;
            }
        }

        /* Extra Small Mobile (< 320px) */
        @media (max-width: 320px) {
            .hero-text h1 {
                font-size: 24px;
            }
            
            .section-title {
                font-size: 22px;
            }
            
            .profile-img {
                width: 120px;
                height: 120px;
                font-size: 32px;
            }

            .profile-img img {
                object-fit: cover;
            }
        }

        /* Scroll indicator */
        .scroll-indicator {
            position: absolute;
            bottom: 30px;
            left: 50%;
            transform: translateX(-50%);
            animation: bounce 2s infinite;
        }

        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% {
                transform: translateX(-50%) translateY(0);
            }
            40% {
                transform: translateX(-50%) translateY(-20px);
            }
            60% {
                transform: translateX(-50%) translateY(-10px);
            }
        }
    </style>
</head>
<body>
    <!-- Animated Background -->
    <div class="bg-animation" id="bgAnimation"></div>

    <!-- Navigation -->
    <nav id="navbar">
        <div class="nav-container">
            <div class="logo">AD.</div>
            <div class="menu-toggle" id="menuToggle">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <ul class="nav-links" id="navLinks">
                <li><a href="#home">Home</a></li>
                <li><a href="#skills">Skills</a></li>
                <li><a href="#portfolio">Portfolio</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="hero-content">
            <div class="hero-text">
                <h1>Ade Dwi Prayoga</h1>
                <div class="subtitle">Creative Digital Designer</div>
                <p>Saya adalah seorang profesional kreatif yang berfokus pada menciptakan pengalaman digital yang memukau dan fungsional. Dengan keahlian dalam web development, UI/UX design, Hingga fotografi, saya siap mewujudkan visi digital Anda.</p>
                <div class="cta-buttons">
                    <a href="#portfolio" class="btn btn-primary">Lihat Portfolio</a>
                    <a href="#contact" class="btn btn-secondary">Hubungi Saya</a>
                </div>
            </div>
            <div class="hero-image">
                <div class="profile-card">
                    <div class="profile-img">
                        <!-- Pilih SALAH SATU cara di bawah ini -->
                        
                        <!-- CARA 1: Pakai URL Online (Contoh demo) -->
                        <!-- <img src="https://i.pravatar.cc/300?img=12" alt="Ade Dwi Prayoga"> -->
                        
                        <!-- CARA 2: Pakai File Lokal (Uncomment baris di bawah dan comment baris di atas) -->
                        <img src="images/ade05.jpg" alt="Ade Dwi Prayoga">
                        
                        <!-- CARA 3: Pakai Emoji (Uncomment baris di bawah dan comment baris di atas) -->
                        <!-- 🎨 -->
                    </div>
                    <h3>2+ Tahun Pengalaman</h3>
                    <p style="color: var(--text-gray);">Berpengalaman dalam industri kreatif dan digital</p>
                    <div class="social-links">
                        <a href="mailto:adedwiprayoga01@email.com" title="Email">📧</a>
                        <a href="#" target="_blank" title="LinkedIn">💼</a>
                        <a href="#" target="_blank" title="Instagram">📸</a>
                        <a href="#" target="_blank" title="Twitter">🐦</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="scroll-indicator">
            <div style="color: var(--primary); font-size: 30px;">↓</div>
        </div>
    </section>

    <!-- Skills Section -->
    <section class="section" id="skills">
        <h2 class="section-title">Keahlian Saya</h2>
        <div class="skills-grid">
            <div class="skill-card">
                <div class="skill-icon">💻</div>
                <h3>Website Development</h3>
                <p>Membangun website modern, responsif, dan performant menggunakan teknologi terkini. Expertise dalam HTML, CSS, JavaScript, PHP, dan berbagai framework.</p>
            </div>
            <div class="skill-card">
                <div class="skill-icon">✨</div>
                <h3>UI/UX Design</h3>
                <p>Merancang interface yang intuitif dan user experience yang menyenangkan. Fokus pada user-centered design dan design thinking methodology.</p>
            </div>
            <div class="skill-card">
                <div class="skill-icon">🎨</div>
                <h3>Design Grafis</h3>
                <p>Menciptakan visual identity yang kuat dan memorable. Mahir dalam Adobe Creative Suite, branding, dan visual communication.</p>
            </div>
            <div class="skill-card">
                <div class="skill-icon">📸</div>
                <h3>Fotografer</h3>
                <p>Mengabadikan momen dengan perspektif unik dan artistik. Spesialisasi dalam product photography, portrait, dan creative photography.</p>
            </div>
            <div class="skill-card">
                <div class="skill-icon">📱</div>
                <h3>Social Media Specialist</h3>
                <p>Mengelola strategi konten dan engagement di berbagai platform social media. Expertise dalam content creation dan social media analytics.</p>
            </div>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section class="section" id="portfolio">
        <h2 class="section-title">Portfolio</h2>
        <div class="portfolio-filters">
            <button class="filter-btn active" data-filter="all">Semua</button>
            <button class="filter-btn" data-filter="web">Web Design</button>
            <button class="filter-btn" data-filter="ui">UI/UX</button>
            <button class="filter-btn" data-filter="graphic">Graphic Design</button>
            <button class="filter-btn" data-filter="photo">Photography</button>
        </div>
        <div class="portfolio-grid">
            <!-- Portfolio Item 1 -->
            <div class="portfolio-item" data-category="web" onclick="openModal(1)">
                <!-- GANTI dengan URL gambar project Anda atau hapus comment untuk pakai placeholder -->
                <img src="images/porto01.png" alt="E-Commerce Platform" class="portfolio-img">
                <!-- <div class="portfolio-placeholder" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">🌐</div> -->
                <div class="portfolio-overlay">
                    <h3>Portal Berita Kampus</h3>
                    <p>Modern & Responsive</p>
                    <button class="view-btn">Lihat Detail</button>
                </div>
            </div>

            <!-- Portfolio Item 2 -->
            <div class="portfolio-item" data-category="ui" onclick="openModal(2)">
                <img src="images/porto03.png" alt="Mobile App Design" class="portfolio-img">
                <!-- <div class="portfolio-placeholder" style="background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);">📱</div> -->
                <div class="portfolio-overlay">
                    <h3>Mobile App Design</h3>
                    <p>UI/UX Design</p>
                    <button class="view-btn">Lihat Detail</button>
                </div>
            </div>

            <!-- Portfolio Item 3 -->
            <div class="portfolio-item" data-category="graphic" onclick="openModal(3)">
                <img src="images/porto04.jpg" alt="Brand Identity" class="portfolio-img">
                <!-- <div class="portfolio-placeholder" style="background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);">🎨</div> -->
                <div class="portfolio-overlay">
                    <h3>Organizational Identity</h3>
                    <p>Apparel Design</p>
                    <button class="view-btn">Lihat Detail</button>
                </div>
            </div>

            <!-- Portfolio Item 4 -->
            <div class="portfolio-item" data-category="photo" onclick="openModal(4)">
                <img src="images/porto05.png" alt="Product Photography" class="portfolio-img">
                <!-- <div class="portfolio-placeholder" style="background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%);">📸</div> -->
                <div class="portfolio-overlay">
                    <h3>Photography</h3>
                    <p>Street Photography</p>
                    <button class="view-btn">Lihat Detail</button>
                </div>
            </div>

            <!-- Portfolio Item 5 -->
            <div class="portfolio-item" data-category="web" onclick="openModal(5)">
                <img src="images/porto06.png" alt="Corporate Website" class="portfolio-img">
                <!-- <div class="portfolio-placeholder" style="background: linear-gradient(135deg, #fa709a 0%, #fee140 100%);">💼</div> -->
                <div class="portfolio-overlay">
                    <h3>Website Product Catalog</h3>
                    <p>Professional Design</p>
                    <button class="view-btn">Lihat Detail</button>
                </div>
            </div>

            <!-- Portfolio Item 6 -->
            <div class="portfolio-item" data-category="graphic" onclick="openModal(6)">
                <img src="images/porto07.png" alt="Social Media Content" class="portfolio-img">
                <!-- <div class="portfolio-placeholder" style="background: linear-gradient(135deg, #30cfd0 0%, #330867 100%);">🎭</div> -->
                <div class="portfolio-overlay">
                    <h3>Social Media Content</h3>
                    <p>Creative Design</p>
                    <button class="view-btn">Lihat Detail</button>
                </div>
            </div>

            <!-- Portfolio Item 7 -->
            <div class="portfolio-item" data-category="photo" onclick="openModal(7)">
                <img src="images/porto08.png" alt="Social Media Content" class="portfolio-img">
                <!-- <div class="portfolio-placeholder" style="background: linear-gradient(135deg, #30cfd0 0%, #330867 100%);">🎭</div> -->
                <div class="portfolio-overlay">
                    <h3>Company Profile Video</h3>
                    <p>Breanding Video</p>
                    <button class="view-btn">Lihat Detail</button>
                </div>
            </div>

            <!-- Portfolio Item 8 -->
            <div class="portfolio-item" data-category="photo" onclick="openModal(8)">
                <img src="images/porto09.png" alt="Social Media Content" class="portfolio-img">
                <!-- <div class="portfolio-placeholder" style="background: linear-gradient(135deg, #30cfd0 0%, #330867 100%);">🎭</div> -->
                <div class="portfolio-overlay">
                    <h3>POV</h3>
                    <p>Palembang Object Visual</p>
                    <button class="view-btn">Lihat Detail</button>
                </div>
            </div>

            <!-- Portfolio Item 9 -->
            <div class="portfolio-item" data-category="photo" onclick="openModal(9)">
                <img src="images/porto12.png" alt="Social Media Content" class="portfolio-img">
                <!-- <div class="portfolio-placeholder" style="background: linear-gradient(135deg, #30cfd0 0%, #330867 100%);">🎭</div> -->
                <div class="portfolio-overlay">
                    <h3>Website TopUp Games</h3>
                    <p>Web Development</p>
                    <button class="view-btn">Lihat Detail</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal Portfolio Detail -->
    <div class="modal" id="portfolioModal">
        <div class="modal-content">
            <button class="modal-close" onclick="closeModal()">✕</button>
            <div class="modal-header">
                <img id="modalImage" src="" alt="Project Image">
            </div>
            <div class="modal-body">
                <h2 class="modal-title" id="modalTitle"></h2>
                <p class="modal-category" id="modalCategory"></p>
                <p class="modal-description" id="modalDescription"></p>
                <div class="modal-tech">
                    <h4>Teknologi yang Digunakan:</h4>
                    <div class="tech-tags" id="modalTech"></div>
                </div>
                <div class="modal-links">
                    <a href="liveLink" class="modal-link primary" id="modalLiveLink" target="_blank">
                        🚀 Live Demo
                    </a>
                    <a href="#" class="modal-link secondary" id="modalGithubLink" target="_blank">
                        💻 View Code
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact Section -->
    <section class="section" id="contact">
        <h2 class="section-title">Mari Berkolaborasi</h2>
        <div class="contact-container">
            <div class="contact-info">
                <h3>Hubungi Saya</h3>
                <p>Punya proyek menarik atau ingin berkolaborasi? Saya siap mendengarkan ide Anda dan membantu mewujudkannya menjadi kenyataan digital yang memukau.</p>
                <div class="contact-details">
                    <a href="mailto:adedwiprayoga01@email.com" class="contact-item" title="Kirim Email">
                        <div class="contact-icon">📧</div>
                        <div class="contact-text">
                            <strong>Email</strong>
                            <span style="color: var(--text-gray);">adedwiprayoga01@email.com</span>
                        </div>
                    </a>
                    <a href="https://wa.me/6283173845273?text=Halo%20Ade,%20saya%20tertarik%20dengan%20portfolio%20Anda!" class="contact-item" target="_blank" title="Chat WhatsApp">
                        <div class="contact-icon">📱</div>
                        <div class="contact-text">
                            <strong>Phone / WhatsApp</strong>
                            <span style="color: var(--text-gray);">+62 831-7384-5273</span>
                        </div>
                    </a>
                    <a href="https://www.google.com/maps/search/?api=1&query=-2.984287, 104.727474" class="contact-item" target="_blank" title="Lihat di Google Maps">
                        <div class="contact-icon">📍</div>
                        <div class="contact-text">
                            <strong>Location</strong>
                            <span style="color: var(--text-gray);">Palembang, Indonesia</span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="contact-form">
                <form id="contactForm">
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" name="name" id="senderName" required>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" id="senderEmail" required>
                    </div>
                    <div class="form-group">
                        <label>Pesan</label>
                        <textarea name="message" id="senderMessage" required></textarea>
                    </div>
                    <div style="display: flex; gap: 10px; flex-wrap: wrap;">
                        <button type="submit" class="btn btn-primary" style="flex: 1; min-width: 200px;">
                            📧 Kirim via Email
                        </button>
                        <button type="button" id="sendWhatsApp" class="btn btn-secondary" style="flex: 1; min-width: 200px; background: #25D366; border-color: #25D366; color: white;">
                            💬 Kirim via WhatsApp
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="footer-content">
            <p>&copy; 2026 Ade. All rights reserved.</p>
            <p style="font-size: 14px;">Designed & Developed with 💚</p>
        </div>
    </footer>

    <script>
        // Animated Background Particles
        function createParticles() {
            const bgAnimation = document.getElementById('bgAnimation');
            for (let i = 0; i < 20; i++) {
                const particle = document.createElement('div');
                particle.className = 'particle';
                particle.style.width = Math.random() * 5 + 2 + 'px';
                particle.style.height = particle.style.width;
                particle.style.left = Math.random() * 100 + '%';
                particle.style.top = Math.random() * 100 + '%';
                particle.style.animationDelay = Math.random() * 20 + 's';
                particle.style.animationDuration = (Math.random() * 10 + 15) + 's';
                bgAnimation.appendChild(particle);
            }
        }
        createParticles();

        // Navbar Scroll Effect
        const navbar = document.getElementById('navbar');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });

        // Smooth Scroll
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                    // Close mobile menu after clicking
                    const navLinks = document.getElementById('navLinks');
                    const menuToggle = document.getElementById('menuToggle');
                    navLinks.classList.remove('active');
                    menuToggle.classList.remove('active');
                }
            });
        });

        // Mobile Menu Toggle
        const menuToggle = document.getElementById('menuToggle');
        const navLinks = document.getElementById('navLinks');

        menuToggle.addEventListener('click', () => {
            menuToggle.classList.toggle('active');
            navLinks.classList.toggle('active');
        });

        // Close menu when clicking outside
        document.addEventListener('click', (e) => {
            if (!e.target.closest('.nav-container')) {
                navLinks.classList.remove('active');
                menuToggle.classList.remove('active');
            }
        });

        // Portfolio Filter
        const filterBtns = document.querySelectorAll('.filter-btn');
        const portfolioItems = document.querySelectorAll('.portfolio-item');

        filterBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                // Remove active class from all buttons
                filterBtns.forEach(b => b.classList.remove('active'));
                btn.classList.add('active');

                const filter = btn.getAttribute('data-filter');

                portfolioItems.forEach(item => {
                    if (filter === 'all' || item.getAttribute('data-category') === filter) {
                        item.style.display = 'block';
                        item.style.animation = 'fadeInUp 0.5s';
                    } else {
                        item.style.display = 'none';
                    }
                });
            });
        });

        // Portfolio Modal System
        const portfolioData = {
            1: {
                title: "Portal Berita Kampus",
                category: "Web Development",
                description: "Portal berita digital untuk publikasi informasi dan kegiatan Pers Mahasiswa Politeknik Negeri Sriwijaya. Dikembangkan dengan desain responsif, navigasi sederhana, dan performa yang optimal.",
                image: "Images/porto01.png",
                tech: ["HTML5", "CSS3", "JavaScript", "PHP", "MySQL", "Bootstrap"],
                liveLink: "",
                githubLink: ""
            },
            2: {
                title: "Mobile App Design",
                category: "UI/UX Design",
                description: "Desain aplikasi mobile plant health care dengan desain UI/UX modern. Fitur identifikasi tanaman, informasi perawatan, dan antarmuka yang intuitif serta user-friendly.",
                image: "Images/porto02.png",
                tech: ["Figma", "Prototyping", "User Research", "Wireframing"],
                liveLink: "https://www.figma.com/proto/GhVGl4OdT5mQLM7quVMudq/Aplikasi-Deteksi?node-id=2-2196&t=2H8hnA0Nz4Jjtj5h-1",
                githubLink: "#"
            },
            3: {
                title: "Apparel Design",
                category: "Graphic Design",
                description: "Desain apparel organisasi dengan identitas visual yang konsisten. Mengutamakan estetika, fungsi, dan penerapan brand pada media pakaian.",
                image: "Images/porto04.jpg",
                tech: ["Corel Draw", "Apparel Design"],
                liveLink: "#",
                githubLink: "#"
            },
            4: {
                title: "Photography",
                category: "Street Photography",
                description: "Fotografi street yang menangkap momen autentik kehidupan sehari-hari. Fokus pada cerita visual, emosi, dan dinamika ruang publik.",
                image: "Images/porto05.png",
                tech: ["Sony A7", "Sony A6000", "Canon 80D", "Adobe Lightroom", "Adobe Photoshop"],
                liveLink: "#",
                githubLink: "#"
            },
            5: {
                title: "Website Product Catalog",
                category: "Web Development",
                description: "Website katalog produk dengan tampilan modern dan navigasi intuitif. Dirancang untuk menampilkan layanan dan paket secara informatif.",
                image: "Images/porto06.png",
                tech: ["PHP", "JavaScript", "CSS3"],
                liveLink: "",
                githubLink: ""
            },
            6: {
                title: "Social Media Content",
                category: "Graphic Design",
                description: "Desain poster untuk kebutuhan promosi dan campaign brand. Mengutamakan visual yang eye-catching dan pesan yang jelas untuk meningkatkan daya tarik produk dan efektivitas komunikasi visual.",
                image: "Images/porto07.png",
                tech: ["Canva", "Adobe Photoshop", "Corel Draw", "Content Strategy"],
                liveLink: "",
                githubLink: "#"
            },
              7: {
                title: "Company Profile Video",
                category: "Branding Video",
                description: "Menghidupkan identitas brand melalui visual yang bercerita. Dari proses kreatif hingga post-processing, project ini bertujuan untuk membangun koneksi emosional antara brand kopi dengan audiensnya",
                image: "Images/porto08.png",
                tech: ["Sony A7", "Sony A6000", "Adobe Premiere Pro"],
                liveLink: "#",
                githubLink: "#"
            },
              8: {
                title: "Majalah POV",
                category: "Arsitectual Photography",
                description: "Majalah POV adalah proyek dokumentasi arsitektur dan budaya yang dikemas dalam bentuk editorial. Dari megahnya Jembatan Ampera hingga detail Museum Tekstil, setiap halaman dirancang untuk membawa pembaca menelusuri sejarah dan estetika ruang publik.",
                image: "Images/porto11.png",
                tech: ["Sony A7", "Sony A6000", "Canon 80D", "Adobe Lightroom", "Adobe Photoshop"],
                liveLink: "#",
                githubLink: "#"
             },
              9: {
                title: "Website Topup Games",
                category: "Web Development",
                description: "Web Development untuk platform layanan top up game. Desain modern, navigasi intuitif, dan sistem yang dioptimalkan untuk kecepatan transaksi. Solusi digital untuk kebutuhan komunitas gaming masa kini.",
                image: "Images/porto12.png",
                tech: ["PHP", "CSS", "JS", "SQL", "Next.js"],
                liveLink: "#",
                githubLink: "#"
            }
        };

        function openModal(projectId) {
            const project = portfolioData[projectId];
            const modal = document.getElementById('portfolioModal');
            
            // Populate modal with project data
            document.getElementById('modalTitle').textContent = project.title;
            document.getElementById('modalCategory').textContent = project.category;
            document.getElementById('modalDescription').textContent = project.description;
            document.getElementById('modalImage').src = project.image;
            
            // Tech tags
            const techContainer = document.getElementById('modalTech');
            techContainer.innerHTML = '';
            project.tech.forEach(tech => {
                const tag = document.createElement('span');
                tag.className = 'tech-tag';
                tag.textContent = tech;
                techContainer.appendChild(tag);
            });
            
            // Links
            document.getElementById('modalLiveLink').href = project.liveLink;
            document.getElementById('modalGithubLink').href = project.githubLink;
            
            // Show modal
            modal.classList.add('active');
            document.body.style.overflow = 'hidden'; // Prevent scroll
        }

        function closeModal() {
            const modal = document.getElementById('portfolioModal');
            modal.classList.remove('active');
            document.body.style.overflow = 'auto'; // Enable scroll
        }

        // Close modal when clicking outside
        document.getElementById('portfolioModal').addEventListener('click', function(e) {
            if (e.target === this) {
                closeModal();
            }
        });

        // Close modal with ESC key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                closeModal();
            }
        });

        // Scroll Animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -100px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.animation = 'fadeInUp 1s';
                }
            });
        }, observerOptions);

        document.querySelectorAll('.skill-card, .portfolio-item, .contact-item').forEach(el => {
            observer.observe(el);
        });

        // Form Submission - Email
        document.getElementById('contactForm').addEventListener('submit', (e) => {
            e.preventDefault();
            
            const name = document.getElementById('senderName').value;
            const email = document.getElementById('senderEmail').value;
            const message = document.getElementById('senderMessage').value;
            
            // Email settings - GANTI dengan email Anda
            const toEmail = 'adedwiprayoga01@email.com';
            const subject = `Pesan dari ${name} - Portfolio Website`;
            const body = `Nama: ${name}%0D%0AEmail: ${email}%0D%0A%0D%0APesan:%0D%0A${message}`;
            
            // Open email client
            window.location.href = `mailto:${toEmail}?subject=${encodeURIComponent(subject)}&body=${body}`;
            
            // Show success message
            alert('Email client Anda akan terbuka. Silakan kirim email dari aplikasi email Anda.');
            
            // Reset form
            e.target.reset();
        });

        // Form Submission - WhatsApp
        document.getElementById('sendWhatsApp').addEventListener('click', () => {
            const name = document.getElementById('senderName').value;
            const email = document.getElementById('senderEmail').value;
            const message = document.getElementById('senderMessage').value;
            
            // Validation
            if (!name || !email || !message) {
                alert('Mohon lengkapi semua field terlebih dahulu!');
                return;
            }
            
            // WhatsApp number - GANTI dengan nomor WhatsApp Anda (format: 62xxx tanpa +)
            const waNumber = '6283173845273';
            const waMessage = `*Halo!* 👋%0A%0A*Nama:* ${name}%0A*Email:* ${email}%0A%0A*Pesan:*%0A${message}`;
            
            // Open WhatsApp
            window.open(`https://wa.me/${waNumber}?text=${waMessage}`, '_blank');
            
            // Reset form
            document.getElementById('contactForm').reset();
        });

        // Parallax Effect on Scroll (Desktop Only)
        if (window.innerWidth > 768) {
            window.addEventListener('scroll', () => {
                const scrolled = window.pageYOffset;
                const parallax = document.querySelector('.hero-content');
                if (parallax) {
                    parallax.style.transform = `translateY(${scrolled * 0.3}px)`;
                }
            });
        }

        // Cursor Trail Effect (Desktop Only)
        if (window.innerWidth > 768) {
            document.addEventListener('mousemove', (e) => {
                const cursor = document.createElement('div');
                cursor.style.position = 'fixed';
                cursor.style.width = '5px';
                cursor.style.height = '5px';
                cursor.style.borderRadius = '50%';
                cursor.style.background = 'rgba(0, 255, 136, 0.5)';
                cursor.style.left = e.clientX + 'px';
                cursor.style.top = e.clientY + 'px';
                cursor.style.pointerEvents = 'none';
                cursor.style.zIndex = '9999';
                document.body.appendChild(cursor);
                
                setTimeout(() => {
                    cursor.remove();
                }, 500);
            });
        }

        // Skill Card Interaction
        document.querySelectorAll('.skill-card').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.background = 'rgba(0, 255, 136, 0.1)';
            });
            card.addEventListener('mouseleave', function() {
                this.style.background = 'rgba(26, 26, 30, 0.6)';
            });
        });
    </script>
</body>
</html>