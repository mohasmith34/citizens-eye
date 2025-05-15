<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>Mohaabb - Streamlined Community Solutions</title>
    <meta name="description" content="Professional platform connecting community issues with the right authorities for fast resolution">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: {
                            50: '#f0fdf4',
                            100: '#dcfce7',
                            200: '#bbf7d0',
                            300: '#86efac',
                            400: '#4ade80',
                            500: '#22c55e',
                            600: '#16a34a',
                            700: '#15803d',
                            800: '#166534',
                            900: '#14532d',
                        }
                    },
                    fontFamily: {
                        sans: ['Inter', 'system-ui', 'sans-serif'],
                    },
                    animation: {
                        'fade-in': 'fadeIn 0.5s ease-in forwards',
                        'slide-up': 'slideUp 0.6s ease-out forwards',
                        'float': 'float 6s ease-in-out infinite',
                    },
                    keyframes: {
                        fadeIn: {
                            '0%': { opacity: '0' },
                            '100%': { opacity: '1' },
                        },
                        slideUp: {
                            '0%': { transform: 'translateY(20px)', opacity: '0' },
                            '100%': { transform: 'translateY(0)', opacity: '1' },
                        },
                        float: {
                            '0%, 100%': { transform: 'translateY(0)' },
                            '50%': { transform: 'translateY(-15px)' },
                        }
                    }
                }
            }
        }
    </script>
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet"/>
    
    <style>
        .text-gradient {
            background: linear-gradient(90deg, #16a34a 0%, #0d9488 100%);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }
        
        .path-animation path {
            stroke-dasharray: 1000;
            stroke-dashoffset: 1000;
            animation: draw 2s ease-out forwards;
        }
        
        @keyframes draw {
            to { stroke-dashoffset: 0; }
        }
        
        @media (prefers-reduced-motion: reduce) {
            * {
                animation-duration: 0.01ms !important;
                animation-iteration-count: 1 !important;
                transition-duration: 0.01ms !important;
                scroll-behavior: auto !important;
            }
        }
    </style>
</head>
<body class="antialiased text-gray-800 bg-white">
    <!-- Header -->
    <header class="fixed top-0 left-0 right-0 z-40 bg-white/80 backdrop-blur-md border-b border-gray-100 transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center">
                    <span class="text-xl font-bold text-primary-600">Mohaabb</span>
                </div>
                
                <!-- Desktop Navigation -->
                <nav class="hidden md:flex items-center space-x-8">
                    <a href="#" class="text-sm font-medium text-primary-600 hover:text-primary-800 transition-colors">Home</a>
                    <a href="#" class="text-sm font-medium text-gray-500 hover:text-primary-600 transition-colors">About</a>
                    <div class="relative group">
                        <button class="flex items-center text-sm font-medium text-gray-500 hover:text-primary-600 transition-colors">
                            Services
                            <svg class="ml-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div class="absolute left-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 z-50 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200">
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-primary-50 hover:text-primary-600">Issue Reporting</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-primary-50 hover:text-primary-600">Status Tracking</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-primary-50 hover:text-primary-600">Community Support</a>
                        </div>
                    </div>
                    <a href="#" class="text-sm font-medium text-gray-500 hover:text-primary-600 transition-colors">Contact</a>
                </nav>
                
                <!-- Auth Buttons -->
                <div class="hidden md:flex items-center space-x-4">
                    <a href="login" class="text-sm font-medium text-primary-600 hover:text-primary-800 px-4 py-2 transition-colors">Log in</a>
                    <a href="register" class="bg-primary-600 hover:bg-primary-700 text-white text-sm font-medium px-5 py-2 rounded-md transition-colors duration-200">Sign up</a>
                </div>
                
                <!-- Mobile menu button -->
                <div class="md:hidden">
                    <button id="mobile-menu-button" class="text-gray-500 hover:text-primary-600 focus:outline-none">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        
        <!-- Mobile menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-white border-t border-gray-200">
            <div class="px-2 pt-2 pb-3 space-y-1">
                <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-primary-600 bg-primary-50">Home</a>
                <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-600 hover:text-primary-600 hover:bg-primary-50">About</a>
                <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-600 hover:text-primary-600 hover:bg-primary-50">Services</a>
                <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-600 hover:text-primary-600 hover:bg-primary-50">Contact</a>
                <div class="pt-4 border-t border-gray-200">
                    <a href="#" class="block w-full px-3 py-2 rounded-md text-base font-medium text-primary-600 hover:bg-primary-50">Log in</a>
                    <a href="#" class="block w-full px-3 py-2 mt-2 rounded-md text-base font-medium text-white bg-primary-600 hover:bg-primary-700">Sign up</a>
                </div>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="pt-28 pb-16 md:pt-36 md:pb-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:grid lg:grid-cols-12 lg:gap-8 items-center">
                <div class="sm:text-center md:max-w-2xl md:mx-auto lg:col-span-6 lg:text-left">
                    <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
                        <span class="block">Streamlined solutions</span>
                        <span class="block text-gradient">for community issues</span>
                    </h1>
                    <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                        Connect your community concerns directly to the right authorities with our efficient reporting platform.
                    </p>
                    <div class="mt-8 sm:max-w-lg sm:mx-auto sm:text-center lg:text-left lg:mx-0">
                        <div class="flex flex-col sm:flex-row space-y-3 sm:space-y-0 sm:space-x-4">
                            <a href="login" class="flex items-center justify-center px-6 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-primary-600 hover:bg-primary-700 transition-colors duration-200">
                                Get started
                            </a>
                            <a href="#" class="flex items-center justify-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-primary-700 bg-primary-100 hover:bg-primary-200 transition-colors duration-200">
                                How it works
                            </a>
                        </div>
                    </div>
                </div>
                <div class="mt-12 relative sm:max-w-lg sm:mx-auto lg:mt-0 lg:max-w-none lg:mx-0 lg:col-span-6 lg:flex lg:items-center">
                    <div class="relative mx-auto w-full">
                        <img class="w-full animate-float" src="imgs\construction-team.png" alt="Community reporting app screenshot">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works Section -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <h2 class="text-base text-primary-600 font-semibold tracking-wide uppercase">How it works</h2>
                <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                    Simple three-step process
                </p>
                <p class="mt-4 max-w-2xl text-lg text-gray-500 lg:mx-auto">
                    Quickly report issues and get them routed to the appropriate authorities.
                </p>
            </div>

            <div class="mt-16">
                <div class="relative">
                    <div class="hidden lg:block absolute top-0 left-1/2 transform -translate-x-1/2 w-3/4 h-full">
                        <svg class="w-full h-full" viewBox="0 0 1000 100" preserveAspectRatio="none">
                            <path class="path-animation" d="M0,50 Q250,0 500,50 T1000,50" stroke="#d1fae5" stroke-width="2" fill="none" stroke-dasharray="5,5"></path>
                        </svg>
                    </div>
                    
                    <div class="relative grid grid-cols-1 gap-8 lg:grid-cols-3 lg:gap-16">
                        <!-- Step 1 -->
                        <div class="bg-white p-6 rounded-xl hover:shadow-md transition-shadow duration-300">
                            <div class="flex items-center justify-center h-12 w-12 rounded-md bg-primary-500 text-white">
                                <span class="text-xl font-bold">1</span>
                            </div>
                            <div class="mt-6">
                                <h3 class="text-lg font-medium text-gray-900">Report the issue</h3>
                                <p class="mt-2 text-base text-gray-500">
                                    Snap a clear photo of the problem you want to report and provide basic details.
                                </p>
                            </div>
                        </div>
                        
                        <!-- Step 2 -->
                        <div class="bg-white p-6 rounded-xl hover:shadow-md transition-shadow duration-300">
                            <div class="flex items-center justify-center h-12 w-12 rounded-md bg-primary-500 text-white">
                                <span class="text-xl font-bold">2</span>
                            </div>
                            <div class="mt-6">
                                <h3 class="text-lg font-medium text-gray-900">We route it</h3>
                                <p class="mt-2 text-base text-gray-500">
                                    Our system directs your report to the appropriate department based on the issue type.
                                </p>
                            </div>
                        </div>
                        
                        <!-- Step 3 -->
                        <div class="bg-white p-6 rounded-xl hover:shadow-md transition-shadow duration-300">
                            <div class="flex items-center justify-center h-12 w-12 rounded-md bg-primary-500 text-white">
                                <span class="text-xl font-bold">3</span>
                            </div>
                            <div class="mt-6">
                                <h3 class="text-lg font-medium text-gray-900">Get it resolved</h3>
                                <p class="mt-2 text-base text-gray-500">
                                    Authorities handle the issue and provide updates until resolution.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits Section -->
    <section class="py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:grid lg:grid-cols-12 lg:gap-8 items-center">
                <div class="lg:col-span-6">
                    <img class="w-full max-w-md mx-auto animate-float" src="imgs\Construction worker-bro.png" alt="Community working together">
                </div>
                
                <div class="mt-12 lg:mt-0 lg:col-span-6">
                    <h2 class="text-3xl font-extrabold text-gray-900">
                        Why choose our platform
                    </h2>
                    
                    <div class="mt-8 space-y-8">
                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <div class="flex items-center justify-center h-12 w-12 rounded-md bg-primary-500 text-white">
                                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-medium text-gray-900">Simple to use</h3>
                                <p class="mt-1 text-gray-500">
                                    Our intuitive interface makes reporting issues quick and straightforward for everyone.
                                </p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <div class="flex items-center justify-center h-12 w-12 rounded-md bg-primary-500 text-white">
                                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-medium text-gray-900">Completely free</h3>
                                <p class="mt-1 text-gray-500">
                                    No hidden fees - our service is completely free for community members to use.
                                </p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <div class="flex items-center justify-center h-12 w-12 rounded-md bg-primary-500 text-white">
                                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-medium text-gray-900">Fast response</h3>
                                <p class="mt-1 text-gray-500">
                                    Issues are routed immediately to the right department for quick resolution.
                                </p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <div class="flex items-center justify-center h-12 w-12 rounded-md bg-primary-500 text-white">
                                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-medium text-gray-900">24/7 Support</h3>
                                <p class="mt-1 text-gray-500">
                                    Our team is always available to help with any questions or issues.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="bg-gray-100 rounded-xl mx-6 my-10">
        <div class="max-w-7xl mx-auto py-10 px-8 flex flex-col md:flex-row md:items-center md:justify-between gap-6">
            <h2 class="text-primary-600 font-semibold text-xl md:text-2xl leading-tight max-w-md">
                Create your account today<br>
                and get started for <strong>free!</strong>
            </h2>
            <button class="bg-primary-600 text-white rounded-full px-8 py-3 text-sm md:text-base font-semibold whitespace-nowrap hover:bg-primary-700 transition-transform duration-300 hover:scale-105">
                Create your account for Free!
            </button>
        </div>
    </section>

    <!-- Footer -->
    <footer class="mt-20 mb-6">
        <div class="flex flex-col md:flex-row md:items-center justify-center text-primary-500 text-sm md:text-base font-normal">
            <nav class="flex justify-center space-x-20 mb-20 md:mb-0">
                <a href="#" class="hover:underline transition-all duration-300">Home</a>
                <a href="#" class="hover:underline transition-all duration-300">About</a>
                <a href="#" class="hover:underline transition-all duration-300">Pricing</a>
                <a href="#" class="hover:underline transition-all duration-300">Blog</a>
                <a href="#" class="hover:underline transition-all duration-300">Contact</a>
            </nav>
        </div>
        <hr class="border-gray-300 my-6"/>
        <p class="text-center text-xs text-gray-700 font-normal pb-6">Copyright © 2025 Mohaabb | All Rights Reserved</p>
    </footer>

    <script>
        // Mobile menu toggle
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        });

        // Scroll animations
        document.addEventListener('DOMContentLoaded', function() {
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('animate-fade-in');
                        observer.unobserve(entry.target);
                    }
                });
            }, observerOptions);

            document.querySelectorAll('.scroll-animate').forEach(el => {
                observer.observe(el);
            });
        });

        // Add shadow to header on scroll
        window.addEventListener('scroll', function() {
            const header = document.querySelector('header');
            if (window.scrollY > 10) {
                header.classList.add('shadow-md');
            } else {
                header.classList.remove('shadow-md');
            }
        });
    </script>
</body>
</html>