<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Laravel App')</title>
    @vite('resources/css/app.css')
</head>
<body class="font-sans bg-gray-200">
    <header class="bg-gray-800 text-white py-4">
        <div class="container mx-auto">
            <nav class="flex justify-between items-center">
                <a href="{{ url('/') }}" class="font-bold text-xl">My Website</a>
                <ul class="flex space-x-2 > * + *">
                    <li><a href="{{ url('/') }}" class="hover:text-gray-300">Home</a></li>
                    <li><a href="{{ url('/about') }}" class="hover:text-gray-300">About</a></li>
                    <li><a href="{{ url('/contact') }}" class="hover:text-gray-300">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
    <section class="hero bg-gray-900 text-white py-20">
        <div class="container mx-auto flex flex-col items-center">
            <h1 class="text-5xl font-bold mb-4">Welcome to Our Website</h1>
            <p class="text-xl mb-8 text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam gravida mauris id turpis tincidunt, et molestie ipsum ultricies.</p>
            <a href="{{ url('/about') }}" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-md">Learn More</a>
        </div>
    </section>
    
    <!-- Features Section -->
    <section class="features bg-gray-100 py-20">
        <div class="container mx-auto">
            <h2 class="text-3xl font-bold mb-8 text-center">Our Features</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                <!-- Feature 1 -->
                <div class="feature bg-white p-8 rounded-lg shadow-md">
                    <h3 class="text-xl font-bold mb-4">Feature 1</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                <!-- Feature 2 -->
                <div class="feature bg-white p-8 rounded-lg shadow-md">
                    <h3 class="text-xl font-bold mb-4">Feature 2</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                <!-- Feature 3 -->
                <div class="feature bg-white p-8 rounded-lg shadow-md">
                    <h3 class="text-xl font-bold mb-4">Feature 3</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action Section -->
    <section class="cta bg-blue-500 text-white py-20">
        <div class="container mx-auto flex flex-col items-center">
            <h2 class="text-3xl font-bold mb-4">Ready to Get Started?</h2>
            <p class="text-xl mb-8 text-center">Sign up now and start experiencing the benefits!</p>
            <a href="#" class="bg-white text-blue-500 hover:bg-blue-600 py-2 px-4 rounded-md">Sign Up</a>
        </div>
    </section>
    </main>

    <footer class="bg-gray-800 text-white py-1">
        <div class="container mx-auto text-center">
            <p class="text-white py-4 font-bold">Fauzan Almas Saepullah - 1301210558</p>
        </div>
    </footer>
</body>
</html>
