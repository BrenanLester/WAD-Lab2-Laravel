<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Brenan Lester - Portfolio</title>
    <meta name="description" content="Student Portfolio - Brenan Lester P. Espeleta">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <!-- Navigation -->
    <nav class="fixed top-0 left-0 right-0 z-50 px-6 md:px-20 py-6 flex items-center justify-center">
        <div class="flex items-center gap-8">
            <a href="/" class="nav-link">Home</a>
            <a href="/about" class="nav-link">About</a>
            <a href="/projects" class="nav-link">Projects</a>
        </div>
    </nav>

    <!-- Hero Section -->
    <main id="home" class="min-h-screen flex items-center justify-center px-6 md:px-20 pt-24 pb-12">
        <div class="max-w-7xl w-full grid md:grid-cols-2 gap-12 md:gap-20 items-center">
            <!-- Left Content -->
            <div class="space-y-6">
                <div class="space-y-3">
                    <p class="text-gray-400 text-sm md:text-base tracking-wide">Student</p>
                    <h1 class="text-4xl md:text-6xl lg:text-7xl font-bold leading-tight">
                        Hello I'm<br>
                        <span class="text-gradient">Brenan Lester</span>
                    </h1>
                </div>
                
                <p class="text-gray-400 text-base md:text-lg leading-relaxed max-w-xl">
                    I am a student who is passionate about technology and I am always looking for new opportunities to learn and grow.
                </p>
                
                <!-- Social Icons -->
                <div class="flex items-center gap-4 pt-6">
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
            
            <!-- Right Content - Profile Image -->
            <div class="flex justify-center md:justify-end">
                <div class="profile-border w-72 h-72 md:w-96 md:h-96 rounded-full overflow-hidden">
                    <img src="/images/BrenanPotfolio.jfif" 
                         alt="Profile" 
                         class="w-full h-full object-cover rounded-full">
                </div>
            </div>
        </div>
    </main>

</body>
</html>
