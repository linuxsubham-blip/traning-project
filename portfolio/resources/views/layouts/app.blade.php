<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Portfolio')</title>
    <style>
        /* Base Styles - Simple but clean */
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f7f9fc;
            color: #333;
            line-height: 1.6;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        /* Header & Navigation Styling */
        header {
            background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
            color: white;
            padding: 20px 0;
            text-align: center;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }

        header h1 {
            font-size: 2.5em;
            margin-bottom: 10px;
            letter-spacing: 1px;
        }

        nav {
            background-color: #333;
            padding: 12px;
            text-align: center;
        }

        nav a {
            color: white;
            text-decoration: none;
            padding: 8px 20px;
            margin: 0 5px;
            font-weight: bold;
            border-radius: 4px;
            transition: background-color 0.3s;
        }

        nav a:hover, nav a.active {
            background-color: #4facfe;
            color: white;
        }

        /* Main Content Container */
        main {
            flex-grow: 1; /* Pushes footer down */
            width: 90%;
            max-width: 900px;
            margin: 30px auto;
            background-color: white;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        }

        /* Common Elements Styling */
        h2 {
            color: #4facfe;
            border-bottom: 2px solid #eee;
            padding-bottom: 10px;
            margin-bottom: 20px;
            font-size: 2em;
        }

        h3 {
            color: #555;
            margin-top: 25px;
            margin-bottom: 10px;
        }

        a.btn {
             display: inline-block;
             background-color: #4facfe;
             color: white;
             padding: 10px 20px;
             text-decoration: none;
             border-radius: 5px;
             margin-top: 15px;
             transition: background 0.3s;
        }
        
        a.btn:hover {
             background-color: #0088cc;
        }

        /* Footer Styling */
        footer {
            background-color: #333;
            color: #ddd;
            text-align: center;
            padding: 15px;
            margin-top: auto;
        }
    </style>
</head>
<body>

    <header>
        <h1>Sukanta's Portfolio</h1>
        <p>A Beginner's Web Development Journey</p>
    </header>

    <nav>
        <a href="/" class="{{ request()->is('/') ? 'active' : '' }}">Home</a>
        <a href="/about" class="{{ request()->is('about') ? 'active' : '' }}">About Me</a>
        <a href="/contact" class="{{ request()->is('contact') ? 'active' : '' }}">Contact</a>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; {{ date('Y') }} Sukanta. Built with Laravel & HTML/CSS.</p>
    </footer>

</body>
</html>
