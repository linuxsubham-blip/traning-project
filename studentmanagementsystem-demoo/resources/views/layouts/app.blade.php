<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Siliguri Institute of Technology</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex flex-col min-h-screen">

    <!-- HEADER -->
    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto flex flex-col md:flex-row items-center justify-between p-4">
            <div class="text-2xl font-bold text-blue-700 mb-2 md:mb-0">SIT</div>

            <nav class="space-x-4 text-sm font-medium">
                <a href="/" class="hover:text-blue-600">Home</a>
                <a href="/about" class="hover:text-blue-600">About Us</a>
                <a href="/contact" class="hover:text-blue-600">Contact Us</a>
                @guest
                <a href="/login" class="hover:text-blue-600">Login</a>
                <a href="/register" class="hover:text-blue-600">Register</a>
                @else
                <a href="/dashboard" class="hover:text-blue-600">Dashboard</a>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button class="red-500" >Logout</button>
                </form>
                @endguest
            </nav>
        </div>
    </header>

    <!-- CONTENT -->
    <main class="flex-grow max-w-7xl mx-auto p-4 w-full">
        @yield('content')
    </main>

    <!-- FOOTER -->
    <footer class="bg-gray-900 text-white text-center py-6 mt-10">
        <p>© 2026 Siliguri Institute of Technology</p>
    </footer>

</body>
</html>