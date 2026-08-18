<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Study MBBS in India 2025 - Top Colleges, Fees, Cutoff, Admission Guidance</title>
    <meta name="description" content="Explore MBBS in India 2025: Government & private medical colleges, NEET counseling, fee structure, admission assistance, NRI quota, choice filling, and more.">
    <meta name="keywords" content="Study MBBS in India, MBBS Admission 2025, MBBS Fees in India, NEET UG Counseling, Medical Colleges in India, NRI Quota MBBS Admission, Top MBBS Colleges 2025, Direct MBBS Admission, Low Budget MBBS Colleges, Private Medical Colleges India, MBBS Seat Booking, Education Loan for MBBS">
    <meta name="author" content="Bano Doctor">
    <meta name="robots" content="index, follow">
    <meta name="google-site-verification" content="ZHbd25HdH7_zO1Q7mHA3V17xd1ZgrUtvEU4mJxr9494" />
    <link rel="canonical" href="{{ url()->full(); }}" />
    
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico')  }}" />
    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <link href="{{ asset('assets/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <script src="{{ asset('assets/dist/js/jquery-2.2.0.min.js') }}" type="text/javascript"></script>
    
    <!-- AOS Animation Library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <style>
    section {overflow:hidden}
        :root {
            --primary: #12436A;
            --secondary: #2B7CBD;
            --accent: #FF6B35;
            --light: #F8F9FC;
            --dark: #1A2B40;
            --gradient-primary: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            --gradient-accent: linear-gradient(135deg, var(--accent) 0%, #FF8E4F 100%);
            --shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            --shadow-hover: 0 15px 35px rgba(0, 0, 0, 0.15);
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            color: #444;
            overflow-x: hidden;
            padding-top: 60px; /* Added for fixed header */
        }
        
        .margin-50-contact 
        {margin-top:50px;}
        
            .margin-50 
        {margin-top:50px;}
        
        
        h1, h2, h3, h4, h5, h6 {
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
            color: var(--dark);
        }
        
        
        a {
    color: rgb(224 227 232);
    text-decoration: none;
}
        
        /* Fixed Header */
        .top-header {
            background: var(--gradient-primary);
            padding: 12px 0;
            color: white;
            font-size: 14px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1030;
        }
        
        .top-header-box {
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .top-header a {
            color: white;
            text-decoration: none;
            transition: all 0.3s ease;
        }
        
        .top-header a:hover {
            color: rgba(255, 255, 255, 0.8);
        }
        
        .social-media-links a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 32px;
            height: 32px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
            margin: 0 3px;
            transition: all 0.3s ease;
        }
        
        .social-media-links a:hover {
            background: rgba(255, 255, 255, 0.2);
            transform: translateY(-2px);
        }
        
        /* Hero Section */
        .landing-page-hero-section {
            background: var(--gradient-primary);
            padding: 60px 0 80px;
            position: relative;
            overflow: hidden;
            margin-top: -60px; /* Offset fixed header */
        }
        
        .landing-page-hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1440 320'%3E%3Cpath fill='%23ffffff' fill-opacity='0.1' d='M0,96L48,112C96,128,192,160,288,186.7C384,213,480,235,576,213.3C672,192,768,128,864,128C960,128,1056,192,1152,213.3C1248,235,1344,213,1392,202.7L1440,192L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z'%3E%3C/path%3E%3C/svg%3E");
            background-size: cover;
            background-position: bottom;
        }
        
        .hero-content {
            color: white;
            position: relative;
            z-index: 2;
        }
        
        .hero-content h1 {
            /*font-size: 3.5rem;*/
            font-weight: 800;
            color: white;
            margin-bottom: 20px;
            line-height: 1.2;
        }
        
        .hero-content p {
            font-size: 1.2rem;
            margin-bottom: 30px;
            opacity: 0.9;
        }
        
        .contact-form-container {
            background: white;
            border-radius: 15px;
            padding: 30px;
            box-shadow: var(--shadow);
            position: relative;
            z-index: 2;
        }
        
        .contact-form-container::before {
            content: '';
            position: absolute;
            top: -10px;
            right: -10px;
            width: 100px;
            height: 100px;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512'%3E%3Cpath fill='%2312436A' d='M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z'%3E%3C/path%3E%3C/svg%3E");
            background-size: contain;
            background-repeat: no-repeat;
            z-index: -1;
            opacity: 0.1;
        }
        
        .form-title {
            color: var(--primary);
            font-weight: 700;
            margin-bottom: 25px;
            text-align: center;
            position: relative;
        }
        
        .form-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
            height: 4px;
            background: var(--gradient-accent);
            border-radius: 2px;
        }
        
        .input-group {
            margin-bottom: 20px;
            position: relative;
        }
        
        .input-group-text {
            background: var(--gradient-primary);
            border: none;
            color: white;
        }
        
        .form-control {
            border: 1px solid #e2e8f0;
            padding: 12px 15px;
            border-radius: 0 5px 5px 0;
            transition: all 0.3s ease;
        }
        
        .form-control:focus {
            box-shadow: 0 0 0 3px rgba(18, 67, 106, 0.2);
            border-color: var(--primary);
        }
        
        .btn-submit {
            background: var(--gradient-accent);
            border: none;
            color: white;
            padding: 12px 30px;
            border-radius: 50px;
            font-weight: 600;
            font-size: 1.1rem;
            transition: all 0.3s ease;
            width: 100%;
            box-shadow: 0 5px 15px rgba(255, 107, 53, 0.4);
        }
        
        .btn-submit:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(255, 107, 53, 0.5);
        }
        
        /* Limited Seats Section */
        .limited-seats-section {
            background: linear-gradient(145deg, #1a2b40 0%, #12436A 100%);
            padding: 80px 0;
            color: white;
            position: relative;
            overflow: hidden;
        }
        
        .limited-seats-container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            position: relative;
            padding: 0 20px;
        }
        
        .background-elements {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: 1;
        }
        
        .floating-icon {
            position: absolute;
            opacity: 0.1;
            color: #fff;
        }
        
        .floating-icon:nth-child(1) {
            top: 10%;
            left: 5%;
            font-size: 40px;
            animation: float 15s ease-in-out infinite;
        }
        
        .floating-icon:nth-child(2) {
            top: 70%;
            left: 10%;
            font-size: 35px;
            animation: float 12s ease-in-out infinite reverse;
        }
        
        .floating-icon:nth-child(3) {
            top: 30%;
            right: 8%;
            font-size: 45px;
            animation: float 18s ease-in-out infinite;
        }
        
        .floating-icon:nth-child(4) {
            top: 75%;
            right: 5%;
            font-size: 30px;
            animation: float 14s ease-in-out infinite reverse;
        }
        
        .limited-seats-content {
            position: relative;
            z-index: 2;
            display: flex;
            flex-wrap: wrap;
            gap: 40px;
            align-items: center;
        }
        
        .limited-seats-text {
            flex: 1;
            min-width: 300px;
        }
        
        .limited-seats-visual {
            flex: 1;
            min-width: 300px;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
        }
        
        .limited-seats-heading {
            font-size: 3rem;
            margin-bottom: 20px;
            background: linear-gradient(to right, #FF9A8B, #FF6B35);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            text-shadow: 0 5px 15px rgba(255, 107, 53, 0.4);
            animation: pulse 2s infinite;
        }
        
        .limited-seats-subheading {
            font-size: 1.5rem;
            margin-bottom: 30px;
            color: #F8F9FC;
        }
        
        .urgency-text {
            display: inline-block;
            background: rgba(255, 107, 53, 0.2);
            padding: 10px 20px;
            border-radius: 50px;
            margin-bottom: 30px;
            font-weight: 600;
            backdrop-filter: blur(5px);
            border: 1px solid rgba(255, 107, 53, 0.3);
            animation: pulse 2s infinite;
        }
        
        .limited-seats-features {
            margin-bottom: 40px;
        }
        
        .limited-seats-feature {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }
        
        .limited-seats-feature-icon {
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, #FF6B35 0%, #FF9A8B 100%);
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-right: 15px;
            font-size: 20px;
            box-shadow: 0 5px 15px rgba(255, 107, 53, 0.4);
        }
        
        .limited-seats-feature-text {
            font-size: 1.1rem;
        }
        
        .limited-seats-cta {
            background: linear-gradient(135deg, #FF6B35 0%, #FF9A8B 100%);
            color: white;
            border: none;
            padding: 18px 40px;
            font-size: 1.2rem;
            font-weight: 600;
            border-radius: 50px;
            cursor: pointer;
            box-shadow: 0 10px 20px rgba(255, 107, 53, 0.4);
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .limited-seats-cta:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 25px rgba(255, 107, 53, 0.6);
        }
        
        .limited-seats-cta:active {
            transform: translateY(0);
        }
        
        .seat-visualization {
            width: 300px;
            height: 300px;
            position: relative;
            transform-style: preserve-3d;
            animation: rotate 20s infinite linear;
        }
        
        .seat {
            position: absolute;
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, #2B7CBD 0%, #12436A 100%);
            border-radius: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            font-size: 20px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
            transition: all 0.5s ease;
        }
        
        .seat.filled {
            background: linear-gradient(135deg, #FF6B35 0%, #FF9A8B 100%);
            animation: pulse-seat 2s infinite;
        }
        
        .seat:nth-child(1) { transform: rotateY(0deg) translateZ(100px); }
        .seat:nth-child(2) { transform: rotateY(60deg) translateZ(100px); }
        .seat:nth-child(3) { transform: rotateY(120deg) translateZ(100px); }
        .seat:nth-child(4) { transform: rotateY(180deg) translateZ(100px); }
        .seat:nth-child(5) { transform: rotateY(240deg) translateZ(100px); }
        .seat:nth-child(6) { transform: rotateY(300deg) translateZ(100px); }
        
        .limited-seats-countdown {
            margin-top: 40px;
            text-align: center;
            background: rgba(255, 255, 255, 0.1);
            padding: 20px;
            border-radius: 15px;
            backdrop-filter: blur(5px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .countdown-text {
            font-size: 1.2rem;
            margin-bottom: 15px;
        }
        
        .countdown-timer {
            display: flex;
            justify-content: center;
            gap: 15px;
        }
        
        .countdown-unit {
            background: rgba(255, 255, 255, 0.15);
            padding: 10px;
            border-radius: 10px;
            min-width: 70px;
            backdrop-filter: blur(5px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .countdown-value {
            font-size: 2rem;
            font-weight: 700;
            color: #FF9A8B;
        }
        
        .countdown-label {
            font-size: 0.9rem;
            text-transform: uppercase;
        }
        
        @keyframes float {
            0% { transform: translateY(0) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(10deg); }
            100% { transform: translateY(0) rotate(0deg); }
        }
        
        @keyframes pulse {
            0% { box-shadow: 0 0 0 0 rgba(255, 107, 53, 0.7); }
            70% { box-shadow: 0 0 0 15px rgba(255, 107, 53, 0); }
            100% { box-shadow: 0 0 0 0 rgba(255, 107, 53, 0); }
        }
        
        @keyframes pulse-seat {
            0% { transform: translateZ(100px) scale(1); }
            50% { transform: translateZ(100px) scale(1.1); }
            100% { transform: translateZ(100px) scale(1); }
        }
        
        @keyframes rotate {
            0% { transform: rotateY(0deg); }
            100% { transform: rotateY(360deg); }
        }
        
        /* Services Section */
        .section-title {
            text-align: center;
            margin-bottom: 50px;
            position: relative;
        }
        
        .section-title h2 {
            font-size: 2.5rem;
            margin-bottom: 15px;
        }
        
        .section-title p {
            color: #666;
            max-width: 600px;
            margin: 0 auto;
        }
        
        .title-divider {
            height: 4px;
            width: 80px;
            background: var(--gradient-accent);
            margin: 15px auto;
            border-radius: 2px;
        }
        
        .service-card {
            background: white;
            border-radius: 15px;
            padding: 30px 25px;
            text-align: center;
            box-shadow: var(--shadow);
            transition: all 0.4s ease;
            height: 100%;
            border: 1px solid rgba(0, 0, 0, 0.05);
            position: relative;
            overflow: hidden;
        }
        
        .service-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: var(--gradient-accent);
            transform: scaleX(0);
            transform-origin: left;
            transition: transform 0.4s ease;
        }
        
        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: var(--shadow-hover);
        }
        
        .service-card:hover::before {
            transform: scaleX(1);
        }
        
        .service-icon {
            width: 80px;
            height: 80px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            background: var(--light);
            border-radius: 20px;
            position: relative;
        }
        
        .service-icon img {
            width: 50px;
            height: 50px;
            object-fit: contain;
        }
        
        .service-card h3 {
            font-size: 1.3rem;
            margin-bottom: 15px;
        }
        
        .service-card p {
            color: #666;
            font-size: 0.95rem;
        }
        
        /* College Carousel */
        .college-carousel {
            padding: 20px 0;
            position: relative;
            overflow: hidden;
        }
        
        .college-track {
            display: flex;
            animation: collegeSlide 30s linear infinite;
            width: calc(250px * 12); /* Double the items for seamless loop */
        }
        
        .college-item {
            background: white;
            border-radius: 12px;
            padding: 15px;
            margin: 10px;
            box-shadow: var(--shadow);
            display: flex;
            align-items: center;
            justify-content: center;
            height: 120px;
            transition: all 0.3s ease;
            border: 1px solid #eee;
            flex: 0 0 200px;
        }
        
        .college-item:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-hover);
        }
        
        .college-item img {
            max-height: 80px;
            width: auto;
            max-width: 100%;
            object-fit: contain;
        }
        
        @keyframes collegeSlide {
            0% {
                transform: translateX(0);
            }
            100% {
                transform: translateX(calc(-200px * 6)); /* Move by half the items */
            }
        }
        
        /* Testimonial Carousel */
        .testimonial-carousel {
            position: relative;
            padding: 20px 0;
            overflow: hidden;
        }
        
        .testimonial-track {
            display: flex;
            animation: testimonialSlide 40s linear infinite;
            width: calc(350px * 6); /* Double the items for seamless loop */
        }
        
        .testimonial-card {
            background: white;
            border-radius: 15px;
            padding: 30px;
            box-shadow: var(--shadow);
            margin: 15px;
            position: relative;
            flex: 0 0 320px;
            height: auto;
        }
        
        .testimonial-card::before {
            content: '"';
            position: absolute;
            top: 20px;
            left: 20px;
            font-size: 4rem;
            color: var(--primary);
            opacity: 0.1;
            font-family: Georgia, serif;
        }
        
        .testimonial-text {
            position: relative;
            z-index: 2;
            margin-bottom: 20px;
            font-style: italic;
        }
        
        .testimonial-author {
            display: flex;
            align-items: center;
        }
        
        .testimonial-author img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            object-fit: cover;
            margin-right: 15px;
        }
        
        @keyframes testimonialSlide {
            0% {
                transform: translateX(0);
            }
            100% {
                transform: translateX(calc(-350px * 3)); /* Move by half the items */
            }
        }
        
        /* Stats Section */
        .stats-section {
            background: var(--gradient-primary);
            padding: 80px 0;
            color: white;
            position: relative;
            overflow: hidden;
        }
        
        .stats-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1440 320'%3E%3Cpath fill='%23ffffff' fill-opacity='0.05' d='M0,128L48,117.3C96,107,192,85,288,112C384,139,480,213,576,218.7C672,224,768,160,864,138.7C960,117,1056,139,1152,149.3C1248,160,1344,160,1392,160L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z'%3E%3C/path%3E%3C/svg%3E");
            background-size: cover;
            background-position: bottom;
        }
        
        .stat-item {
            text-align: center;
            position: relative;
            z-index: 2;
        }
        
        .stat-number {
            font-size: 3rem;
            font-weight: 800;
            margin-bottom: 10px;
            color: white;
        }
        
        .stat-text {
            font-size: 1.1rem;
            opacity: 0.9;
        }
        
        /* CTA Section */
        .cta-section {
            padding: 80px 0;
            background: var(--light);
            position: relative;
        }
        
        .cta-content {
            text-align: center;
            max-width: 800px;
            margin: 0 auto;
        }
        
        .cta-title {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }
        
        .cta-buttons {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-top: 30px;
            flex-wrap: wrap;
        }
        
        .btn-cta {
            padding: 15px 30px;
            border-radius: 50px;
            font-weight: 600;
            font-size: 1.1rem;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 10px;
        }
        
        .btn-cta-primary {
            background: var(--gradient-accent);
            color: white;
            box-shadow: 0 5px 15px rgba(255, 107, 53, 0.4);
        }
        
        .btn-cta-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(255, 107, 53, 0.5);
            color: white;
        }
        
        .btn-cta-secondary {
            background: white;
            color: var(--primary);
            border: 2px solid var(--primary);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        
        .btn-cta-secondary:hover {
            background: var(--primary);
            color: white;
            transform: translateY(-3px);
        }
        
        /* Footer */
        .footer {
            background: var(--dark);
            color: white;
            padding: 60px 0 30px;
        }
        
        .footer-logo {
            margin-bottom: 20px;
        }
        
        .footer-contact-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 20px;
        }
        
        .footer-contact-icon {
            margin-right: 15px;
            color: var(--accent);
            font-size: 1.2rem;
            min-width: 20px;
        }
        
        .footer-heading {
            color: white;
            margin-bottom: 20px;
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
            background: var(--accent);
        }
        
        .footer-links {
            list-style: none;
            padding: 0;
        }
        
        .footer-links li {
            margin-bottom: 10px;
        }
        
        .footer-links a {
            color: rgba(255, 255, 255, 0.7);
            text-decoration: none;
            transition: all 0.3s ease;
        }
        
        .footer-links a:hover {
            color: white;
            padding-left: 5px;
        }
        
        .footer-bottom {
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            padding-top: 20px;
            margin-top: 40px;
            text-align: center;
            color: rgba(255, 255, 255, 0.6);
            font-size: 0.9rem;
        }
        
