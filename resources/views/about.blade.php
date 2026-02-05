<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About - Brenan Lester | Student</title>
    <meta name="description" content="Learn more about Brenan Lester - Student passionate about web development and cybersecurity">
    
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
            <a href="/about" class="nav-link text-[#00ff9d]">About</a>
            <a href="/projects" class="nav-link">Projects</a>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="min-h-screen flex items-center justify-center px-6 md:px-20 py-32">
        <div class="max-w-4xl w-full">
            <div class="mb-6">
                <p class="text-gray-400 text-sm mb-2">Get to know me</p>
                <h1 class="text-5xl md:text-6xl font-bold mb-6">
                    About <span class="text-gradient">Me</span>
                </h1>
            </div>
            
            <div class="grid md:grid-cols-2 gap-8 mb-12">
                <div>
                    <h2 class="text-2xl font-semibold mb-4 text-white">Background</h2>
                    <p class="text-gray-400 leading-relaxed mb-4">
                        I am a student with a strong interest in web development and programming. 
                        My current focus is on mastering Laravel and building elegant, scalable web applications.
                    </p>
                    <p class="text-gray-400 leading-relaxed">
                        I excel at crafting elegant digital experiences and I am proficient in various programming languages and technologies.
                    </p>
                </div>
                
                <div>
                    <h2 class="text-2xl font-semibold mb-4 text-white">Current Focus</h2>
                    <div class="space-y-3">
                        <div class="flex items-start gap-3">
                            <i class="fas fa-code text-[#00ff9d] mt-1"></i>
                            <div>
                                <h3 class="text-white font-medium">Web Development</h3>
                                <p class="text-gray-400 text-sm">Building modern web applications with Laravel</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <i class="fas fa-shield-alt text-[#00ff9d] mt-1"></i>
                            <div>
                                <h3 class="text-white font-medium">Cybersecurity</h3>
                                <p class="text-gray-400 text-sm">Learning and competing in Capture The Flag (CTF) competitions</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <i class="fas fa-graduation-cap text-[#00ff9d] mt-1"></i>
                            <div>
                                <h3 class="text-white font-medium">Continuous Learning</h3>
                                <p class="text-gray-400 text-sm">Always expanding my knowledge and skills</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Skills Section -->
            <div class="mb-12">
                <h2 class="text-2xl font-semibold mb-6 text-white">Skills & Technologies</h2>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                    <div class="stat-card text-center">
                        <i class="fab fa-laravel text-3xl text-[#00ff9d] mb-2"></i>
                        <p class="text-white font-medium">Laravel</p>
                    </div>
                    <div class="stat-card text-center">
                        <i class="fab fa-php text-3xl text-[#00ff9d] mb-2"></i>
                        <p class="text-white font-medium">PHP</p>
                    </div>
                    <div class="stat-card text-center">
                        <i class="fab fa-js text-3xl text-[#00ff9d] mb-2"></i>
                        <p class="text-white font-medium">JavaScript</p>
                    </div>
                    <div class="stat-card text-center">
                        <i class="fab fa-html5 text-3xl text-[#00ff9d] mb-2"></i>
                        <p class="text-white font-medium">HTML/CSS</p>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
