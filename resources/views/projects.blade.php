<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Projects - Brenan Lester | Student</title>
    <meta name="description" content="Explore projects by Brenan Lester - Web development, CTF competitions, and Laravel applications">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <!-- Navigation -->
    <nav class="fixed top-0 left-0 right-0 z-50 px-6 md:px-20 py-6 flex items-center justify-center">
        <div class="flex items-center gap-8">
            <a href="/" class="nav-link">Home</a>
            <a href="/about" class="nav-link">About</a>
            <a href="/projects" class="nav-link text-[#00ff9d]">Projects</a>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="min-h-screen flex items-center justify-center px-6 md:px-20 py-32">
        <div class="max-w-6xl mx-auto w-full">
            <div class="mb-16 text-center">
                <h1 class="text-5xl md:text-7xl font-bold mb-6 text-white">
                    My <span class="text-gradient">Projects</span>
                </h1>
                <p class="uppercase text-xs font-semibold tracking-widest text-emerald-400 leading-relaxed py-10">
                    Here are some of the projects I've been working on.<br class="hidden md:block">
                    From web development to cybersecurity challenges.
                </p>

            </div>
            
            <!-- Projects Grid -->
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 md:gap-10">
                <!-- Project Card 1 -->
                <div class="stat-card cursor-pointer group">
                    <div class="mb-6 flex-1 w-full flex flex-col items-center">
                        <div class="w-14 h-14 bg-[#00ff9d]/10 rounded-xl flex items-center justify-center mb-6 border border-[#00ff9d]/20 group-hover:border-[#00ff9d] group-hover:bg-[#00ff9d]/20 transition-all duration-300 shadow-[0_0_15px_rgba(0,255,157,0.1)]">
                            <i class="fas fa-code text-2xl text-[#00ff9d]"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-white mb-3">Web Development</h3>
                        <p class="text-gray-400 text-base leading-relaxed">
                            Building modern, responsive web applications using the latest technologies and best practices.
                        </p>
                    </div>
                    <div class="w-full flex flex-wrap gap-2 mt-auto pt-6 border-t border-gray-800/50 justify-center">
                        <span class="text-xs px-3 py-1 bg-gray-800/80 text-gray-300 border border-gray-700/50 rounded-full">Laravel</span>
                        <span class="text-xs px-3 py-1 bg-gray-800/80 text-gray-300 border border-gray-700/50 rounded-full">PHP</span>
                        <span class="text-xs px-3 py-1 bg-gray-800/80 text-gray-300 border border-gray-700/50 rounded-full">Tailwind</span>
                    </div>
                </div>
                
                <!-- Project Card 2 -->
                <div class="stat-card cursor-pointer group">
                    <div class="mb-6 flex-1 w-full flex flex-col items-center">
                        <div class="w-14 h-14 bg-[#00ff9d]/10 rounded-xl flex items-center justify-center mb-6 border border-[#00ff9d]/20 group-hover:border-[#00ff9d] group-hover:bg-[#00ff9d]/20 transition-all duration-300 shadow-[0_0_15px_rgba(0,255,157,0.1)]">
                            <i class="fas fa-flag text-2xl text-[#00ff9d]"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-white mb-3">CTF Competitions</h3>
                        <p class="text-gray-400 text-base leading-relaxed">
                            Actively participating in Capture The Flag competitions to enhance cybersecurity knowledge and skills.
                        </p>
                    </div>
                    <div class="w-full flex flex-wrap gap-2 mt-auto pt-6 border-t border-gray-800/50 justify-center">
                        <span class="text-xs px-3 py-1 bg-gray-800/80 text-gray-300 border border-gray-700/50 rounded-full">Security</span>
                        <span class="text-xs px-3 py-1 bg-gray-800/80 text-gray-300 border border-gray-700/50 rounded-full">Forensics</span>
                        <span class="text-xs px-3 py-1 bg-gray-800/80 text-gray-300 border border-gray-700/50 rounded-full">Crypto</span>
                    </div>
                </div>
                
                <!-- Project Card 3 -->
                <div class="stat-card cursor-pointer group">
                    <div class="mb-6 flex-1 w-full flex flex-col items-center">
                        <div class="w-14 h-14 bg-[#00ff9d]/10 rounded-xl flex items-center justify-center mb-6 border border-[#00ff9d]/20 group-hover:border-[#00ff9d] group-hover:bg-[#00ff9d]/20 transition-all duration-300 shadow-[0_0_15px_rgba(0,255,157,0.1)]">
                            <i class="fab fa-laravel text-2xl text-[#00ff9d]"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-white mb-3">Learning Laravel</h3>
                        <p class="text-gray-400 text-base leading-relaxed">
                            Deepening expertise in Laravel framework through hands-on projects and advanced features exploration.
                        </p>
                    </div>
                    <div class="w-full flex flex-wrap gap-2 mt-auto pt-6 border-t border-gray-800/50 justify-center">
                        <span class="text-xs px-3 py-1 bg-gray-800/80 text-gray-300 border border-gray-700/50 rounded-full">Laravel</span>
                        <span class="text-xs px-3 py-1 bg-gray-800/80 text-gray-300 border border-gray-700/50 rounded-full">Eloquent</span>
                        <span class="text-xs px-3 py-1 bg-gray-800/80 text-gray-300 border border-gray-700/50 rounded-full">Blade</span>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="px-6 md:px-20 py-24 border-t border-gray-800">
        <div class="mt-24 text-center">
            <p class="text-gray-400 mb-6 text-lg">Want to collaborate on a project?</p>
            <div class="flex items-center justify-center gap-4 pt-6">
                <a href="https://github.com/BrenanLester" target="_blank" class="social-icon">
                    <i class="fab fa-github"></i>
                </a>
                <a href="https://www.linkedin.com/in/brenan-lester-espeleta-068811369/" target="_blank" class="social-icon">
                    <i class="fab fa-linkedin-in"></i>
                </a>
                <a href="https://brenanlesterespeleta05@gmail.com" class="social-icon">
                    <i class="fas fa-envelope"></i>
                </a>
            </div>
        </div>
    </footer>
