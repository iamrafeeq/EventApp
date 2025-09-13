
@extends('layout.app')

@section('main')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EventApp - Site Map</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        /* Updated font family and improved base styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: "Inter", -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
            background: linear-gradient(135deg, #ff0a54 0%, #ff1a5e 50%, #ff2a68 100%);
            min-height: 100vh;
            color: white;
            line-height: 1.6;
            font-weight: 400;
        }

        .container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 2rem;
        }

        /* Enhanced header with better visual hierarchy and stats */
        .header {
            text-align: center;
            margin-bottom: 4rem;
            background: rgba(255, 255, 255, 0.15);
            padding: 3rem 2rem;
            border-radius: 24px;
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.25);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            animation: fadeInUp 0.8s ease forwards;
            top: 200px;

        }

        .header-icon {
            font-size: 3rem;
            margin-bottom: 1rem;
            display: block;
        }

        .header h1 {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.2);
            letter-spacing: -0.02em;
        }

        .header p {
            font-size: 1.3rem;
            opacity: 0.9;
            margin-bottom: 2rem;
            font-weight: 300;
        }

        .stats {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 1rem;
            font-size: 1rem;
            opacity: 0.8;
        }

        .stat-item {
            font-weight: 500;
        }

        .stat-divider {
            opacity: 0.6;
        }

        .sitemap {
            display: flex;
            flex-direction: column;
            /* gap: 3rem; */
         
        }

        .level-0 {
            display: flex;
            justify-content: center;
            margin-bottom: 3rem;
            /* background-color: #7c0404; */
            margin-top: 200px;
            
        
        }

        .level-1 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            /* gap: 2.5rem; */
        }

        .section {
            display: flex;
            flex-direction: column;
            /* gap: 1.5rem; */
        }

        /* Enhanced page nodes with clickable anchor tags and better visual design */
        .page-node {
            background: white;
            border-radius: 20px;
            padding: 2rem;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
            display: flex;
            align-items: flex-start;
            /* gap: 1rem; */
            border: 1px solid rgba(255, 255, 255, 0.1);
            animation: fadeInUp 0.6s ease forwards;
            opacity: 0;
        }

        .page-node a {
            text-decoration: none;
            color: inherit;
            display: flex;
            align-items: flex-start;
            /* gap: 1rem; */
            width: 100%;
        }

        .page-node::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 5px;
            background: linear-gradient(90deg, #ff0a54, #ff2a68);
        }

        .page-node:hover {
            transform: translateY(-8px) scale(1.02);
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.15);
        }

        .node-icon {
            font-size: 1.8rem;
            flex-shrink: 0;
            margin-top: 0.2rem;
        }

        .root-node {
            background: linear-gradient(135deg, white 0%, #f8f9fa 100%);
            border: 3px solid #ff0a54;
            transform: scale(1.15);
            box-shadow: 0 15px 50px rgba(255, 10, 84, 0.2);
            animation-delay: 0.2s;
        }

        .root-node::before {
            height: 8px;
        }

        .root-node .node-icon {
            font-size: 2.2rem;
        }

        .section-header {
            background: linear-gradient(135deg, #fff 0%, #f8f9fa 100%);
            border-left: 6px solid #ff0a54;
            animation: slideInLeft 0.6s ease forwards;
            animation-delay: 0.3s;
        }

        .section-header::before {
            height: 6px;
        }

        .sub-node {
            margin-left: 2.5rem;
            position: relative;
            background: linear-gradient(135deg, #fff 0%, #fafbfc 100%);
            border-left: 3px solid rgba(255, 10, 84, 0.3);
            animation: fadeInUp 0.6s ease forwards;
        }

        .sub-node::after {
            content: "";
            position: absolute;
            left: -2.5rem;
            top: 50%;
            width: 2rem;
            height: 2px;
            background: linear-gradient(90deg, #ff0a54, rgba(255, 10, 84, 0.5));
            transform: translateY(-50%);
        }

        .sub-node::before {
            height: 4px;
        }

        .sub-node .node-icon {
            font-size: 1.4rem;
        }

        .node-content {
            color: #333;
            flex: 1;
        }

        .node-content h2 {
            font-size: 2rem;
            color: #ff0a54;
            margin-bottom: 0.8rem;
            font-weight: 700;
            letter-spacing: -0.01em;
            /* background-color: #0a37ff */
            
        }

        .node-content h3 {
            font-size: 1.5rem;
            color: #ff0a54;
            margin-bottom: 0.6rem;
            font-weight: 600;
            letter-spacing: -0.01em;
        }

        .node-content h4 {
            font-size: 1.2rem;
            color: #ff0a54;
            margin-bottom: 0.4rem;
            font-weight: 500;
            background-colo;
          
        }

        .node-description {
            font-size: 0.9rem;
            color: #666;
            margin-top: 0.5rem;
            font-weight: 400;
            line-height: 1.4;
            
        }

        .page-type {
            display: inline-block;
            background: rgba(255, 10, 84, 0.1);
            color: #ff0a54;
            padding: 0.4rem 1rem;
            border-radius: 25px;
            font-size: 0.8rem;
            font-weight: 600;
            border: 1px solid rgba(255, 10, 84, 0.2);
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .subsections {
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
            margin-top: 1.5rem;
            position: relative;
        }

        .subsections::before {
            content: "";
            position: absolute;
            left: -1.25rem;
            top: 0;
            bottom: 0;
            width: 3px;
            background: linear-gradient(to bottom, #ff0a54, rgba(255, 10, 84, 0.2));
            border-radius: 2px;
        }

        /* Enhanced footer with better stats layout and fixed contrast */
        .footer {
            margin-top: 4rem;
            background: rgba(0, 0, 0, 0.3);
            border-radius: 20px;
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.25);
            overflow: hidden;
            animation: fadeInUp 0.8s ease forwards;
            animation-delay: 0.8s;
            opacity: 0;
        }

        .footer-content {
            padding: 2.5rem;
            text-align: center;
            background: linear-gradient(135deg, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.2));
        }

        .footer-stats {
            display: flex;
            justify-content: center;
            gap: 2rem;
            margin-bottom: 2rem;
        }

        .footer-stat {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .footer .stat-number {
            font-size: 2rem;
            font-weight: 700;
            color: #ffffff;
            line-height: 1;
            text-shadow: none;
        }

        .footer .stat-label {
            font-size: 0.9rem;
            color: #ffffff;
            font-weight: 500;
            margin-top: 0.3rem;
            text-shadow: none;
        }

        .footer .footer-text {
            color: #ffffff;
            font-size: 1rem;
            font-weight: 400;
            text-shadow: none;
        }

        /* Improved responsive design */
        @media (max-width: 768px) {
            .container {
                padding: 1rem;
            }

            .header {
                padding: 2rem 1.5rem;
                margin-bottom: 3rem;
            }

            .header h1 {
                font-size: 2.5rem;
            }

            .header p {
                font-size: 1.1rem;
            }

            .stats {
                flex-direction: column;
                gap: 0.5rem;
            }

            .level-1 {
                grid-template-columns: 1fr;
                gap: 2rem;
            }

            .sub-node {
                margin-left: 1.5rem;
            }

            .sub-node::after {
                left: -1.5rem;
                width: 1.2rem;
            }

            .subsections::before {
                left: -0.75rem;
            }

            .footer-stats {
                gap: 2rem;
            }

            .page-node {
                padding: 1.5rem;
            }
        }

        /* Enhanced animations with staggered effects */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(40px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes slideInLeft {
            from {
                opacity: 0;
                transform: translateX(-30px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .sub-node:nth-child(1) {
            animation-delay: 0.4s;
        }
        .sub-node:nth-child(2) {
            animation-delay: 0.5s;
        }
        .sub-node:nth-child(3) {
            animation-delay: 0.6s;
        }
        .sub-node:nth-child(4) {
            animation-delay: 0.7s;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Enhanced header with better typography and visual elements -->
        <header class="header">
            <div class="header-icon">🗺️</div>
            <h1>EventApp Sitemap</h1>
            <p>Navigate through our comprehensive event management platform</p>
            <div class="stats">
                <span class="stat-item">15 Pages</span>
                <span class="stat-divider">•</span>
                <span class="stat-item">5 Main Sections</span>
                <span class="stat-divider">•</span>
                <span class="stat-item">Updated Sept 2025</span>
            </div>
        </header>

        <div class="sitemap">
            <!-- Improved root node with clickable anchor tag -->
            <div class="level-0">
                <div class="page-node root-node">
                    <a href="{{url('/')}}">
                        <div class="node-icon">🏠</div>
                        <div class="node-content">
                            <h2>my home </h2>
                            <span class="page-type">Landing Page</span>
                            <p class="node-description">Main entry point and platform overview</p>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Enhanced main sections with clickable anchor tags and better organization -->
            <div class="level-1">
                <div class="section">

                    
                    <div class="page-node section-header">
                        <a href="{{url('/about-us')}}">
                            <div class="node-icon">ℹ️</div>
                            <div class="node-content">
                                <h3>About</h3>
                                <span class="page-type">Information</span>
                                <p class="node-description">Company information and story</p>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="section">
                    {{-- <div class="page-node section-header">
                        <a href="{{url('')}}">
                            <div class="node-icon">🎉</div>
                            <div class="node-content">
                                <h3>Events</h3>
                                <span class="page-type">Core Feature</span>
                                <p class="node-description">Event management and ticketing</p>
                            </div>
                        </a>
                    </div> --}}


                    <div class="subsections">
                        <div class="page-node sub-node">
                            <a href="{{url('/eventlist')}}">
                                <div class="node-icon">📋</div>
                                <div class="node-content">
                                    <h4>Event List</h4>
                                    <span class="page-type">Browse</span>
                                </div>
                            </a>
                        </div>




                        <div class="page-node sub-node">
                            <a href="{{url('/singleevent')}}">
                                <div class="node-icon">🎯</div>
                                <div class="node-content">
                                    <h4>Single Event</h4>
                                    <span class="page-type">Details</span>
                                </div>
                            </a>
                        </div>


                        {{-- <div class="page-node sub-node">
                            <a href="/new-event">
                                <div class="node-icon">➕</div>
                                <div class="node-content">
                                    <h4>New Event</h4>
                                    <span class="page-type">Create</span>
                                </div>
                            </a>
                        </div> --}}


                        {{-- <div class="page-node sub-node">
                            <a href="/buyticket">
                                <div class="node-icon">🎫</div>
                                <div class="node-content">
                                    <h4>Buy Ticket</h4>
                                    <span class="page-type">Purchase</span>
                                </div>
                            </a>
                        </div> --}}


                    </div>
                </div>

                <div class="section">

{{--                     
                    <div class="page-node section-header">
                        <a href="/team">
                            <div class="node-icon">👥</div>
                            <div class="node-content">
                                <h3>Team</h3>
                                <span class="page-type">About Us</span>
                                <p class="node-description">Meet our team and memories</p>
                            </div>
                        </a>
                    </div> --}}


                    <div class="subsections">


                        <div class="page-node sub-node">
                            <a href="{{url('/ourteam')}}">
                                <div class="node-icon">🤝</div>
                                <div class="node-content">
                                    <h4>Our Team</h4>
                                    <span class="page-type">Members</span>
                                </div>
                            </a>
                        </div>

                        {{-- <div class="page-node sub-node">
                            <a href="/singleteam">
                                <div class="node-icon">👤</div>
                                <div class="node-content">
                                    <h4>Single Team</h4>
                                    <span class="page-type">Profile</span>
                                </div>
                            </a>
                        </div> --}}


                        <div class="page-node sub-node">
                            <a href="{{url('/memories')}}">
                                <div class="node-icon">📸</div>
                                <div class="node-content">
                                    <h4>Our Memories</h4>
                                    <span class="page-type">Gallery</span>
                                </div>
                            </a>
                        </div>


                    </div>
                </div>

                <div class="section">


                    {{-- <div class="page-node section-header">
                        <a href="/account">
                            <div class="node-icon">🔐</div>
                            <div class="node-content">
                                <h3>User Account</h3>
                                <span class="page-type">Authentication</span>
                                <p class="node-description">User registration and login</p>
                            </div>
                        </a>
                    </div> --}}


                    <div class="subsections">


                        <div class="page-node sub-node">
                            <a href="{{url('/register')}}">
                                <div class="node-icon">🔑</div>
                                <div class="node-content">
                                    <h4>Login</h4>
                                    <span class="page-type">Sign In</span>
                                </div>
                            </a>
                        </div>


                        <div class="page-node sub-node">
                            <a href="{{url('/register')}}">
                                <div class="node-icon">📝</div>
                                <div class="node-content">
                                    <h4>Register</h4>
                                    <span class="page-type">Sign Up</span>
                                </div>
                            </a>
                        </div>

{{--                         
                        <div class="page-node sub-node">
                            <a href="/forgotpassword">
                                <div class="node-icon">🔄</div>
                                <div class="node-content">
                                    <h4>Forgot Password</h4>
                                    <span class="page-type">Recovery</span>
                                </div>
                            </a>
                        </div> --}}


                    </div>
                </div>

                <div class="section">


                    {{-- <div class="page-node section-header">
                        <a href="/support">
                            <div class="node-icon">🆘</div>
                            <div class="node-content">
                                <h3>Support</h3>
                                <span class="page-type">Help</span>
                                <p class="node-description">Customer support and pricing</p>
                            </div>
                        </a>
                    </div> --}}


                    <div class="subsections">
                        <div class="page-node sub-node">
                            <a href="{{url('/contact')}}">
                                <div class="node-icon">📞</div>
                                <div class="node-content">
                                    <h4>Contact Us</h4>
                                    <span class="page-type">Get in Touch</span>
                                </div>
                            </a>
                        </div>


                        <div class="page-node sub-node">
                            <a href="{{url('/FAQS')}}">
                                <div class="node-icon">❓</div>
                                <div class="node-content">
                                    <h4>FAQs</h4>
                                    <span class="page-type">Questions</span>
                                </div>
                            </a>
                        </div>

{{-- 
                        <div class="page-node sub-node">
                            <a href="/pricing">
                                <div class="node-icon">💰</div>
                                <div class="node-content">
                                    <h4>Pricing</h4>
                                    <span class="page-type">Plans</span>
                                </div>
                            </a>
                        </div> --}}


                    </div>
                </div>
            </div>
        </div>

        <!-- Enhanced footer with better visual design -->
        <footer class="footer">
            <div class="footer-content">
                <div class="footer-stats">
                    <div class="footer-stat">
                        <span class="stat-number">15</span>
                        <span class="stat-label">Total Pages</span>
                    </div>
                    <div class="footer-stat">
                        <span class="stat-number">5</span>
                        <span class="stat-label">Main Sections</span>
                    </div>
                    <div class="footer-stat">
                        <span class="stat-number">100%</span>
                        <span class="stat-label">Coverage</span>
                    </div>
                </div>
                <p class="footer-text">Last updated: September 2025 • EventApp Sitemap</p>
            </div>
        </footer>
    </div>
</body>
</html>

@endsection