/* Sticky CTA Buttons - Fixed for mobile */
.sticky-action-buttons {
  position: fixed;
  bottom: 0;
  left: 0;
  width: 100%;
  display: flex;
  justify-content: center;
  gap: 10px;
  z-index: 1020;
  padding: 15px;
  background: rgba(255, 255, 255, 0.95);
  box-shadow: 0 -2px 20px rgba(0, 0, 0, 0.1);
  backdrop-filter: blur(10px);
  flex-wrap: wrap; /* Ensures wrapping if needed */
}

.sticky-btn {
  padding: 12px 20px;
  border-radius: 50px;
  font-weight: 600;
  display: inline-flex;
  align-items: center;
  gap: 8px;
  animation: pulse 2s infinite;
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
  text-decoration: none;
  font-size: 14px;
  flex: 1 1 auto;
  justify-content: center;
  max-width: 150px;
}





        
        .sticky-btn-primary {
            background: var(--gradient-accent);
            color: white;
        }
        
        .sticky-btn-secondary {
            background: white;
            color: var(--primary);
            border: 1px solid var(--primary);
        }
        
        .sticky-btn-whatsapp {
            background: #25D366;
            color: white;
        }
        
        /* Responsive Styles */
        @media (max-width: 992px) {
            .hero-content h1 {
                font-size: 2.8rem;
            }
            
            .limited-seats-heading {
                font-size: 2.5rem;
            }
            
            .sticky-btn {
                padding: 10px 15px;
                font-size: 13px;
            }
        }
        
        @media (max-width: 768px) {
            .hero-content h1 {
                font-size: 2.2rem;
            }
            
            .limited-seats-content {
                flex-direction: column;
            }
            
            .limited-seats-heading {
                font-size: 2rem;
            }
            
            .limited-seats-subheading {
                font-size: 1.2rem;
            }
            
            .seat-visualization {
                width: 250px;
                height: 250px;
            }
            
            .seat {
                width: 40px;
                height: 40px;
                font-size: 16px;
            }
            
            .seat:nth-child(1) { transform: rotateY(0deg) translateZ(80px); }
            .seat:nth-child(2) { transform: rotateY(60deg) translateZ(80px); }
            .seat:nth-child(3) { transform: rotateY(120deg) translateZ(80px); }
            .seat:nth-child(4) { transform: rotateY(180deg) translateZ(80px); }
            .seat:nth-child(5) { transform: rotateY(240deg) translateZ(80px); }
            .seat:nth-child(6) { transform: rotateY(300deg) translateZ(80px); }
            
            .top-header-box {
                justify-content: flex-start;
                margin-bottom: 10px;
            }
            
            .sticky-action-buttons {
                flex-direction: row;
                padding: 10px;
            }
            
            .sticky-btn {
                padding: 8px 12px;
                font-size: 12px;
                max-width: none;
            }
            
            .cta-buttons {
                flex-direction: column;
                align-items: center;
            }
            
            .college-item {
                flex: 0 0 180px;
            }
            
            .testimonial-card {
                flex: 0 0 280px;
            }
        }
        
        @media (max-width: 576px) {
            body {
                padding-top: 110px; /* More padding for fixed header on mobile */
            }
            
            .top-header {
                padding: 8px 0;
            }
            
            .hero-content h1 {
                font-size: 1.8rem;
            }
            
            .section-title h2 {
                font-size: 2rem;
            }
            
            .contact-form-container {
                padding: 20px;
            }
            
            .stat-number {
                font-size: 2.5rem;
            }
            
            .limited-seats-heading {
                font-size: 1.8rem;
            }
            
            .college-item {
                flex: 0 0 150px;
                height: 100px;
            }
            
            .college-item img {
                max-height: 60px;
            }
            
            .testimonial-card {
                flex: 0 0 250px;
                padding: 20px;
            }
            
            .sticky-action-buttons {
                flex-wrap: wrap;
            }
            
           
        }
        
        



/* 📱 Force buttons to stack one per line on small screens */
@media (max-width: 480px) {
  .sticky-action-buttons {
    flex-direction: column;   /* Arrange vertically */
    align-items: stretch;     /* Stretch buttons to container width */
    justify-content: flex-start;
    gap: 10px;                /* Space between buttons */
  }


.margin-50-contact{
    margin-top: 0px;
}
  .sticky-btn {
    width: 100%;              /* Full-width buttons */
    max-width: none;          /* Remove width restriction */
    box-sizing: border-box;   /* Include padding in width */
    overflow: hidden;
  }
}

        
    .top-header-box {
  display: flex;
  align-items: center;   /* Vertically center */
  justify-content: center; /* Horizontally center */
  text-align: center;     /* Center text if it wraps */
}

.top-header-box a {
  display: inline-flex;
  align-items: center;
  gap: 6px;               /* Space between icon and text */
  text-decoration: none;
}
    /* Extra small devices */
        /* 📱 Hide on small screens */
@media (max-width: 768px) {
  .hide-mobile {
    display: none !important;
  }
}

    </style>
    
        
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-NZKCRQHHJ0"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-NZKCRQHHJ0');
</script>
    
    
    
    <!-- Event snippet for website conversion page -->
<script>
  gtag('event', 'conversion', {
      'send_to': 'AW-17403277497/u7VqCP3X1PwaELnhw-pA',
      'value': 0.0,
      'currency': 'INR'
  });
</script>


</head>

<body>
    <!-- Top Header - Now Fixed -->
    <div class="top-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-3 col-sm-4 top-header-box">
                    <a href="{{url('/')}}">
                        <img src="{{ asset('Bano-Doctor-Logo.png')}}" alt="Bano Doctor - Top Medical Consultant" style="height:60px;">
                    </a>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-4 top-header-box hide-mobile">
                    <a href="tel: +91-7880109834"><i class="fas fa-phone me-2"></i>+91-7880109834</a>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-4 top-header-box hide-mobile" >
                    <a href="mailto:info@banodoctor.com"><i class="fas fa-envelope me-2"></i> info@banodoctor.com</a>
                </div>
                <div class="col-lg-3 col-md-3 d-md-flex d-none top-header-box hide-mobile">
                    <i class="fas fa-map-marker-alt me-2"></i> Indore, Madhya Pradesh
                </div>
            </div>
        </div>
    </div>

    <!-- Hero Section -->
    <section class="landing-page-hero-section">
        <div id="showMessage" style="position:absolute;top:0;right:0;margin-top:80px;z-index:1000;display:none;">
            @if(session()->has('success'))
                <div class="alert alert-success text-center">{!! session()->get('success') !!} </div>
            @endif
        </div>
        <div class="container">
            <div class="row align-items-center">
                 <div class="col-lg-6">
                    <div class="contact-form-container margin-50-contact" data-aos="fade-left">
                        <h3 class="form-title">Get Free Counseling </h3>
                        <form method="post" action="{{ route('contact-us')}}">
                            @csrf
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                                <input name="name" class="form-control" placeholder="Your Full Name" required>
                            </div>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-file-medical"></i></span>
                                <input type="number" name="neet_score" class="form-control" placeholder="NEET Score" required>
                            </div>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                <input name="phone" class="form-control" placeholder="Mobile Number" required>
                            </div>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-graduation-cap"></i></span>
                                <select name="course" class="form-control" required>
                                   
                                    <option selected>MBBS</option>
                                </select>
                            </div>
                           
                                <input type="hidden" name="message" class="form-control" rows="3" placeholder="Your Questions or Message" value="from google ad submitted for Counseling">
                            
                            <button type="submit" class="btn btn-submit">
                                <i class="fas fa-paper-plane me-2"></i> Send Now
                            </button>
                        </form>
                    </div>
                </div>
                
                <div class="col-lg-6 mb-5 mb-lg-0 ">
                    <div class="hero-content margin-50">
                        <h1 data-aos="fade-up">Begin Your Medical Journey with India's Top MBBS Programs</h1>
                        <p data-aos="fade-up" data-aos-delay="100">Secure your seat in premier medical colleges with 100% genuine admission guidance</p>
                        
                        <div class="row mt-4" data-aos="fade-up" data-aos-delay="300">
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <div class="bg-white rounded-circle p-2 me-3">
                                        <i class="fas fa-check text-primary"></i>
                                    </div>
                                    <span>NEET Guidance</span>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <div class="bg-white rounded-circle p-2 me-3">
                                        <i class="fas fa-check text-primary"></i>
                                    </div>
                                    <span>Admission Support</span>
                                </div>
                            </div>
                            <div class="col-6 mt-3">
                                <div class="d-flex align-items-center">
                                    <div class="bg-white rounded-circle p-2 me-3">
                                        <i class="fas fa-check text-primary"></i>
                                    </div>
                                    <span>100% Legal Process</span>
                                </div>
                            </div>
                            <div class="col-6 mt-3">
                                <div class="d-flex align-items-center">
                                    <div class="bg-white rounded-circle p-2 me-3">
                                        <i class="fas fa-check text-primary"></i>
                                    </div>
                                    <span>NRI Quota Assistance</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
    </section>

    <!-- Limited Seats Section -->
  
    <section class="limited-seats-section">
        <div class="limited-seats-container">
            <div class="background-elements">
                <i class="floating-icon fas fa-user-graduate"></i>
                <i class="floating-icon fas fa-stethoscope"></i>
                <i class="floating-icon fas fa-book-medical"></i>
                <i class="floating-icon fas fa-hospital"></i>
            </div>
            
            <div class="limited-seats-content">
                <div class="limited-seats-text">
                    <h2 class="limited-seats-heading">Limited Seats Available</h2>
                    <p class="limited-seats-subheading">Secure your medical education future before it's too late</p>
                    
                    <div class="limited-seats-features">
                        <div class="limited-seats-feature">
                            <div class="limited-seats-feature-icon">
                                <i class="fas fa-clock"></i>
                            </div>
                            <div class="limited-seats-feature-text">Early applicants get priority counseling</div>
                        </div>
                        
                        <div class="limited-seats-feature">
                            <div class="limited-seats-feature-icon">
                                <i class="fas fa-percentage"></i>
                            </div>
                            <div class="limited-seats-feature-text">Higher chance of seat allocation for early applicants</div>
                        </div>
                        
                        <div class="limited-seats-feature">
                            <div class="limited-seats-feature-icon">
                                <i class="fas fa-gift"></i>
                            </div>
                            <div class="limited-seats-feature-text">Free Counselling</div>
                        </div>
                    </div>
                </div>
                
                <div class="limited-seats-visual hide-mobile">
                    <div class="seat-visualization">
                        <div class="seat filled"><i class="fas fa-user"></i></div>
                        <div class="seat filled"><i class="fas fa-user"></i></div>
                        <div class="seat filled"><i class="fas fa-user"></i></div>
                        <div class="seat filled"><i class="fas fa-user"></i></div>
                        <div class="seat"><i class="fas fa-question"></i></div>
                        <div class="seat"><i class="fas fa-question"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats-section">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-3 col-6 mb-4 mb-md-0">
                    <div class="stat-item" data-aos="fade-up">
                        <div class="stat-number" data-count="100000">0</div>
                        <div class="stat-text">Students Guided</div>
                    </div>
                </div>
                <div class="col-md-3 col-6 mb-4 mb-md-0">
                    <div class="stat-item" data-aos="fade-up" data-aos-delay="100">
                        <div class="stat-number" data-count="500">0</div>
                        <div class="stat-text">Medical Colleges</div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="stat-item" data-aos="fade-up" data-aos-delay="200">
                        <div class="stat-number" data-count="10000">0</div>
                        <div class="stat-text">Admission Success</div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="stat-item" data-aos="fade-up" data-aos-delay="300">
                        <div class="stat-number" data-count="15">0</div>
                        <div class="stat-text">Years Experience</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="py-5">
        <div class="container py-5">
            <div class="section-title" data-aos="fade-up">
                <h2>Our Comprehensive Services</h2>
                <div class="title-divider"></div>
                <p>End-to-end support for your medical education journey</p>
            </div>
            
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-card">
                        <div class="service-icon">
                            <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='%2312436A'%3E%3Cpath d='M21,6H17V4A2,2 0 0,0 15,2H9A2,2 0 0,0 7,4V6H3A2,2 0 0,0 1,8V20A2,2 0 0,0 3,22H21A2,2 0 0,0 23,20V8A2,2 0 0,0 21,6M9,4H15V6H9V4M21,20H3V8H21V20M15,10V12H17V10H15M11,10H13V16H11V10M7,10V14H9V10H7Z'/%3E%3C/svg%3E" alt="Application Assistance">
                        </div>
                        <h3>Application Assistance</h3>
                        <p>Complete guidance through the complex application process for various medical colleges</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-card">
                        <div class="service-icon">
                            <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='%2312436A'%3E%3Cpath d='M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2M7,10L12,15L17,10H7Z'/%3E%3C/svg%3E" alt="Choice Filling">
                        </div>
                        <h3>Choice Filling</h3>
                        <p>Strategic selection of colleges based on your NEET score, preferences, and budget</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-card">
                        <div class="service-icon">
                            <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='%2312436A'%3E%3Cpath d='M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2M16.2,16.2L11,13V7H12.5V12.2L17,14.9L16.2,16.2Z'/%3E%3C/svg%3E" alt="Real-time Updates">
                        </div>
                        <h3>Real-time Updates</h3>
                        <p>Instant notifications about counseling schedules, cutoff changes, and seat availability</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-card">
                        <div class="service-icon">
                            <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='%2312436A'%3E%3Cpath d='M12,1L3,5V11C3,16.55 6.84,21.74 12,23C17.16,21.74 21,16.55 21,11V5L12,1M12,11H15V13H12V16H10V13H7V11H10V8H12V11Z'/%3E%3C/svg%3E" alt="NRI Quota Assistance">
                        </div>
                        <h3>NRI Quota Assistance</h3>
                        <p>Specialized guidance for NRI students to secure seats through management quota</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Colleges Section -->
    <section class="py-5 bg-light">
        <div class="container py-5">
            <div class="section-title" data-aos="fade-up">
                <h2>Partner Medical Colleges</h2>
                <div class="title-divider"></div>
                <p>We have tie-ups with top medical institutions across India</p>
            </div>
            
            <div class="college-carousel">
                <div class="college-track">
                    <!-- Duplicate the college items for seamless looping -->
                    <div class="college-item">
                        <img src="{{ asset('collegeLogo/1435141816.webp') }}" alt="Medical College">
                    </div>
                    <div class="college-item">
                        <img src="{{ asset('collegeLogo/ACS Medical college ,Chennai.jpg') }}" alt="Medical College">
                    </div>
                    <div class="college-item">
                        <img src="{{ asset('collegeLogo/Amrita Institute of Medical Science, Kochi.png') }}" alt="Medical College">
                    </div>
                    <div class="college-item">
                        <img src="{{ asset('collegeLogo/B.L.D.E University, Bijapur.webp') }}" alt="Medical College">
                    </div>
                    <div class="college-item">
                        <img src="{{ asset('collegeLogo/Bhaarat Medical College Chennai.jpeg') }}" alt="Medical College">
                    </div>
                    <div class="college-item">
                        <img src="{{ asset('collegeLogo/Bharati Vidyapeeth Dee. Univ. Med. College, Pune.png') }}" alt="Medical College">
                    </div>
                    <!-- Duplicate the same items for seamless looping -->
                    <div class="college-item">
                        <img src="{{ asset('collegeLogo/1435141816.webp') }}" alt="Medical College">
                    </div>
                    <div class="college-item">
                        <img src="{{ asset('collegeLogo/ACS Medical college ,Chennai.jpg') }}" alt="Medical College">
                    </div>
                    <div class="college-item">
                        <img src="{{ asset('collegeLogo/Amrita Institute of Medical Science, Kochi.png') }}" alt="Medical College">
                    </div>
                    <div class="college-item">
                        <img src="{{ asset('collegeLogo/B.L.D.E University, Bijapur.webp') }}" alt="Medical College">
                    </div>
                    <div class="college-item">
                        <img src="{{ asset('collegeLogo/Bhaarat Medical College Chennai.jpeg') }}" alt="Medical College">
                    </div>
                    <div class="college-item">
                        <img src="{{ asset('collegeLogo/Bharati Vidyapeeth Dee. Univ. Med. College, Pune.png') }}" alt="Medical College">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-5">
        <div class="container py-5">
            <div class="section-title" data-aos="fade-up">
                <h2>Success Stories</h2>
                <div class="title-divider"></div>
                <p>Hear from students who achieved their medical dreams with us</p>
            </div>
            
            <div class="testimonial-carousel">
                <div class="testimonial-track">
                    <!-- Testimonial items -->
                    <div class="testimonial-card">
                        <div class="testimonial-text">
                            "Bano Doctor helped me secure a seat in my dream college despite having a moderate NEET score. Their strategic choice filling made all the difference!"
                        </div>
                        <div class="testimonial-author">
                            <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='%23cccccc'%3E%3Cpath d='M12,19.2C9.5,19.2 7.29,17.92 6,16C6.03,14 10,12.9 12,12.9C14,12.9 17.97,14 18,16C16.71,17.92 14.5,19.2 12,19.2M12,5A3,3 0 0,1 15,8A3,3 0 0,1 12,11A3,3 0 0,1 9,8A3,3 0 0,1 12,5M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12C22,6.47 17.5,2 12,2Z'/%3E%3C/svg%3E" alt="Student">
                            <div>
                                <h5 class="mb-0">Rahul Sharma</h5>
                                <small>MBBS Student, Mumbai</small>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-card">
                        <div class="testimonial-text">
                            "The NRI quota admission process was complicated, but Bano Doctor simplified everything. They handled all documentation and secured my seat hassle-free."
                        </div>
                        <div class="testimonial-author">
                            <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='%23cccccc'%3E%3Cpath d='M12,19.2C9.5,19.2 7.29,17.92 6,16C6.03,14 10,12.9 12,12.9C14,12.9 17.97,14 18,16C16.71,17.92 14.5,19.2 12,19.2M12,5A3,3 0 0,1 15,8A3,3 0 0,1 12,11A3,3 0 0,1 9,8A3,3 0 0,1 12,5M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12C22,6.47 17.5,2 12,2Z'/%3E%3C/svg%3E" alt="Student">
                            <div>
                                <h5 class="mb-0">Priya Patel</h5>
                                <small>MBBS Student, Delhi</small>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-card">
                        <div class="testimonial-text">
                            "I was confused about which college to choose based on my budget. Bano Doctor provided multiple options with complete fee transparency."
                        </div>
                        <div class="testimonial-author">
                            <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='%23cccccc'%3E%3Cpath d='M12,19.2C9.5,19.2 7.29,17.92 6,16C6.03,14 10,12.9 12,12.9C14,12.9 17.97,14 18,16C16.71,17.92 14.5,19.2 12,19.2M12,5A3,3 0 0,1 15,8A3,3 0 0,1 12,11A3,3 0 0,1 9,8A3,3 0 0,1 12,5M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12C22,6.47 17.5,2 12,2Z'/%3E%3C/svg%3E" alt="Student">
                            <div>
                                <h5 class="mb-0">Amit Verma</h5>
                                <small>MBBS Student, Bangalore</small>
                            </div>
                        </div>
                    </div>
                    <!-- Duplicate the same testimonials for seamless looping -->
                    <div class="testimonial-card">
                        <div class="testimonial-text">
                            "Bano Doctor helped me secure a seat in my dream college despite having a moderate NEET score. Their strategic choice filling made all the difference!"
                        </div>
                        <div class="testimonial-author">
                            <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='%23cccccc'%3E%3Cpath d='M12,19.2C9.5,19.2 7.29,17.92 6,16C6.03,14 10,12.9 12,12.9C14,12.9 17.97,14 18,16C16.71,17.92 14.5,19.2 12,19.2M12,5A3,3 0 0,1 15,8A3,3 0 0,1 12,11A3,3 0 0,1 9,8A3,3 0 0,1 12,5M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12C22,6.47 17.5,2 12,2Z'/%3E%3C/svg%3E" alt="Student">
                            <div>
                                <h5 class="mb-0">Rahul Sharma</h5>
                                <small>MBBS Student, Mumbai</small>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-card">
                        <div class="testimonial-text">
                            "The NRI quota admission process was complicated, but Bano Doctor simplified everything. They handled all documentation and secured my seat hassle-free."
                        </div>
                        <div class="testimonial-author">
                            <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='%23cccccc'%3E%3Cpath d='M12,19.2C9.5,19.2 7.29,17.92 6,16C6.03,14 10,12.9 12,12.9C14,12.9 17.97,14 18,16C16.71,17.92 14.5,19.2 12,19.2M12,5A3,3 0 0,1 15,8A3,3 0 0,1 12,11A3,3 0 0,1 9,8A3,3 0 0,1 12,5M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12C22,6.47 17.5,2 12,2Z'/%3E%3C/svg%3E" alt="Student">
                            <div>
                                <h5 class="mb-0">Priya Patel</h5>
                                <small>MBBS Student, Delhi</small>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-card">
                        <div class="testimonial-text">
                            "I was confused about which college to choose based on my budget. Bano Doctor provided multiple options with complete fee transparency."
                        </div>
                        <div class="testimonial-author">
                            <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='%23cccccc'%3E%3Cpath d='M12,19.2C9.5,19.2 7.29,17.92 6,16C6.03,14 10,12.9 12,12.9C14,12.9 17.97,14 18,16C16.71,17.92 14.5,19.2 12,19.2M12,5A3,3 0 0,1 15,8A3,3 0 0,1 12,11A3,3 极速3 0 0,1 12,5M12,2A10,10 0 0,极速 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12C22,6.47 17.5,2 12,2Z'/%3E%3C/svg%3E" alt="Student">
                            <div>
                                <h5 class="mb-0">Amit Verma</h5>
                                <small>MBBS Student, Bangalore</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div class="row">
                  <div class="col-lg-6">
                    <div class="contact-form-container" data-aos="fade-left">
                        <h3 class="form-title">Get Free Counseling</h3>
                        <form method="post" action="{{ route('contact-us')}}">
                            @csrf
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                                <input name="name" class="form-control" placeholder="Your Full Name" required>
                            </div>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-file-medical"></i></span>
                                <input type="number" name="neet_score" class="form-control" placeholder="NEET Score" required>
                            </div>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                <input name="phone" class="form-control" placeholder="Mobile Number" required>
                            </div>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-graduation-cap"></i></span>
                                <select name="course" class="form-control" required readonly="">
                                   
                                    <option selected>MBBS</option>
                                </select>
                            </div>
                            
                                <input  type="hidden" name="message" class="form-control" rows="3" placeholder="Your Questions or Message" value="from google ad submitted for Counselin">
                           
                            <button type="submit" class="btn btn-submit">
                                <i class="fas fa-paper-plane me-2"></i> Send Now
                            </button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 mt-5">
                    <div class="cta-content" data-aos="zoom-in">
                        <h2 class="cta-title">Ready to Begin Your Medical Career?</h2>
                        <p>Join thousands of successful medical students who trusted Bano Doctor for their admission journey. Our experts are ready to guide you every step of the way.</p>
                        
                        <div class="cta-buttons">
                            <a href="tel:+917880109834" class="btn btn-cta btn-cta-secondary">
                                <i class="fas fa-phone me-2"></i>+91-7880109834
                            </a>
                        </div>
                    </div>
                </div>
                
              
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="footer-logo">
                        <img src="{{ asset('Bano-Doctor-Logo.png') }}" width="150" alt="Bano Doctor">
                    </div>
                    <p class="mt-3">Your trusted partner for medical admissions in India. We provide end-to-end guidance for MBBS admissions through genuine processes.</p>
                    
                    <div class="footer-contact-item">
                        <div class="footer-contact-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div>
                            683/3, Office no - 223, Second Floor, near Medanta Road, Malviya Nagar, Indore, Madhya Pradesh 451020
                        </div>
                    </div>
                    <div class="footer-contact-item">
                        <div class="footer-contact-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div>
                            <a href="tel:+917880109834">+91-7880109834</a>
                        </div>
                    </div>
                    <div class="footer-contact-item">
                        <div class="footer-contact-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div>
                            <a href="mailto:info@banodoctor.com">info@banodoctor.com</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6 col-md-6">
                    <h4 class="footer-heading">Stay Connected</h4>
                    <p>Follow us on social media for updates on medical admissions</p>
                    
                    <div class="social-media-links">
                        <a href="https://www.facebook.com/banodoctorsofficial/"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://twitter.com/banodoctors"><i class="fab fa-twitter"></i></a>
                        <a href="https://g.co/kgs/PbJxcK"><i class="fab fa-google"></i></a>
                        <a href="https://www.youtube.com/channel/UCyygkB2BZNCx3l3YHaKxMwQ"><i class="fab fa-youtube"></i></a>
                        <a href="https://www.instagram.com/banodoctors/"><i class="fab fa-instagram"></i></a>
                    </div>
                    
                    <div class="mt-4">
                        <a href="https://wa.me/message/WGXK6LSL57FWI1" class="btn btn-success btn-sm">
                            <i class="fab fa-whatsapp me-2"></i> Chat on WhatsApp
                        </a>
                    </div>
                </div>
            </div>
            
          
        </div>
    </footer>

    <!-- Sticky Action Buttons - Fixed for mobile -->
    <div class="sticky-action-buttons">
        <a href="tel:+917880109834" class="sticky-btn sticky-btn-secondary">
            <i class="fas fa-phone me-2"></i> Call Now
        </a>
        <a href="https://wa.me/message/WGXK6LSL57FWI1" class="sticky-btn sticky-btn-whatsapp">
            <i class="fab fa-whatsapp me-2"></i> WhatsApp
        </a>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('assets/dist/js/bootstrap.bundle.min.js')}}"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        // Initialize animations
        AOS.init({
            duration: 1000,
            once: true,
            offset: 100
        });
        
        // Fixed counter animation for stats
        document.addEventListener('DOMContentLoaded', function() {
            // Counter animation for stats
            const counters = document.querySelectorAll('.stat-number');
            const speed = 200;
            
            counters.forEach(counter => {
                const target = parseInt(counter.getAttribute('data-count'));
                let count = 0;
                
                const updateCount = () => {
                    const increment = target / speed;
                    
                    if (count < target) {
                        count += increment;
                        counter.innerText = Math.ceil(count);
                        setTimeout(updateCount, 1);
                    } else {
                        counter.innerText = target;
                    }
                };
                
                // Start counting when element is in viewport
                const observer = new IntersectionObserver((entries) => {
                    if (entries[0].isIntersecting) {
                        updateCount();
                        observer.disconnect();
                    }
                });
                
                observer.observe(counter);
            });
            
            // Add interactive animation to seats
            const seats = document.querySelectorAll('.seat');
            seats.forEach(seat => {
                seat.addEventListener('mouseenter', () => {
                    if (!seat.classList.contains('filled')) {
                        seat.innerHTML = '<i class="fas fa-user-plus"></i>';
                        seat.style.background = 'linear-gradient(135deg, #25D366 0%, #3BAB5E 100%)';
                    }
                });
                
                seat.addEventListener('mouseleave', () => {
                    if (!seat.classList.contains('filled')) {
                        seat.innerHTML = '<i class="fas fa-question"></i>';
                        seat.style.background = 'linear-gradient(135deg, #2B7CBD 0%, #12436A 100%)';
                    }
                });
                
                seat.addEventListener('click', () => {
                    if (!seat.classList.contains('filled')) {
                        seat.classList.add('filled');
                        seat.innerHTML = '<i class="fas fa-user"></i>';
                        seat.style.background = 'linear-gradient(135deg, #FF6B35 0%, #FF9A8B 100%)';
                        
                        // Update the remaining seats count
                        const remainingSeats = document.querySelectorAll('.seat:not(.filled)').length;
                        document.querySelector('.urgency-text').innerHTML = 
                            `<i class="fas fa-exclamation-circle"></i> Only ${remainingSeats} seats remaining!`;
                    }
                });
            });
            
            // Pause animation on hover for college and testimonial carousels
            const collegeTrack = document.querySelector('.college-track');
            const testimonialTrack = document.querySelector('.testimonial-track');
            
            if (collegeTrack) {
                collegeTrack.addEventListener('mouseenter', () => {
                    collegeTrack.style.animationPlayState = 'paused';
                });
                
                collegeTrack.addEventListener('mouseleave', () => {
                    collegeTrack.style.animationPlayState = 'running';
                });
            }
            
            if (testimonialTrack) {
                testimonialTrack.addEventListener('mouseenter', () => {
                    testimonialTrack.style.animationPlayState = 'paused';
                });
                
                testimonialTrack.addEventListener('mouseleave', () => {
                    testimonialTrack.style.animationPlayState = 'running';
                });
            }
        });
    </script>
    
    <script>
        $("#showMessage").show();
        setTimeout(function() {
            $("#showMessage").hide();
        }, 5000);
    </script>
</body>
</html>